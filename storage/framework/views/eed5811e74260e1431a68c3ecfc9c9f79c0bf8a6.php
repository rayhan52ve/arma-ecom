<?php $__env->startSection('content'); ?>
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
                <div class="col-md-5 margin-bottom"> <img src="<?php echo e(asset('uploads/about_us/' . @$aboutUs->image)); ?>"
                        alt="" class="img-responsive" />
                </div>
                <!--end item-->

                <div class="col-md-7 margin-bottom">

                    <?php echo @$aboutUs->description; ?>


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
                        
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--end title-->

                <?php $__empty_1 = true; $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-md-3 col-sm-6 col-xs-12" style="margin-top: 15px">
                        <div class="c5-feature-box-4 margin-bottom">
                            <div class="img-box-main">
                                <div class="img-box">
                                    <div class="sc-icons-box">
                                        <ul class="sc-icons">
                                            
                                        </ul>
                                    </div>
                                    <?php if(@$emp->userDetail->image): ?>
                                        <img src="<?php echo e(asset('uploads/user/' . $emp->userDetail->image)); ?>"
                                            class="img-responsive" width="100%" style="height: 260px" alt="">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('assets/avatar.png')); ?>" width="100%" style="height: 260px" class="img-responsive" alt="">
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                            <div class="text-box text-left">
                                <h5 class="less-mar-1 title"><?php echo e($emp->name); ?></h5>
                                
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-center"></p>
                <?php endif; ?>
                <!--end item-->

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arma-ecom\resources\views/Frontend/modules/about.blade.php ENDPATH**/ ?>