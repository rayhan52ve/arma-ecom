@extends('Frontend.layouts.master')

@section('content')
    <section>
        <div class="pagenation-holder" style="background-color: rgba(70, 131, 180, 0.281)">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Products</h4>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="current"><a href="#">Products</a></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->

    <section class="parallax-1">
        <div class="container-fluid nopadding">
            <div class="parallax-overlay">
                <div class="container sec-tpadding-3 sec-bpadding-3">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="sec-title-container">
                                <h2 class="c5-sec-title font-weight-6 less-mar-1 montserrat title">Our Products</h2>
                                {{-- <p class="c5-sub-title raleway">Buy Our Products.</p> --}}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!--end title-->
                        @foreach ($productCategories as $key => $productCategory)
                            <div style="margin-top: 100px;">
                                <h2 style="color: rgb(19, 148, 8);cursor: pointer;" class="category-toggle"
                                    data-category="{{ $productCategory->name }}">{{ $productCategory->name }} <box-icon
                                        name='left-arrow-alt' animation='fade-right'></box-icon></h2>
                            </div>
                            <hr style="color: black !important;">
                            <div class="row subcategory-container" data-category="{{ $productCategory->name }}"
                                @if ($key !== 0 && $key !== 1 && $key !== 2) style="display: none;" @endif>
                                @forelse ($productCategory->products as $item)
                                    <a href="{{ route('customer.bookOrder', $item->id) }}">
                                        <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                            <div class="c5-feature-box-7 margin-bottom">
                                                <div class="img-box">
                                                    <div class="overlay">
                                                        <div class="post-icon" title="Add To Cart"
                                                            style="background-color:rgba(233, 238, 226, 0.377);color: black">
                                                            <i aria-hidden="true" class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                    <img src="{{ asset('uploads/product/' . $item->image) }}" width="100%"
                                                        style="height: 250px" alt="" class="img-responsive" />
                                                </div>
                                                <div class="text-box padding-2">
                                                    <h4 class="montserrat less-mar-1">{{ $item->name ?? null }}</h4> <br>
                                                    <h4 style="color: rgb(209, 147, 33)">
                                                        @if ($item->offer)
                                                            @if ($item->offer->offer_type == '৳')
                                                                ৳ {{ $item->price - @$item->offer->offer }}
                                                            @elseif ($item->offer->offer_type == '%')
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
                                                        </h6>
                                                    @endif
                                                    </h6>
                                @endif
                                {{-- <br />
                                            <div class="text-center">
                                                <a class="btn btn-warning"
                                                    href="{{ route('customer.bookOrder', $item->id) }}">BOOk NOW</a>

                                            </div> --}}
                            </div>
                    </div>
                </div>
                </a>
            @empty
                <p class="text-center">No Products Yet</p>
                @endforelse
                <!--end item-->
            </div>
            <hr style="color: black !important;">
            @endforeach




        </div>
        </div>
        </div>

        </div>
    </section>
    <div class="clearfix"></div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.category-toggle').on('click', function() {
                var categoryName = $(this).data('category');
                var subcategoryContainer = $('.subcategory-container').filter('[data-category="' +
                    categoryName + '"]');

                // Toggle visibility
                subcategoryContainer.toggle();
            });
        });
    </script>
@endsection
