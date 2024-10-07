<?php $__env->startSection('content'); ?>
    <?php if(isset($service)): ?>
        <section class="section-side-image clearfix">
            <div class="img-holder col-md-12 col-sm-12 col-xs-12">
                <div class="background-imgholder" style="background:url(<?php echo e(asset('uploads/service/' . $service->image)); ?>);">
                    <img class="nodisplay-image" src="<?php echo e(asset('uploads/service/' . $service->image)); ?>" alt="" />
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                        <div class="header-inner less-height">
                            <div class="overlay no-overlay">
                                <div class="text text-center">
                                    <h3 class="text-white less-mar-1 title montserrat"><?php echo e($service->name ?? null); ?></h3>
                                    <h6 class="uppercase text-white sub-title">Get Many More Services</h6>
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
                            <h4>Our Services</h4>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li><a href="<?php echo e(route('front.services')); ?>">Services</a></li>
                                <li class="current"><a href=""><?php echo e($service->name ?? null); ?></a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!--end section-->
    <?php else: ?>
        <section>
            <div class="pagenation-holder" style="background-color: rgba(70, 131, 180, 0.281)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Our Product</h4>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li><a href="<?php echo e(route('front.products')); ?>">Products</a></li>
                                <li class="current"><a href=""><?php echo e($product->name ?? null); ?></a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!--end section-->
    <?php endif; ?>

    <section>
        <div class="container">
            <div class="divider-line solid light"></div>
            <div class="row sec-padding">

                <?php if(isset($service)): ?>
                    <div class="col-md-6 margin-bottom"><img src="<?php echo e(asset('uploads/service/' . $service->image)); ?>"
                            style="height: 300px" alt="" class="img-responsive" />
                        <div class="text-box padding-top-4 white">
                            <h4 class="montserrat less-mar-1" style="color:grey;"><?php echo e($service->name ?? null); ?></h4>
                            <br />
                            <div style="display: flex; align-items: baseline;">
                                <h4 style="margin-right: 5px;color:yellowgreen;">&#2547; <?php echo e($service->service_charge); ?>/
                                </h4>
                                <h6 style="color:grey;"><?php echo e($service->charge_type); ?></h6>
                            </div>
                        </div>
                    </div>
                    <!--end item-->
                <?php elseif(isset($product)): ?>
                    <section class="sec-padding">
                        <div class="container">
                            <div class="row slide-controls-2">
                                <div class="col-xs-12 text-center">
                                    <div class="sec-title-container">
                                        <h2 class="c5-sec-title font-weight-6 less-mar-1 montserrat title">
                                            <?php echo e($product->name ?? null); ?> </h2>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!--end title-->

                                <div id="owl-demo7" class="owl-carousel owl-theme">
                                    <?php $__currentLoopData = $product->product_galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="item">
                                            <div class="col-md-8 col-centered text-center">
                                                <div class="c5-feature-box-6">
                                                    <div class="clearfix"></div>
                                                    <br />
                                                    <div class="imgbox-dxlarge center overflow-hidden"><img
                                                            src="<?php echo e(asset('uploads/product/gallery/' . $product_gallery->photos)); ?>"
                                                            alt="" class="img-responsive" /></div>

                                                </div>
                                            </div>
                                            <!--end item-->

                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <!--end carousel item  -->

                                </div>
                                <!--end carousel  -->

                            </div>
                        </div>
                    </section>
                    <div class="clearfix"></div>
                    <!-- end section -->

                    <div class="col-md-6 margin-bottom"><img src="<?php echo e(asset('uploads/product/' . $product->image)); ?>"
                            alt="" width="300px" style="height:300px" class="img-responsive" />
                        <div class="text-box padding-4 white">
                            <h4 class="montserrat less-mar-1" style="color:grey;"><?php echo e($product->name ?? null); ?></h4>
                            <br />
                            <div style="display: flex; align-items: baseline;">
                                <h4 style="margin-right: 5px;color:yellowgreen;">
                                    <?php if($product->offer): ?>
                                        <?php if($product->offer->offer_type == '৳'): ?>
                                            ৳ <?php echo e($product->price - @$product->offer->offer); ?>

                                        <?php elseif($product->offer->offer_type == '%'): ?>
                                            ৳ <?php echo e($product->price - $product->price * (@$product->offer->offer / 100)); ?>

                                        <?php endif; ?>
                                    <?php else: ?>
                                        ৳ <?php echo e($product->discount_price ?? $product->price); ?>

                                    <?php endif; ?>
                                </h4>

                            </div>
                            <?php if($product->discount_price || $product->offer): ?>
                                <h6> <span style="text-decoration: line-through;">৳
                                        <?php echo e($product->price); ?></span>
                                    <?php if(@$product->offer->offer): ?>
                                        -<?php echo e($product->offer->offer); ?><?php echo e($product->offer->offer_type); ?>

                                    <?php endif; ?>
                                </h6>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--end item-->
                <?php endif; ?>

                <div class="col-md-6">
                    <?php echo $service->description ?? null; ?>

                    <?php echo $product->description ?? null; ?>


                    <br /> <br />

                    <div class="col-md-12" style="margin-left: -15px">

                        <div class="card" id="confirmOrder">
                            <div class="card-body">
                                <?php if(isset($service)): ?>
                                    <?php if(auth()->check()): ?>
                                        <h2>Confirm Order</h2>

                                        <form method="POST" action="<?php echo e(route('customer.storeOrder')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-12">
                                                        <label for="inputAddress" class="form-label">Address</label>
                                                        <input type="text" name="address" class="form-control"
                                                            id="inputAddress" value="<?php echo e(auth()->user()->address); ?>" placeholder="Enter your address" required>
                                                    </div>
                                                </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-12">
                                                            <label for="inputAddress" class="form-label">Phone No.</label>
                                                            <input type="number" name="phone" class="form-control"
                                                                id="inputAddress" value="<?php echo e(auth()->user()->phone); ?>" placeholder="Enter your phone number"
                                                                required>
                                                        </div>
                                                    </div>

                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <label for="inputAddress2" class="form-label">Service
                                                            Duration</label>
                                                        <input type="number" name="service_time" class="form-control"
                                                            id="inputAddress2" placeholder="Enter Service Time" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="charge_type" class="form-label">Duration Type</label>
                                                        <select name="charge_type" id="charge_type" class="form-control"
                                                            required>
                                                            <option value="Hour"
                                                                <?php echo e($service->charge_type == 'Hour' ? 'selected' : 'disabled'); ?>>
                                                                Hour
                                                            </option>
                                                            <option value="Minute"
                                                                <?php echo e($service->charge_type == 'Minute' ? 'selected' : 'disabled'); ?>>
                                                                Minute
                                                            </option>
                                                            <option value="Day"
                                                                <?php echo e($service->charge_type == 'Day' ? 'selected' : 'disabled'); ?>>
                                                                Day
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="order_type" value="service">
                                                    <input type="hidden" name="service_id" value="<?php echo e($service->id); ?>">
                                                </div>

                                            </div>
                                            <div class="col-md-12" style="margin-left: -5px">
                                                <button type="submit" class="btn btn-info">Order Now</button>
                                                <a href="<?php echo e(route('front.services')); ?>" type="button"
                                                    class="btn btn-danger">Order More
                                                    Services...</a>
                                            </div>
                                        </form>
                                    <?php else: ?>
                                        <form action="<?php echo e(route('customer.authOrder')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="service_id" value="<?php echo e($service->id); ?>">
                                            <button type="submit" class="btn btn-info">Order Now</button>
                                            <a href="<?php echo e(route('front.services')); ?>" type="button"
                                                class="btn btn-danger">See More
                                                Services...</a>
                                        </form>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php if(auth()->check()): ?>
                                        <h2 style="margin-top: 100px" id="returnTocart">Add To Cart</h2>
                                        <form id="addToCartForm" action="<?php echo e(route('add_to_cart')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <label for="inputAddress" class="form-label">Quantity</label>
                                                        <input type="number" name="quantity" class="form-control"
                                                            id="inputAddress" placeholder="Enter Product Quantity"
                                                            value="1" required min="1">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="order_type" value="product">
                                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                            </div>
                                            <div class="col-md-4" style="margin-left: -5px;">
                                                <button type="button" style="width:100%" id="addToCartBtn"
                                                    class="btn btn-success">Add
                                                    To Cart</button><br>
                                                <a href="<?php echo e(route('front.products')); ?>" style="width:100%"
                                                    type="button" class="btn btn-danger">Continue Shopping</a>
                                            </div>
                                        </form>
                                    <?php else: ?>
                                        <form action="<?php echo e(route('customer.authOrder')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                            <button type="submit" class="btn btn-info">Order Now</button>
                                            <a href="<?php echo e(route('front.products')); ?>" type="button"
                                                class="btn btn-danger">See More</a>
                                        </form>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                    <?php if(@$service && $service->reviews->count() > 0): ?>
                        <div style="margin-top: 350px;">
                            <h2>Customer Review Of <?php echo e($service->name); ?></h2><br><br>

                            <?php $__empty_1 = true; $__currentLoopData = $service->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="row" style="margin: 30px">
                                    <div class="col-md-2">
                                        <?php if(@$review->user->userDetail->image): ?>
                                            <img src="<?php echo e(asset('uploads/user/' . $review->user->userDetail->image)); ?>"
                                                width="80px" height="80px" style="border-radius: 50%;">
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('assets/avatar.png')); ?>" width="80px" height="80px"
                                                style="border-radius: 50%;">
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-md-10">
                                        <div style="margin: 20px">
                                            <h4><?php echo e($review->user->name); ?></h4>
                                            <h6><?php echo e($review->created_at->toDayDateTimeString()); ?></h6>
                                            <p><?php echo e($review->msg); ?></p>
                                            <?php if(auth()->guard()->check()): ?>
                                                <?php if(auth()->user()->id == $review->user->id): ?>
                                                    <div style="display: flex; gap: 10px;">
                                                        
                                                        <form action="<?php echo e(route('customer.review.destroy', $review->id)); ?>"
                                                            method="POST">
                                                            <?php echo method_field('DELETE'); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <button class="text-danger" title="Delete"><box-icon
                                                                    type='solid' name='trash-alt'></box-icon></button>
                                                        </form>

                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p class="text-center">No Review Yet</p>
                            <?php endif; ?>

                        </div>
                    <?php elseif(@$product && $product->reviews->count() > 0): ?>
                        <div style="margin-top: 400px;">
                            <h2>Customer Review Of <?php echo e($product->name); ?></h2><br><br>

                            <?php $__empty_1 = true; $__currentLoopData = $product->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="row" style="margin: 30px">
                                    <div class="col-md-2">
                                        <?php if(@$review->user->userDetail->image): ?>
                                            <img src="<?php echo e(asset('uploads/user/' . $review->user->userDetail->image)); ?>"
                                                width="80px" height="80px" style="border-radius: 50%;">
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('assets/avatar.png')); ?>" width="80px" height="80px"
                                                style="border-radius: 50%;">
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-md-10">
                                        <div style="margin: 20px">
                                            <h4><?php echo e($review->user->name); ?></h4>
                                            <h6><?php echo e($review->created_at->toDayDateTimeString()); ?></h6>
                                            <p><?php echo e($review->msg); ?></p>
                                            <?php if(auth()->guard()->check()): ?>
                                                <?php if(auth()->user()->id == $review->user->id): ?>
                                                    <div style="display: flex; gap: 10px;">
                                                        
                                                        <form action="<?php echo e(route('customer.review.destroy', $review->id)); ?>"
                                                            method="POST">
                                                            <?php echo method_field('DELETE'); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <button class="text-danger" title="Delete"><box-icon
                                                                    type='solid' name='trash-alt'></box-icon></button>
                                                        </form>

                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p class="text-center">No Review Yet</p>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>

                </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->




    <?php $__env->startPush('script'); ?>
        <script>
            $(document).ready(function() {
                $('#addToCartBtn').on('click', function() {
                    var formData = $('#addToCartForm').serialize();

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo e(route('add_to_cart')); ?>',
                        data: formData,
                        success: function(response) {
                            // Use toastr if available
                            if (typeof toastr !== 'undefined') {
                                toastr.success('Product Added To Cart');
                            }

                            $('#addToCartForm')[0].reset();
                            // $('.cart_table').html(response.updatedCartTableHTML);
                            $('#cartItemCount').text(response.updatedCartCount);

                        }
                    });
                });
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arma-ecom\resources\views/Frontend/modules/order/book_order.blade.php ENDPATH**/ ?>