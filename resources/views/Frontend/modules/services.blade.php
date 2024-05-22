@extends('Frontend.layouts.master')

@section('content')
    <section>
        <div class="pagenation-holder" style="background-color: rgba(70, 131, 180, 0.281)">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Services</h4>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="current"><a href="">Services</a></li>
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
                                <h2 class="c5-sec-title font-weight-6 less-mar-1 montserrat title">Our Services</h2>
                                <p class="c5-sub-title raleway">Get Many More Features & Services.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!--end title-->
                        @foreach ($serviceCategories as $key => $serviceCategory)
                            <div style="margin-top: 100px;" id="{{$key}}" >
                                <h2 style="color: grey;cursor:pointer;" class="category-toggle"
                                    data-category="{{ $serviceCategory->service_category }}">
                                    {{ $serviceCategory->service_category }} <box-icon name='left-arrow-alt'
                                        animation='fade-right'></box-icon></h2>
                            </div>
                            <hr style="color: black !important;">
                            <div class="row subcategory-container" data-category="{{ $serviceCategory->service_category }}">
                                @forelse ($serviceCategory->services as $item)
                                    <a href="{{ route('customer.bookOrder', $item->id) }}">
                                        <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                            <div class="c5-feature-box-7 margin-bottom">
                                                <div class="img-box">
                                                    <div class="overlay"></div>
                                                    <img src="{{ asset('uploads/service/' . $item->image) }}" width="100%"
                                                        style="height: 200px" alt="" class="img-responsive" />
                                                </div>
                                                <div class="text-box padding-2 text-center">
                                                    <h4 class="montserrat less-mar-1">{{ $item->name ?? null }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @empty
                                    <p class="text-center">No Service Yet</p>
                                @endforelse
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
