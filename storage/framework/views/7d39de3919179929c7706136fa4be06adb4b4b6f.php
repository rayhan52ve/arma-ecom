<?php $__env->startSection('content'); ?>
    <section>
        <div class="pagenation-holder" style="background-color: rgba(70, 131, 180, 0.281)">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Services</h4>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
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
                        <?php $__currentLoopData = $serviceCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $serviceCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div style="margin-top: 100px;" id="<?php echo e($key); ?>" >
                                <h2 style="color: grey;cursor:pointer;" class="category-toggle"
                                    data-category="<?php echo e($serviceCategory->service_category); ?>">
                                    <?php echo e($serviceCategory->service_category); ?> <box-icon name='left-arrow-alt'
                                        animation='fade-right'></box-icon></h2>
                            </div>
                            <hr style="color: black !important;">
                            <div class="row subcategory-container" data-category="<?php echo e($serviceCategory->service_category); ?>">
                                <?php $__empty_1 = true; $__currentLoopData = $serviceCategory->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <a href="<?php echo e(route('customer.bookOrder', $item->id)); ?>">
                                        <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                            <div class="c5-feature-box-7 margin-bottom">
                                                <div class="img-box">
                                                    <div class="overlay"></div>
                                                    <img src="<?php echo e(asset('uploads/service/' . $item->image)); ?>" width="100%"
                                                        style="height: 200px" alt="" class="img-responsive" />
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
                            </div>
                            <hr style="color: black !important;">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arma-ecom\resources\views/Frontend/modules/services.blade.php ENDPATH**/ ?>