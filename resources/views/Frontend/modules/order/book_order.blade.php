@extends('Frontend.layouts.master')

@section('content')
    @if (isset($service))
        <section class="section-side-image clearfix">
            <div class="img-holder col-md-12 col-sm-12 col-xs-12">
                <div class="background-imgholder" style="background:url({{ asset('uploads/service/' . $service->image) }});">
                    <img class="nodisplay-image" src="{{ asset('uploads/service/' . $service->image) }}" alt="" />
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                        <div class="header-inner less-height">
                            <div class="overlay no-overlay">
                                <div class="text text-center">
                                    <h3 class="text-white less-mar-1 title montserrat">{{ $service->name ?? null }}</h3>
                                    <h6 class="uppercase text-white sub-title">Get Many More Services</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class=" clearfix"></div>
        <!--end header section -->

        <section>
            <div class="pagenation-holder">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Our Services</h4>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('front.services') }}">Services</a></li>
                                <li class="current"><a href="">{{ $service->name ?? null }}</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!--end section-->
    @else
        <section>
            <div class="pagenation-holder" style="background-color: rgba(70, 131, 180, 0.281)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Our Product</h4>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('front.products') }}">Products</a></li>
                                <li class="current"><a href="">{{ $product->name ?? null }}</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!--end section-->
    @endif

    <section>
        <div class="container">
            <div class="divider-line solid light"></div>
            <div class="row sec-padding">

                @if (isset($service))
                    <div class="col-md-6 margin-bottom"><img src="{{ asset('uploads/service/' . $service->image) }}"
                            style="height: 300px" alt="" class="img-responsive" />
                        <div class="text-box padding-top-4 white">
                            <h4 class="montserrat less-mar-1" style="color:grey;">{{ $service->name ?? null }}</h4>
                            <br />
                            <div style="display: flex; align-items: baseline;">
                                <h4 style="margin-right: 5px;color:yellowgreen;">&#2547; {{ $service->service_charge }}/
                                </h4>
                                <h6 style="color:grey;">{{ $service->charge_type }}</h6>
                            </div>
                        </div>
                    </div>
                    <!--end item-->
                @elseif (isset($product))
                    <section class="sec-padding">
                        <div class="container">
                            <div class="row slide-controls-2">
                                <div class="col-xs-12 text-center">
                                    <div class="sec-title-container">
                                        <h2 class="c5-sec-title font-weight-6 less-mar-1 montserrat title">
                                            {{ $product->name ?? null }} </h2>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!--end title-->

                                <div id="owl-demo7" class="owl-carousel owl-theme">
                                    @foreach ($product->product_galleries as $product_gallery)
                                        <div class="item">
                                            <div class="col-md-8 col-centered text-center">
                                                <div class="c5-feature-box-6">
                                                    <div class="clearfix"></div>
                                                    <br />
                                                    <div class="imgbox-dxlarge center overflow-hidden"><img
                                                            src="{{ asset('uploads/product/gallery/' . $product_gallery->photos) }}"
                                                            alt="" class="img-responsive" /></div>

                                                </div>
                                            </div>
                                            <!--end item-->

                                        </div>
                                    @endforeach

                                    <!--end carousel item  -->

                                </div>
                                <!--end carousel  -->

                            </div>
                        </div>
                    </section>
                    <div class="clearfix"></div>
                    <!-- end section -->

                    <div class="col-md-6 margin-bottom"><img src="{{ asset('uploads/product/' . $product->image) }}"
                            alt="" width="300px" style="height:300px" class="img-responsive" />
                        <div class="text-box padding-4 white">
                            <h4 class="montserrat less-mar-1" style="color:grey;">{{ $product->name ?? null }}</h4>
                            <br />
                            <div style="display: flex; align-items: baseline;">
                                <h4 style="margin-right: 5px;color:yellowgreen;">
                                    @if ($product->offer)
                                        @if ($product->offer->offer_type == '৳')
                                            ৳ {{ $product->price - @$product->offer->offer }}
                                        @elseif ($product->offer->offer_type == '%')
                                            ৳ {{ $product->price - $product->price * (@$product->offer->offer / 100) }}
                                        @endif
                                    @else
                                        ৳ {{ $product->discount_price ?? $product->price }}
                                    @endif
                                </h4>

                            </div>
                            @if ($product->discount_price || $product->offer)
                                <h6> <span style="text-decoration: line-through;">৳
                                        {{ $product->price }}</span>
                                    @if (@$product->offer->offer)
                                        -{{ $product->offer->offer }}{{ $product->offer->offer_type }}
                                    @endif
                                </h6>
                            @endif
                        </div>
                    </div>
                    <!--end item-->
                @endif

                <div class="col-md-6">
                    {!! $service->description ?? null !!}
                    {!! $product->description ?? null !!}

                    <br /> <br />

                    <div class="col-md-12" style="margin-left: -15px">

                        <div class="card" id="confirmOrder">
                            <div class="card-body">
                                @if (isset($service))
                                    @if (auth()->check())
                                        <h2>Confirm Order</h2>

                                        <form method="POST" action="{{ route('customer.storeOrder') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-12">
                                                        <label for="inputAddress" class="form-label">Address</label>
                                                        <input type="text" name="address" class="form-control"
                                                            id="inputAddress" value="{{auth()->user()->address}}" placeholder="Enter your address" required>
                                                    </div>
                                                </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-12">
                                                            <label for="inputAddress" class="form-label">Phone No.</label>
                                                            <input type="number" name="phone" class="form-control"
                                                                id="inputAddress" value="{{auth()->user()->phone}}" placeholder="Enter your phone number"
                                                                required>
                                                        </div>
                                                    </div>

                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <label for="inputAddress2" class="form-label">Service
                                                            Duration</label>
                                                        <input type="number" name="service_time" class="form-control"
                                                            id="inputAddress2" placeholder="Enter Service Time" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="charge_type" class="form-label">Duration Type</label>
                                                        <select name="charge_type" id="charge_type" class="form-control"
                                                            required>
                                                            <option value="Hour"
                                                                {{ $service->charge_type == 'Hour' ? 'selected' : 'disabled' }}>
                                                                Hour
                                                            </option>
                                                            <option value="Minute"
                                                                {{ $service->charge_type == 'Minute' ? 'selected' : 'disabled' }}>
                                                                Minute
                                                            </option>
                                                            <option value="Day"
                                                                {{ $service->charge_type == 'Day' ? 'selected' : 'disabled' }}>
                                                                Day
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="order_type" value="service">
                                                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                                                </div>

                                            </div>
                                            <div class="col-md-12" style="margin-left: -5px">
                                                <button type="submit" class="btn btn-info">Order Now</button>
                                                <a href="{{ route('front.services') }}" type="button"
                                                    class="btn btn-danger">Order More
                                                    Services...</a>
                                            </div>
                                        </form>
                                    @else
                                        <form action="{{ route('customer.authOrder') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                                            <button type="submit" class="btn btn-info">Order Now</button>
                                            <a href="{{ route('front.services') }}" type="button"
                                                class="btn btn-danger">See More
                                                Services...</a>
                                        </form>
                                    @endif
                                @else
                                    @if (auth()->check())
                                        <h2 style="margin-top: 100px" id="returnTocart">Add To Cart</h2>
                                        <form id="addToCartForm" action="{{ route('add_to_cart') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <label for="inputAddress" class="form-label">Quantity</label>
                                                        <input type="number" name="quantity" class="form-control"
                                                            id="inputAddress" placeholder="Enter Product Quantity"
                                                            value="1" required min="1">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="order_type" value="product">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            </div>
                                            <div class="col-md-4" style="margin-left: -5px;">
                                                <button type="button" style="width:100%" id="addToCartBtn"
                                                    class="btn btn-success">Add
                                                    To Cart</button><br>
                                                <a href="{{ route('front.products') }}" style="width:100%"
                                                    type="button" class="btn btn-danger">Continue Shopping</a>
                                            </div>
                                        </form>
                                    @else
                                        <form action="{{ route('customer.authOrder') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <button type="submit" class="btn btn-info">Order Now</button>
                                            <a href="{{ route('front.products') }}" type="button"
                                                class="btn btn-danger">See More</a>
                                        </form>
                                    @endif
                                @endif
                            </div>
                        </div>

                    </div>
                    @if (@$service && $service->reviews->count() > 0)
                        <div style="margin-top: 350px;">
                            <h2>Customer Review Of {{ $service->name }}</h2><br><br>

                            @forelse ($service->reviews as $review)
                                <div class="row" style="margin: 30px">
                                    <div class="col-md-2">
                                        @if (@$review->user->userDetail->image)
                                            <img src="{{ asset('uploads/user/' . $review->user->userDetail->image) }}"
                                                width="80px" height="80px" style="border-radius: 50%;">
                                        @else
                                            <img src="{{ asset('assets/avatar.png') }}" width="80px" height="80px"
                                                style="border-radius: 50%;">
                                        @endif
                                    </div>

                                    <div class="col-md-10">
                                        <div style="margin: 20px">
                                            <h4>{{ $review->user->name }}</h4>
                                            <h6>{{ $review->created_at->toDayDateTimeString() }}</h6>
                                            <p>{{ $review->msg }}</p>
                                            @auth
                                                @if (auth()->user()->id == $review->user->id)
                                                    <div style="display: flex; gap: 10px;">
                                                        {{-- <a href=""><button class="text-primary"
                                                            href="">Edit</button></a> --}}
                                                        <form action="{{ route('customer.review.destroy', $review->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="text-danger" title="Delete"><box-icon
                                                                    type='solid' name='trash-alt'></box-icon></button>
                                                        </form>

                                                    </div>
                                                @endif
                                            @endauth
                                        </div>

                                    </div>
                                </div>

                            @empty
                                <p class="text-center">No Review Yet</p>
                            @endforelse

                        </div>
                    @elseif (@$product && $product->reviews->count() > 0)
                        <div style="margin-top: 400px;">
                            <h2>Customer Review Of {{ $product->name }}</h2><br><br>

                            @forelse ($product->reviews as $review)
                                <div class="row" style="margin: 30px">
                                    <div class="col-md-2">
                                        @if (@$review->user->userDetail->image)
                                            <img src="{{ asset('uploads/user/' . $review->user->userDetail->image) }}"
                                                width="80px" height="80px" style="border-radius: 50%;">
                                        @else
                                            <img src="{{ asset('assets/avatar.png') }}" width="80px" height="80px"
                                                style="border-radius: 50%;">
                                        @endif
                                    </div>

                                    <div class="col-md-10">
                                        <div style="margin: 20px">
                                            <h4>{{ $review->user->name }}</h4>
                                            <h6>{{ $review->created_at->toDayDateTimeString() }}</h6>
                                            <p>{{ $review->msg }}</p>
                                            @auth
                                                @if (auth()->user()->id == $review->user->id)
                                                    <div style="display: flex; gap: 10px;">
                                                        {{-- <a href=""><button class="text-primary"
                                                            href="">Edit</button></a> --}}
                                                        <form action="{{ route('customer.review.destroy', $review->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="text-danger" title="Delete"><box-icon
                                                                    type='solid' name='trash-alt'></box-icon></button>
                                                        </form>

                                                    </div>
                                                @endif
                                            @endauth
                                        </div>

                                    </div>
                                </div>

                            @empty
                                <p class="text-center">No Review Yet</p>
                            @endforelse

                        </div>
                    @endif

                </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->




    @push('script')
        <script>
            $(document).ready(function() {
                $('#addToCartBtn').on('click', function() {
                    var formData = $('#addToCartForm').serialize();

                    $.ajax({
                        type: 'POST',
                        url: '{{ route('add_to_cart') }}',
                        data: formData,
                        success: function(response) {
                            // Use toastr if available
                            if (typeof toastr !== 'undefined') {
                                toastr.success('Product Added To Cart');
                            }

                            $('#addToCartForm')[0].reset();
                            // $('.cart_table').html(response.updatedCartTableHTML);
                            $('#cartItemCount').text(response.updatedCartCount);

                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
