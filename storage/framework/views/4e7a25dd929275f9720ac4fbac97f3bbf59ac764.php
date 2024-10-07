<?php $__env->startSection('content'); ?>
    <!-- START REVOLUTION SLIDER 5.0 -->
    <div class="rev_slider_wrapper">
        <!-- START REVOLUTION SLIDER 5.0 auto mode -->
        <div id="rev_slider" class="rev_slider" data-version="5.0">
            <ul>
                <?php
                    $sl = 1;
                ?>
                <?php $__empty_1 = true; $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php
                        $sl++;
                    ?>
                    <?php if($sl % 2 !== 0): ?>
                        <!-- SLIDE  -->
                        <li data-index="rs-1" data-transition="fade">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo e(asset('uploads/banner/' . $banner->photo)); ?>" alt="" width="1920"
                                height="1280">


                            <!-- LAYER NR. 1 -->
                            

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption montserrat font-weight-6 white tp-resizeme" id="slide-1-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['210','150','150','150']"
                                data-fontsize="['70','60','50','30']" data-lineheight="['100','100','100','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 7; white-space: nowrap;"><?php echo e($banner->title); ?>

                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption raleway white uppercase white tp-resizeme" id="slide-1-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['300','240','240','200']"
                                data-fontsize="['16','16','14','14']" data-lineheight="['70','70','70','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="2000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 7; white-space: nowrap;"><?php echo e($banner->sub_title); ?>

                            </div>


                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sbut2" id="slide-1-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['-100','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['430','350','350','300']" data-speed="800"
                                data-start="2500" data-transform_in="y:bottom;s:1500;e:Power3.easeOut;"
                                data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;"
                                data-endspeed="300" data-captionhidden="off" style="z-index: 6"> <a href="#">Get
                                    Started
                                    now!</a> </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption sbut3" id="slide-1-layer-5"
                                data-x="['center','center','center','center']" data-hoffset="['110','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['430','420','420','350']" data-speed="800"
                                data-start="3000" data-transform_in="y:bottom;s:1500;e:Power3.easeOut;"
                                data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;"
                                data-endspeed="300" data-captionhidden="off" style="z-index: 6"> <a href="#">Get
                                    Started
                                    now!</a> </div>

                        </li>
                    <?php endif; ?>
                    <?php if($sl % 2 === 0): ?>
                        <li data-index="rs-2" data-transition="slideleft">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo e(asset('uploads/banner/' . $banner->photo)); ?>" alt="" width="1920"
                                height="1280">


                            <!-- LAYER NR. 1 -->
                            

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption montserrat font-weight-6 white tp-resizeme" id="slide-2-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['210','150','150','150']"
                                data-fontsize="['70','60','50','30']" data-lineheight="['100','100','100','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 7; white-space: nowrap;"><?php echo e($banner->title); ?>

                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption raleway white uppercase white tp-resizeme" id="slide-2-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['300','240','240','200']"
                                data-fontsize="['16','16','14','14']" data-lineheight="['70','70','70','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="2000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                style="z-index: 7; white-space: nowrap;"><?php echo e($banner->sub_title); ?>

                            </div>


                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sbut2" id="slide-2-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['-100','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['430','350','350','300']"
                                data-speed="800" data-start="2500" data-transform_in="y:bottom;s:1500;e:Power3.easeOut;"
                                data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;"
                                data-endspeed="300" data-captionhidden="off" style="z-index: 6"> <a href="#">Get
                                    Started now!</a> </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption sbut3" id="slide-2-layer-5"
                                data-x="['center','center','center','center']" data-hoffset="['110','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['430','420','420','350']"
                                data-speed="800" data-start="3000" data-transform_in="y:bottom;s:1500;e:Power3.easeOut;"
                                data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;"
                                data-endspeed="300" data-captionhidden="off" style="z-index: 6"> <a href="#">Get
                                    Started now!</a> </div>

                        </li>
                    <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <!-- SLIDE  -->
                    <li data-index="rs-1" data-transition="fade">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo e(asset('frontend/images/sliders/1.jpg')); ?>" alt="" width="1920"
                            height="1280">


                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption  montserrat font-weight-6 white tp-resizeme" id="slide-1-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['150','100','100','110']"
                            data-fontsize="['70','60','50','30']" data-lineheight="['100','100','100','50']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap;">We Create
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption montserrat font-weight-6 white tp-resizeme" id="slide-1-layer-2"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['210','150','150','150']"
                            data-fontsize="['70','60','50','30']" data-lineheight="['100','100','100','50']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1500"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap;">Awesome Layouts
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption raleway white uppercase white tp-resizeme" id="slide-1-layer-3"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['300','240','240','200']"
                            data-fontsize="['16','16','14','14']" data-lineheight="['70','70','70','50']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="2000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap;">onsectetuer adipiscing elit sit amet justo
                        </div>


                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption sbut2" id="slide-1-layer-4" data-x="['center','center','center','center']"
                            data-hoffset="['-100','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['430','350','350','300']" data-speed="800" data-start="2500"
                            data-transform_in="y:bottom;s:1500;e:Power3.easeOut;"
                            data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;"
                            data-endspeed="300" data-captionhidden="off" style="z-index: 6"> <a href="#">Get
                                Started now!</a> </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption sbut3" id="slide-1-layer-5" data-x="['center','center','center','center']"
                            data-hoffset="['110','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['430','420','420','350']" data-speed="800" data-start="3000"
                            data-transform_in="y:bottom;s:1500;e:Power3.easeOut;"
                            data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;"
                            data-endspeed="300" data-captionhidden="off" style="z-index: 6"> <a href="#">Get
                                Started now!</a> </div>

                    </li>


                    <!-- SLIDE  -->
                    <li data-index="rs-2" data-transition="slideleft">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo e(asset('frontend/images/sliders/2.jpg')); ?>" alt="" width="1920"
                            height="1280">


                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption  montserrat font-weight-6 white tp-resizeme" id="slide-2-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['150','100','100','110']"
                            data-fontsize="['70','60','50','30']" data-lineheight="['100','100','100','50']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap;">Get Unlimited
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption montserrat font-weight-6 white tp-resizeme" id="slide-2-layer-2"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['210','150','150','150']"
                            data-fontsize="['70','60','50','30']" data-lineheight="['100','100','100','50']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1500"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap;">Features & Designs
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption raleway white uppercase white tp-resizeme" id="slide-2-layer-3"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['300','240','240','200']"
                            data-fontsize="['16','16','14','14']" data-lineheight="['70','70','70','50']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="2000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap;">onsectetuer adipiscing elit sit amet justo
                        </div>


                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption sbut2" id="slide-2-layer-4" data-x="['center','center','center','center']"
                            data-hoffset="['-100','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['430','350','350','300']" data-speed="800" data-start="2500"
                            data-transform_in="y:bottom;s:1500;e:Power3.easeOut;"
                            data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;"
                            data-endspeed="300" data-captionhidden="off" style="z-index: 6"> <a href="#">Get
                                Started now!</a> </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption sbut3" id="slide-2-layer-5" data-x="['center','center','center','center']"
                            data-hoffset="['110','0','0','0']" data-y="['top','top','top','top']"
                            data-voffset="['430','420','420','350']" data-speed="800" data-start="3000"
                            data-transform_in="y:bottom;s:1500;e:Power3.easeOut;"
                            data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;"
                            data-endspeed="300" data-captionhidden="off" style="z-index: 6"> <a href="#">Get
                                Started now!</a> </div>

                    </li>
                <?php endif; ?>




            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
    <marquee style="background-color: rgba(70, 131, 180, 0.144);padding-top:15px" behavior="" direction="left">
        <h3><?php echo e($webInfo->marquee); ?></h3>
    </marquee>
    <div class="clearfix"></div>
    <!-- END OF SLIDER WRAPPER -->



    <section class="sec-padding mobile-hide">
        <div class="container sec-tpadding-3 sec-bpadding-3">
            <div class="row justify-content-center">
                <div class="col-xs-12 text-center">
                    <div class="sec-title-container">
                        <h2 class="c5-sec-title font-weight-6 less-mar-1 montserrat title">
                            Service Categories</h2>
                        <p class="c5-sub-title raleway">Select the type of service you need.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--end title-->

                <div id="owl-demo5" class="owl-carousel owl-theme">
                    <?php $__currentLoopData = $serviceCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item" style="display: flex;">
                            <div class="col-md-8 col-centered text-center">
                                <a href="<?php echo e(route('front.services')); ?>#<?php echo e($key - 1); ?>">
                                    <div class="c5-feature-box-6">
                                        <div class="clearfix"></div>
                                        <br />
                                        <div class="imgbox-large center overflow-hidden"><img
                                                src="<?php echo e(asset('uploads/service_category/' . $item->image)); ?>"
                                                width="120px" style="height:120px" alt=""
                                                class="img-responsive" /></div>
                                        <h6><?php echo e($item->service_category); ?></h6>

                                    </div>
                                </a>
                            </div>
                            <!--end item-->
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    <!--end carousel item  -->
                </div>
                <!--end carousel  -->

            </div>

        </div>

        <style>
            .owl-carousel .item {
                display: flex;
            }

            .flex-container {
                flex-wrap: wrap;
            }

            .flex-custom {
                flex: 0 0 16.666%;
                /* Each item occupies 1/6 of the carousel width */
                max-width: 16.666%;
            }
        </style>
    </section>
    <div class="clearfix"></div>


    <section class="sec-padding mobile-hide">
        <div class="container">
            <div class="row slide-controls-2">
                <div class="col-xs-12 text-center">
                    <div class="sec-title-container">
                        <h2 class="c5-sec-title font-weight-6 less-mar-1 montserrat title">Services</h2>
                        <p class="c5-sub-title raleway">Order your preferred services from here.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--end title-->
                <div class="text-center">
                    <a href="<?php echo e(route('front.services')); ?>" class="btn text-success">View All</a>
                </div>
                <div id="owl-demo9" class="owl-carousel owl-theme flex-container" style="max-width: 100%">
                    <?php
                        $serviceCount = count($services);
                    ?>
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($loop->first || $loop->iteration % 4 == 1): ?>
                            <div class="item <?php echo e($loop->first ? 'active' : ''); ?>" style="display: flex;">
                        <?php endif; ?>
                        <div class="col-sm-12 col-md-3 flex-service text-center">
                            <a href="<?php echo e(route('customer.bookOrder', $item->id)); ?>">
                                <div class="c5-feature-box-6">
                                    <div class="clearfix"></div>
                                    <br />
                                    <div class="imgbox-xlarge center overflow-hidden">
                                        <img src="<?php echo e(asset('uploads/service/' . $item->image)); ?>" width="200px"
                                            style="height:135px" alt="" class="img-responsive" />
                                    </div>
                                    <h6><?php echo e($item->name); ?></h6>
                                </div>
                            </a>
                        </div>
                        <?php if($loop->last || $loop->iteration % 4 == 0): ?>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!--end carousel  -->

        </div>
        </div>

        <style>
            .owl-carousel .item {
                display: flex;
            }

            .flex-container {
                flex-wrap: wrap;
            }

            .flex-service {
                flex: 0 0 25%;
                max-width: 25%;
            }

            /* Hide the heading on screens smaller than 768px (mobile) */
            @media  screen and (max-width: 768px) {
                .mobile-hide {
                    display: none;
                }
            }

            @media  screen and (min-width: 768px) {
                .mobile-show {
                    display: none;
                }
            }
        </style>
    </section>

    <section class="parallax-1 mobile-show">
        <div class="container-fluid nopadding">
            <div class="parallax-overlay">
                <div class="container sec-tpadding-3 sec-bpadding-3">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 text-center">
                            <div class="sec-title-container">
                                <h2 class="c5-sec-title font-weight-6 less-mar-1 montserrat title">Services</h2>
                                <p class="c5-sub-title raleway">Order your prefered services from here.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!--end title-->

                        <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <a href="<?php echo e(route('customer.bookOrder', $item->id)); ?>">
                                <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                    <div class="c5-feature-box-7 margin-bottom">
                                        <div class="img-box">
                                            <div class="overlay">

                                            </div>
                                            <img src="<?php echo e(asset('uploads/service/' . $item->image)); ?>" width="100%"
                                                style="height: 200px;" alt="" class="img-responsive" />
                                        </div>
                                        <div class="text-box padding-2 text-center">
                                            <h4 class="montserrat less-mar-1"><?php echo e($item->name ?? null); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <p class="text-center">No Service Yet</p>
                        <?php endif; ?>
                        <!--end item-->


                    </div>
                </div>
                <div class="text-center">
                    <a class="btn btn-lg btn-success" href="<?php echo e(route('front.services')); ?>">See All Services....</a>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>



    <section class="parallax-1 sec-padding">
        <div class="container-fluid nopadding">
            <div class="parallax-overlay">
                <div class="container sec-tpadding-3 sec-bpadding-3">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="sec-title-container">
                                <h2 class="c5-sec-title font-weight-6 less-mar-1 montserrat title">Products</h2>
                                <p class="c5-sub-title raleway">Order our products from here.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!--end title-->

                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <a href="<?php echo e(route('customer.bookOrder', $item->id)); ?>">
                                <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                    <div class="c5-feature-box-7 margin-bottom">
                                        <div class="img-box">
                                            <div class="overlay">
                                                
                                                <div class="post-icon" title="Add To Cart"
                                                    style="background-color: rgba(7, 7, 7, 0.315);">
                                                    <i aria-hidden="true" class="fa fa-shopping-cart"></i>
                                                </div>
                                                
                                            </div>
                                            <img src="<?php echo e(asset('uploads/product/' . $item->image)); ?>" width="100%"
                                                style="height: 250px" alt="" class="img-responsive" />
                                        </div>
                                        <div class="text-box padding-2">
                                            <h4 class="montserrat less-mar-1"><?php echo e($item->name ?? null); ?></h4> <br>
                                            <h4 style="color: rgb(209, 147, 33)">
                                                <?php if(@$item->offer): ?>
                                                    <?php if($item->offer->offer_type == '৳'): ?>
                                                        ৳ <?php echo e($item->price - @$item->offer->offer); ?>

                                                    <?php elseif(@$item->offer->offer_type == '%'): ?>
                                                        ৳
                                                        <?php echo e($item->price - $item->price * (@$item->offer->offer / 100)); ?>

                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    ৳ <?php echo e($item->discount_price ?? $item->price); ?>

                                                <?php endif; ?>
                                            </h4>
                                            <?php if($item->discount_price || $item->offer): ?>
                                                <h6> <span style="text-decoration: line-through;">৳
                                                        <?php echo e($item->price); ?></span>
                                                    <?php if(@$item->offer->offer): ?>
                                                        -<?php echo e($item->offer->offer); ?><?php echo e($item->offer->offer_type); ?>

                                                    <?php endif; ?>
                                                </h6>
                                            <?php endif; ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <p class="text-center">No Products Yet</p>
                        <?php endif; ?>
                        <!--end item-->


                    </div>
                </div>
                <div class="text-center">
                    <a class="btn btn-lg btn-success" href="<?php echo e(route('front.products')); ?>">View All Products</a>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

    <?php $__env->startPush('css'); ?>
        <style>
            .counter {
                color: #fff;
                background: linear-gradient(#F3652F, #ED4D36);
                font-family: 'Poppins', sans-serif;
                text-align: center;
                width: 210px;
                padding: 0 0 30px;
                margin: 0 auto;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                position: relative;
                z-index: 1;
            }

            .counter .counter-value {
                color: #F3652F;
                background: rgba(255, 255, 255, 0.9);
                font-size: 30px;
                font-weight: 600;
                padding: 10px 10px 7px;
                margin: 0 0 30px;
                border-radius: 10px 10px 0 0;
                display: block;
            }

            .counter h3 {
                font-size: 18px;
                font-weight: 500;
                letter-spacing: 1px;
                text-transform: uppercase;
                margin: 0;
            }

            .counter.purple {
                background: linear-gradient(#87358A, #443273);
            }

            .counter.purple .counter-value {
                color: #87358A;
            }

            .counter.pink {
                background: linear-gradient(#E45490, #D2276A);
            }

            .counter.pink .counter-value {
                color: #E45490;
            }

            .counter.blue {
                background: linear-gradient(#408FCA, #404E9F);
            }

            .counter.blue .counter-value {
                color: #408FCA;
            }

            @media  screen and (max-width:990px) {
                .counter {
                    margin-bottom: 40px;
                }
            }
        </style>
    <?php $__env->stopPush(); ?>

    $<?php $__env->startPush('script'); ?>
        <script>
            $(document).ready(function() {
                $('.counter-value').each(function() {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 3500,
                        easing: 'swing',
                        step: function(now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
            });
        </script>
    <?php $__env->stopPush(); ?>


    <section class="sec-padding section-secondary">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 text-right"> <img src="<?php echo e(asset('frontend/images/4.png')); ?>" alt=""
                        class="img-responsive" />
                </div>
                <!--end item-->

                <div class="col-md-4 text-left">
                    <h4 class="c5-big-title montserrat text-white">Beautiful<br />
                        Multipage<br />
                        Layouts.</h4>
                    <br />
                    <h4 class="text-white raleway">Lorem ipsum dolor sit amet consectetuer adipiscing elit
                        Suspendisse et justo Praesent mattis sit amet justo elite hendrerit.</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse
                        et justo. Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In
                        pulvinar lectus a est Curabitur eget orci laoreet.</p>
                    <br />
                    <ul class="iconlist primary">
                        <li class="text-white"><i class="fa fa-check"></i> Nullam turpis Cras dapibus orci
                            rutrum </li>
                        <li class="text-white"><i class="fa fa-check"></i> Etiam enim Suspendisse imperdiet
                            cursus nisi Maecenas </li>
                        <li class="text-white"><i class="fa fa-check"></i> Nullam turpis Cras dapibus orci
                            rutrum </li>
                        <li class="text-white"><i class="fa fa-check"></i> Etiam enim Suspendisse imperdiet
                            cursus nisi Maecenas </li>
                    </ul>
                    <br />
                    <br />
                    <a class="btn btn-prim border-1x" href="#">Read more</a>
                </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <div class=" sec-padding" style="background: rgba(44, 88, 155, 0.082)">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <span class="counter-value">10</span>
                        <h3>Web Designing</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter purple">
                        <span class="counter-value">10</span>
                        <h3>Web Development</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter">
                        <span class="counter-value">10</span>
                        <h3>Web Designing</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter purple">
                        <span class="counter-value">10</span>
                        <h3>Web Development</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <!-- end section -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arma-ecom\resources\views/Frontend/modules/index.blade.php ENDPATH**/ ?>