@extends('Customer.layouts.master')
@section('content')
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">

                <div class="table-responsive m-t-20">
                    <h3 class="text-center ">
                        @if (session()->get('language') == 'bangla')
                            Order List
                        @else
                            Order List
                        @endif
                    </h3>
                    <table id="config-table" class="table display table-striped border no-wrap">
                        <thead>
                            <tr>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        সি.নং
                                    @else
                                        SL
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Item(s)
                                    @else
                                        Item(s)
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Placed On
                                    @else
                                        Placed On
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Address
                                    @else
                                        Address
                                    @endif
                                </th>

                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Discount
                                    @else
                                        Discount
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Total(৳)
                                    @else
                                        Total(৳)
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Status
                                    @else
                                        Status
                                    @endif
                                </th>
                                <th>
                                    Action
                                </th>

                                {{-- <th>
                                    @if (session()->get('language') == 'bangla')
                                        একশন
                                    @else
                                        Action
                                    @endif
                                </th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td style="min-width: 200px">
                                        @foreach ($item->productOrderDetails as $key => $productOrderDetail)
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="{{ asset('uploads/product/' . $productOrderDetail->product->image) }}"
                                                        width="60px" style="height:60px" alt="">

                                                </div>
                                                <div class="col-md-3">
                                                    {{ $productOrderDetail->product->name }}<br>
                                                    <b>৳ {{ $productOrderDetail->price }}</b><br>
                                                    x {{ $productOrderDetail->qty }}

                                                </div>
                                                @if ($item->status == 4)
                                                    <div class="col-md-5">
                                                        <form method="post" action="{{ route('customer.review.store') }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <textarea name="msg" id="" cols="30" class="form-control" rows="3" placeholder="Write a review" required></textarea>
                                                            </div>
                                                            <input type="hidden" name="user_id"
                                                                value="{{ auth()->user()->id }}">
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $productOrderDetail->product->id }}">
                                                            <button type="submit"
                                                                class="btn btn-sm btn-outline-primary">Send</button>
                                                            <a href="{{ route('customer.bookOrder', $productOrderDetail->product->id) }}"
                                                                class="btn btn-sm btn-outline-info">See Reviews</a>
                                                        </form>
                                                    </div>
                                                @endif
                                            </div><br>
                                        @endforeach

                                    </td>
                                    <td>
                                        {{ $item->created_at->toDayDateTimeString() ?? null }}
                                    </td>
                                    <td>
                                        {{ $item->user->address ?? null }}
                                    </td>
                                    <td class="text-success">
                                        {!! $item->coupon_discount ?? '<span class="text-danger">N/A</span>' !!}
                                    </td>
                                    <td>
                                        @if ($item->coupon_discount)
                                            {{ $item->total }}
                                        @else
                                            {{ $item->subtotal }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status == 1)
                                            <span class="text-warning">Pending</span>
                                        @elseif ($item->status == 2)
                                            <span class="text-success">Accepted</span>
                                        @elseif ($item->status == 3)
                                            <span class="text-info">Shipped</span>
                                        @elseif ($item->status == 4)
                                            <span class="text-success">Completed</span>
                                        @else
                                            <span class="text-danger">Declined</span>
                                        @endif
                                    </td>
                                    <td><a href="{{route('invoice',$item->id)}}" class="btn btn-purple">Invoice</a></td>
                                    {{-- <td>
                                        <a href="" class="btn btn-primary">Details</a>
                                    </td> --}}

                                    {{-- <td>
                                        @if ($item->status == 4)
                                            @if ($item->payment_status == 0)
                                                <a href="{{ route('customer.customerPayment', $item->id) }}"
                                                    class="btn btn-outline-success">Pay</a>
                                            @else
                                                <span class="text-success">Payment Completed</span>
                                            @endif
                                        @endif
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
