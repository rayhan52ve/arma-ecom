@extends('Frontend.layouts.master')

@section('content')
    <section class="section-side-image clearfix">
        <div class="img-holder col-md-12 col-sm-12 col-xs-12">
            <div class="background-imgholder" style="background:url({{ asset('frontend/images/header-inner.jpg') }});"><img
                    class="nodisplay-image" src="{{ asset('frontend/images/header-inner.jpg') }}" alt="" /> </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                    <div class="header-inner less-height">
                        <div class="overlay no-overlay">
                            <div class="text text-center">
                                <h3 class="text-white less-mar-1 title montserrat">Career</h3>
                                <h6 class="uppercase text-white sub-title">Make your career choice with us.</h6>
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
                        <h4>Career</h4>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="current"><a href="#">Career</a></li>
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
            <div class="col-xs-12 text-center">
                <div class="sec-title-container">
                    <h2 class="c5-sec-title font-weight-6 less-mar-1 montserrat">Career Oppourtinity</h2>
                    <p class="c5-sub-title raleway">Let Us Know About Yourself</p>
                </div>
            </div>
            <div class="clearfix"></div>
            <!--end title-->
        </div>
        <div class="container" style="margin-bottom: 50px">
            <div class="row">
                <div class="colk-md-8">
                    <form action="{{ route('front.career.store') }}" method="post" id="sky-form" class="sky-form" enctype="multipart/form-data">
                        @csrf
                        {{-- <h2><strong>Send Us a Message</strong></h2>
                        <div class="clearfix"></div>
                        <div class="margin_top4"></div>
                        <br />
                        <br />
                        <br /> --}}
                        <fieldset>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Name</label>
                                    <label class="input"> <i class="icon-append icon-user"></i>
                                        <input type="text" name="name" id="name" required>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">E-mail</label>
                                    <label class="input"> <i class="icon-append icon-envelope-alt"></i>
                                        <input type="email" name="email" id="email" required>
                                    </label>
                                </section>
                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Phone</label>
                                    <label class="input"> <i class="icon-append icon-tag"></i>
                                        <input type="number" name="phone" id="subject" required>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Skill Set</label>
                                    <label class="input"> <i class="icon-append icon-tag"></i>
                                        <input type="text" name="skill" id="subject" required>
                                    </label>
                                </section>
                            </div>
                            <section>
                                <label class="label">Upload CV</label>
                                <label class="input"> <i class="icon-append icon-tag"></i>
                                    <input type="file" accept=".pdf" name="cv" id="subject" required>
                                </label>
                            </section>
                            <section>
                                <label class="label">Message</label>
                                <label class="textarea"> <i class="icon-append icon-comment"></i>
                                    <textarea rows="4" name="message" id="message"></textarea>
                                </label>
                            </section>
                            {{-- <section>
                                <label class="checkbox">
                                    <input type="checkbox" value="1" name="copy" id="copy">
                                    <i></i>Send a copy to my e-mail address</label>
                            </section> --}}
                        </fieldset>
                        <footer>
                            <button type="submit" class="button">Submit</button>
                        </footer>
                        <div class="message"><i class="fa fa-check"></i>
                            <p>Your message was successfully sent!</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
@endsection
