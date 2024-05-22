@extends('Frontend.layouts.master')

@section('content')
    <section>
        <div class="pagenation-holder" style="background-color: rgba(70, 131, 180, 0.281)">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Search Results</h4>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="current"><a href="#">Search</a></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->


    <div class="col-xs-12 text-center" style="margin-top:70px;">
        <div class="sec-title-container">
            @if (@$services->count() > 0 || @$products->count() > 0)
            <h6 class="c5-sec-title font-weight-6 less-mar-1 montserrat title">Showing results for "{{$searchText}}".</h6>
            @else
            <h6 class="c5-sec-title font-weight-6 less-mar-1 montserrat title">No results found for "{{$searchText}}".</h6>
            @endif
        </div>
    </div>
    <div class="clearfix"></div>

    @if (@$services->count() > 0)
        <section class="parallax-1">
            <div class="container-fluid nopadding">
                <div class="parallax-overlay">
                    <div class="container sec-tpadding-3 sec-bpadding-3">
                        <div class="row justify-content-start">
                            <div class="col-xs-12 text-start">
                                <div class="sec-title-container">
                                    <h2 class="c5-sec-title font-weight-6 less-mar-1 montserrat title">Services</h2>
                                    {{-- <p class="c5-sub-title raleway">Order your prefered services from here.</p> --}}
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <!--end title-->

                            @foreach ($services as $item)
                                <a href="{{ route('customer.bookOrder', $item->id) }}">
                                    <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                        <div class="c5-feature-box-7 margin-bottom">
                                            <div class="img-box">
                                                <div class="overlay">

                                                </div>
                                                <img src="{{ asset('uploads/service/' . $item->image) }}" width="100%"
                                                    style="height: 200px;" alt="" class="img-responsive" />
                                            </div>
                                            <div class="text-box padding-2 text-center">
                                                <h4 class="montserrat less-mar-1">{{ $item->name ?? null }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                            <!--end item-->


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
    @endif


    @if (@$products->count() > 0)
        <section class="parallax-1">
            <div class="container-fluid nopadding">
                <div class="parallax-overlay">
                    <div class="container sec-tpadding-3 sec-bpadding-3">
                        <div class="row">
                            <div class="col-xs-12 text-start">
                                <div class="sec-title-container">
                                    <h2 class="c5-sec-title font-weight-6 less-mar-1 montserrat title">Products</h2>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <!--end title-->

                            @foreach ($products as $item)
                                <a href="{{ route('customer.bookOrder', $item->id) }}">
                                    <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                        <div class="c5-feature-box-7 margin-bottom">
                                            <div class="img-box">
                                                <div class="overlay">
                                                    {{-- <form action="{{route('add_to_cart')}}" method="POST" style="display: inline; margin: 0;">
                                                    @csrf
                                                    <input type="hidden" name="quantity" value="1">
                                                    <input type="hidden" name="product_id" value="{{$item->id}}">
                                                    <button type="submit" style="border: 0; padding: 0; background: none; cursor: pointer; color: black;"> --}}
                                                    <div class="post-icon" title="Add To Cart"
                                                        style="background-color: rgba(7, 7, 7, 0.315);">
                                                        <i aria-hidden="true" class="fa fa-shopping-cart"></i>
                                                    </div>
                                                    {{-- </button>
                                                </form> --}}
                                                </div>
                                                <img src="{{ asset('uploads/product/' . $item->image) }}" width="100%"
                                                    style="height: 250px" alt="" class="img-responsive" />
                                            </div>
                                            <div class="text-box padding-2">
                                                <h4 class="montserrat less-mar-1">{{ $item->name ?? null }}</h4> <br>
                                                <h4 style="color: rgb(209, 147, 33)">
                                                    @if (@$item->offer)
                                                        @if ($item->offer->offer_type == '৳')
                                                            ৳ {{ $item->price - @$item->offer->offer }}
                                                        @elseif (@$item->offer->offer_type == '%')
                                                            ৳
                                                            {{ $item->price - $item->price * (@$item->offer->offer / 100) }}
                                                        @endif
                                                    @else
                                                        ৳ {{ $item->discount_price ?? $item->price }}
                                                    @endif
                                                </h4>
                                                @if ($item->discount_price || $item->offer)
                                                    <h6> <span style="text-decoration: line-through;">৳
                                                            {{ $item->price }}</span>
                                                        @if (@$item->offer->offer)
                                                            -{{ $item->offer->offer }}{{ $item->offer->offer_type }}
                                                        @endif
                                                    </h6>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                            <!--end item-->


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
    @endif

@endsection
