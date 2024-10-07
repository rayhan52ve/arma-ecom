<section>
    <div class="container">
        <div class="divider-line solid light opacity-1"></div>
        <div class="row section-less-padding-2 text-center" style="display: flex;">
            <div class="col-md-6" style="margin-top: 5%">
                <h4 class="text-info">Can’t find your desired service? Let us know 24/7.</h4>
                <h4 class="text-success"><span><strong>Customer Care:</strong> <?php echo e(@$webInfo->telephone); ?></span></h4>
            </div>
            <div class="col-md-6">
                <a href="#"><img src="<?php echo e(asset('assets/customer-care.jpg')); ?>" width="200px" alt=""></a>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="section-dark sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 colmargin clearfix margin-bottom">
                <div class="fo-map">
                    <div class="footer-logo"><img src="images/logo/f-logo.png" alt="" /></div>
                    <?php if($webInfo): ?>
                        <?php
                            $descriptionWords = str_word_count($webInfo->description, 1);
                            $shortDescription = implode(' ', array_slice($descriptionWords, 0, 20));
                        ?>

                        <p><?php echo e($shortDescription); ?> ... <a href="<?php echo e(route('front.contact')); ?>">See More</a></p>
                    <?php else: ?>
                        <p>Contact info</p>
                    <?php endif; ?>
                    <address>
                        <strong>Address:</strong> <br>
                        <?php echo e(@$webInfo->address); ?><br>
                    </address>
                    <span><strong>Phone:</strong> <?php echo e(@$webInfo->phone); ?></span><br>
                    <span><strong>Email:</strong> <?php echo e(@$webInfo->email); ?> </span><br>
                    <span><strong>Customer Care:</strong><?php echo e(@$webInfo->telephone); ?></span>
                </div>
            </div>
            <!--end item-->


            <div class="col-md-4 col-xs-12 clearfix margin-bottom">
                <h4 class="text-white uppercase less-mar3 font-weight-5">Service Types</h4>
                <div class="clearfix"></div>
                <div class="footer-title-bottomstrip gyellow"></div>
                <ul class="footer-tags">
                    <?php $__currentLoopData = $serviceCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('front.services')); ?>#<?php echo e($key - 1); ?>"><?php echo e($item->service_category); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <!--end item-->

            <div class="col-md-4 col-xs-12 clearfix margin-bottom">
                <h4 class="text-white uppercase less-mar3 font-weight-5">Subscribe</h4>
                <div class="clearfix"></div>
                <div class="footer-title-bottomstrip"></div>
                <p>Get updates and free resources. </p>
                <input class="c5-newsletter-1" type="search" placeholder="Email Address">
                <input name="search" value="Submit" class="newsletter-submit-btn" type="submit">
                <div class="clearfix"></div>
                <ul class="footer-social-icons icons-plain text-center">
                    <li><a target="_blank" href="<?php echo e(@$webInfo->facebook); ?>"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a target="_blank" href="<?php echo e(@$webInfo->tweeter); ?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?php echo e(@$webInfo->google); ?>"><i class="fa fa-google-plus"></i></a></li>
                    <li class="last"><a href="<?php echo e(@$webInfo->linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <!--end item-->

        </div>
    </div>
</section>
<div class="clearfix"></div>
<!--end section-->

<section class="sec-moreless-padding section-grey">
    <div class="container">
        <div class="row">
            <div class="fo-copyright-holder text-center"> <?php echo e(@$webInfo->copy_right); ?></div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php /**PATH C:\laragon\www\arma-ecom\resources\views/Frontend/layouts/includes/footer.blade.php ENDPATH**/ ?>