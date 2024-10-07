<!-- Scripts -->
<script src="<?php echo e(asset('frontend/js/jquery/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/bootstrap/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/style-customizer/js/spectrum.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/less/less.min.js')); ?>" data-env="development"></script>
<script src="<?php echo e(asset('frontend/js/style-customizer/js/style-customizer.js')); ?>"></script>
<!-- Scripts END -->

<!-- Template scripts -->
<script src="<?php echo e(asset('frontend/js/megamenu/js/main.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('frontend/js/cubeportfolio/jquery.cubeportfolio.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('frontend/js/cubeportfolio/main-mosaic-flat.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/owl-carousel/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/owl-carousel/custom.js')); ?>"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="<?php echo e(asset('frontend/js/revolution-slider/js/jquery.themepunch.tools.min.js')); ?>">
</script>
<script type="text/javascript"
    src="<?php echo e(asset('frontend/js/revolution-slider/js/jquery.themepunch.revolution.min.js')); ?>"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
(Load Extensions only on Local File Systems !
The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript"
    src="<?php echo e(asset('frontend/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')); ?>"></script>
<script type="text/javascript"
    src="<?php echo e(asset('frontend/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')); ?>"></script>
<script type="text/javascript"
    src="<?php echo e(asset('frontend/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')); ?>"></script>
<script type="text/javascript"
    src="<?php echo e(asset('frontend/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')); ?>">
</script>
<script type="text/javascript"
    src="<?php echo e(asset('frontend/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')); ?>"></script>
<script type="text/javascript"
    src="<?php echo e(asset('frontend/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')); ?>"></script>
<script type="text/javascript"
    src="<?php echo e(asset('frontend/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')); ?>"></script>
<script type="text/javascript"
    src="<?php echo e(asset('frontend/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')); ?>"></script>
<script type="text/javascript"
    src="<?php echo e(asset('frontend/js/revolution-slider/js/extensions/revolution.extension.video.min.js')); ?>"></script>
<script type="text/javascript">
    var tpj = jQuery;
    var revapi4;
    tpj(document).ready(function() {
        if (tpj("#rev_slider").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider");
        } else {
            revapi4 = tpj("#rev_slider").show().revolution({
                sliderType: "standard",
                jsFileLocation: "js/revolution-slider/js/",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    arrows: {
                        style: "erinyen",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 778,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 80,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 80,
                            v_offset: 0
                        }
                    },
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },



                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%"
                },

                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [700, 768, 600, 600],
                lazyType: "smart",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                disableProgressBar: "on",
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>
<script type="text/javascript">
    var tpj = jQuery;

    var revapi280;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_280_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_280_1");
        } else {
            revapi280 = tpj("#rev_slider_280_1").show().revolution({
                sliderType: "hero",
                jsFileLocation: "../../revolution/js/",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {},
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1000, 1024, 778, 480],
                gridheight: [800, 520, 420, 420],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    type: "scroll",
                },
                shadow: 0,
                spinner: "spinner2",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "60",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>
<script>
    $(window).load(function() {
        setTimeout(function() {

            $('.loader-live').fadeOut();
        }, 1000);
    })
</script>
<script src="<?php echo e(asset('frontend/js/parallax/jquery.parallax-1.1.3.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/functions/functions.js')); ?>"></script>


<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<!-- Include Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


<?php echo $__env->yieldPushContent('script'); ?>



<?php /**PATH C:\laragon\www\arma-ecom\resources\views/Frontend/layouts/includes/script.blade.php ENDPATH**/ ?>