<?php $__env->startSection('content'); ?>
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
                                
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!--end title-->
                        <?php $__currentLoopData = $productCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $productCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div style="margin-top: 100px;">
                                <h2 style="color: rgb(19, 148, 8);cursor: pointer;" class="category-toggle"
                                    data-category="<?php echo e($productCategory->name); ?>"><?php echo e($productCategory->name); ?> <box-icon
                                        name='left-arrow-alt' animation='fade-right'></box-icon></h2>
                            </div>
                            <hr style="color: black !important;">
                            <div class="row subcategory-container" data-category="<?php echo e($productCategory->name); ?>"
                                <?php if($key !== 0 && $key !== 1 && $key !== 2): ?> style="display: none;" <?php endif; ?>>
                                <?php $__empty_1 = true; $__currentLoopData = $productCategory->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <a href="<?php echo e(route('customer.bookOrder', $item->id)); ?>">
                                        <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                                            <div class="c5-feature-box-7 margin-bottom">
                                                <div class="img-box">
                                                    <div class="overlay">
                                                        <div class="post-icon" title="Add To Cart"
                                                            style="background-color:rgba(233, 238, 226, 0.377);color: black">
                                                            <i aria-hidden="true" class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                    <img src="<?php echo e(asset('uploads/product/' . $item->image)); ?>" width="100%"
                                                        style="height: 250px" alt="" class="img-responsive" />
                                                </div>
                                                <div class="text-box padding-2">
                                                    <h4 class="montserrat less-mar-1"><?php echo e($item->name ?? null); ?></h4> <br>
                                                    <h4 style="color: rgb(209, 147, 33)">
                                                        <?php if($item->offer): ?>
                                                            <?php if($item->offer->offer_type == '৳'): ?>
                                                                ৳ <?php echo e($item->price - @$item->offer->offer); ?>

                                                            <?php elseif($item->offer->offer_type == '%'): ?>
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

                                                        </h6>
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

<?php echo $__env->make('Frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arma-ecom\resources\views/Frontend/modules/products.blade.php ENDPATH**/ ?>