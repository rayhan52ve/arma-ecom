@extends('Frontend.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-auto">

                            <div class="cart-parent">

                                <div class="cart-box">
                                    <div class="content">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($cartItems as $item)
                                                    <tr id="cartItem_{{ $item['rowId'] }}">
                                                        <td >
                                                            @if (isset($item['options']['image']))
                                                                <img src="{{ asset('/uploads/product/' . $item['options']['image']) }}"
                                                                    alt="{{ $item['name'] }}" width="80px" height="80px">
                                                            @endif
                                                        </td>
                                                        <td >{{ $item['name'] }}</td>

                                                        <td><input class="quantityInput"
                                                                style="width: 40px" type="number"
                                                                value="{{ $item['qty'] }}" min="1"
                                                                {{ @$coupon ? 'disabled' : '' }}></td>
                                                        <td >
                                                            {{ $item['price'] * $item['qty'] }}
                                                        </td>
                                                        <td >
                                                            <a title="Remove"
                                                                href="{{ route('delete_cart', $item['rowId']) }}"
                                                                class="close-btn deleteCartItem btn btn-circle btn-danger"
                                                                data-rowid="{{ $item['rowId'] }}">X</a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="5" class="text-center">No Product added to cart</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        <hr>
                                        <div class="row " id="subtotal">
                                            <div class="col-xs-8">
                                                <h6 id="cartItemCount">{{ $cartCount }} item(s)</h6>
                                            </div>
                                            <div class="col-xs-4 text-right">

                                                <h6 id="updatedSubtotal">Sub Total = ৳ {{ $subTotal }}</h6>

                                                @if (@$coupon)
                                                    <h6>- {{ $couponValue }}{{ $coupon->price_type == '%' ? '%' : '৳' }}
                                                        (<span class="text-success">Discount</span>)</h6>
                                                    <hr>
                                                    <h6>Total = ৳ {{ $discountedSubTotal }}</h6>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-4" style="margin-left: 30px">
                <h4>Add Coupon</h4>
                <form id="couponForm" method="POST" action="{{ route('checkout') }}">
                    @csrf
                    <div class="row" style="margin-bottom: 40px">
                        <div class="col-md-12 form-inline">
                            <input type="text" name="inputCoupon" class="form-control" id="inputCoupon"
                                placeholder="Enter Coupon Code">
                            <button type="submit" class="btn btn-outline-warning">Submit</button>
                        </div>
                    </div>
                </form>

                <h4>Confirm Order</h4>
                <form method="POST" action="{{ route('customer.storeOrder') }}" id="orderForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="inputAddress"
                                value="{{ auth()->user()->address ?? null }}" placeholder="Enter your address" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputAddress" class="form-label">Phone No.</label>
                            <input type="number" name="phone" class="form-control" id="inputAddress"
                                value="{{ auth()->user()->phone ?? null }}" placeholder="Enter your phone number" required>
                        </div>
                        <input type="hidden" name="order_type" value="product">
                        <input type="hidden" name="subtotal" value="{{ $subTotal }}">
                        @if (@$coupon)
                            <input type="hidden" name="total" class="form-control" value="{{ $discountedSubTotal }}">
                            @if (@$coupon->price_type == '%')
                                <input type="hidden" name="coupon" class="form-control"
                                    value="{{ $couponValuePercentage }}">
                            @else
                                <input type="hidden" name="coupon" class="form-control" value="{{ $couponValue }}">
                            @endif
                        @endif
                        @foreach ($cartItems as $product)
                            <input type="hidden" name="products[{{ $product['id'] }}][id]" value="{{ $product['id'] }}">
                            <input type="hidden" name="products[{{ $product['id'] }}][qty]"
                                value="{{ $product['qty'] }}">
                            <input type="hidden" name="products[{{ $product['id'] }}][price]"
                                value="{{ $product['price'] }}">
                        @endforeach
                    </div>
                    <div class="col-md-12" style="margin-left: -20px; display: flex;">
                        <button type="submit" class="btn btn-primary">Order Now</button>
                        <a href="{{ route('front.products') }}" type="button" class="btn btn-success">Continue
                            Shopping</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.deleteCartItem').on('click', function(e) {
                e.preventDefault();
                var rowId = $(this).data('rowid');
                $.ajax({
                    url: "{{ url('delete-cart') }}/" + rowId,
                    type: 'GET',
                    success: function(response) {
                        if (response.success) {
                            $('#cartItem_' + rowId).remove();
                            // location.reload();
                            $('#subtotal').load(location.href + ' #subtotal');
                            $('#orderForm').load(location.href + ' #orderForm');
                            toastr.success('Product Removed From Cart');
                        } else {
                            alert('Error removing item from the cart.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });


            $('.quantityInput').on('change', function(e) {
                e.preventDefault();
                var rowId = $(this).closest('tr').attr('id').split('_')[1];
                var quantity = $(this).val();

                $.ajax({
                    url: '{{ route('update_cart', ['id' => ':rowId']) }}'.replace(':rowId', rowId),
                    method: 'POST',
                    data: {
                        rowId: rowId,
                        quantity: quantity
                    },
                    success: function(response) {
                        // location.reload();
                        $('#subtotal').load(location.href + ' #subtotal');
                        $('#orderForm').load(location.href + ' #orderForm');
                        toastr.success('Cart Updated');
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });


        });
    </script>
@endsection
