@extends('Frontend.layouts.master')

@section('content')

    <section>
        <div class="pagenation-holder" style="background-color: rgba(70, 131, 180, 0.281)">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Contact</h4>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li class="current"><a href="">Contact</a></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->


    <section class="sec-padding">
        <div class="container">
            <div class="row">

                <div class="col-md-8">

                    <h3 class="uppercase">Contact Form</h3>
                    <p>{{ @$webInfo->description }}
                    </p>
                    <br />
                    <br />

                    <div class="text-box white padding-4 margin-bottom">
                        <form action="{{ route('front.email.store') }}" method="post" id="sky-form" class="sky-form">
                            @csrf
                            <h2><strong>Send Us a Message</strong></h2>
                            <div class="clearfix"></div>
                            <div class="margin_top4"></div>
                            <br />
                            <br />
                            <br />
                            <fieldset>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="label">Name</label>
                                        <label class="input"> <i class="icon-append icon-user"></i>
                                            <input type="text" name="name" id="name">
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="label">E-mail</label>
                                        <label class="input"> <i class="icon-append icon-envelope-alt"></i>
                                            <input type="email" name="email" id="email">
                                        </label>
                                    </section>
                                </div>
                                <section>
                                    <label class="label">Subject</label>
                                    <label class="input"> <i class="icon-append icon-tag"></i>
                                        <input type="text" name="subject" id="subject">
                                    </label>
                                </section>
                                <section>
                                    <label class="label">Message</label>
                                    <label class="textarea"> <i class="icon-append icon-comment"></i>
                                        <textarea rows="4" name="message" id="message"></textarea>
                                    </label>
                                </section>
                                <section>
                                    <label class="checkbox">
                                        <input type="checkbox" value="1" name="copy" id="copy">
                                        <i></i>Send a copy to my e-mail address</label>
                                </section>
                            </fieldset>
                            <footer>
                                <button type="submit" class="button">Send message</button>
                            </footer>
                            <div class="message"><i class="fa fa-check"></i>
                                <p>Your message was successfully sent!</p>
                            </div>
                        </form>
                    </div><!-- end .smart-wrap section -->
                    <!-- end .smart-forms section -->
                </div>
                <!--end item-->

                <div class="col-md-4 text-left">
                    <h4>Website Info</h4>
                    <h6>{{ $logo->site_name ?? null }}</h6>
                    <p>{{ @$webInfo->address }}</p>
                    <p> Telephone: {{ @$webInfo->telephone }}</p>
                    <p>E-mail: {{ @$webInfo->email }}</p>
                    <p>Phone: {{ @$webInfo->phone }}</p>

                    <br />

                    <div class="col-md-12 nopadding">
                        <div id="map_extended" class="map">
                            <p>This will be replaced with the Google Map.</p>
                        </div>
                    </div>
                    <!--end map-->
                </div>
                <!--end item-->



            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
@endsection
