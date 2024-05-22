@extends('Frontend.layouts.master')

@section('content')
    <section>
        <div class="pagenation-holder" style="background-color: rgba(70, 131, 180, 0.281)">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>About Us</h4>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="current"><a href="#">About</a></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->



    <section class="sec-tpadding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-5 margin-bottom"> <img src="{{ asset('uploads/about_us/' . @$aboutUs->image) }}"
                        alt="" class="img-responsive" />
                </div>
                <!--end item-->

                <div class="col-md-7 margin-bottom">

                    {!! @$aboutUs->description !!}

                    <div class="clearfix"></div>
                </div>
                <!--end item-->
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->

    <section class="sec-padding section-light">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="sec-title-container">
                        <h2 class="c5-sec-title font-weight-6 less-mar-1 montserrat title">Employees</h2>
                        {{-- <p class="c5-sub-title raleway">Praesent mattis commodo augue Aliquam ornare hendrerit augue.</p> --}}
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--end title-->

                @forelse ($employees as $emp)
                    <div class="col-md-3 col-sm-6 col-xs-12" style="margin-top: 15px">
                        <div class="c5-feature-box-4 margin-bottom">
                            <div class="img-box-main">
                                <div class="img-box">
                                    <div class="sc-icons-box">
                                        <ul class="sc-icons">
                                            {{-- <li><a target="_blank" class="twitter" href="https://twitter.com/codelayers"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="https://www.facebook.com/codelayers"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
                                        </ul>
                                    </div>
                                    @if (@$emp->userDetail->image)
                                        <img src="{{ asset('uploads/user/' . $emp->userDetail->image) }}"
                                            class="img-responsive" width="100%" style="height: 260px" alt="">
                                    @else
                                        <img src="{{ asset('assets/avatar.png') }}" width="100%" style="height: 260px" class="img-responsive" alt="">
                                    @endif
                                    {{-- <img src="{{ asset('frontend/images/7.jpg') }}" alt="" class="img-responsive" /> --}}
                                </div>
                            </div>
                            <div class="text-box text-left">
                                <h5 class="less-mar-1 title">{{ $emp->name }}</h5>
                                {{-- <p class="text-primary">Founder & CEO</p>
                                <p>Suspendisse et justo Lorem ipsum dolor sit amet consectetuer.</p> --}}
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center"></p>
                @endforelse
                <!--end item-->

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
@endsection
