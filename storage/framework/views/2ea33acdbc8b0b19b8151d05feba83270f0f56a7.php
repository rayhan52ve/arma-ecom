<!DOCTYPE html>
<html>
<?php
    $logo = \App\Models\Logo::latest()->first();
?>

<!-- Mirrored from codelayers.net/templates/arma/corporate5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 08:49:41 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e($logo->site_name); ?></title>
    <meta name="keywords" content="themeforest template" />
    <meta name="description" content="best responsive html template in themeforest">
    <meta name="author" content="codelayers">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Mobile view -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php echo $__env->make('Frontend.layouts.includes.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>
    <?php
        $logo = \App\Models\Logo::latest()->first();
        $webInfo = \App\Models\WebsiteInfo::first();
        @$chats = \App\Models\Chat::with(['user', 'chatDetails'])
            ->where('user_id', Auth::user()->id)
            ->get();
        $serviceCategories = \App\Models\ServiceCategory::all();

    ?>
    <div class="over-loader loader-live">
        <div class="loader">
            <div class="loader-item style1">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!--end loading-->

    <!-- Style Customizer -->
    <section id="style-customizer">
        <div class="style-customizer-wrap form-horizontal">
            <h4 class="sc-header uppercase">Style Customizer</h4>
            <h5 class="uppercase">Layout Style</h5>
            <div class="sc-variable-row form-group">
                <div class="radio-group col-xs-12">
                    <input type="radio" name="sc-layout-type" id="sc-layout-type-boxed" class="sc-variable"
                        data-key="layoutType" value="boxed" checked>
                    <input type="radio" name="sc-layout-type" id="sc-layout-type-wide" class="sc-variable"
                        data-key="layoutType" value="wide">
                    <label for="sc-layout-type-wide" class="style-fweight-normal">Wide</label>
                    <label for="sc-layout-type-boxed" class="style-fweight-normal">Boxed</label>
                </div>
            </div>
            <fieldset id="outer-bg-section">
                <h5 class="customizer-style-tytle-padd">Outer Background Styles</h5>
                <div class="sc-variable-row form-group">
                    <div class="col-xs-12">
                        <select name="sc-bg-outer-type" id="sc-bg-outer-type" data-key="outerBgType"
                            class="sc-variable col-xs-8">
                            <option value="color" selected>Solid color</option>
                            <option value="pattern">Pattern</option>
                            <option value="image">Image</option>
                        </select>
                        <div class="col-xs-4">
                            <div id="sc-bg-outer-color-wrap">
                                <input type="color" name="sc-bg-outer-color" id="sc-bg-outer-color"
                                    class="sc-variable" data-key="outerBgColor">
                            </div>
                            <div id="sc-bg-outer-image-wrap">
                                <input type="file" accept="image/*" name="sc-bg-outer-image" id="sc-bg-outer-image"
                                    class="sc-variable sr-only" data-key="outerBgImage">
                                <label for="sc-bg-outer-image" class="sc-btn" title="Upload image"><i
                                        class="fa fa-upload"></i> </label>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <h5 class="customizer-style-tytle-padd">Color Options</h5>
            <div class="sc-variable-row form-group style-form-group">
                <label for="sc-color-prim" class="col-xs-8 control-label color-text">Primary Color</label>
                <div class="col-xs-4">
                    <input type="color" id="sc-color-prim" class="sc-variable" data-key="colorPrimary">
                </div>
            </div>
            <div class="style-divider-line"></div>
            <div class="sc-variable-row form-group style-form-group style-tpadd">
                <label for="sc-color-second" class="col-xs-8 control-label color-text">Secondary Color</label>
                <div class="col-xs-4">
                    <input type="color" id="sc-color-second" class="sc-variable" data-key="colorSecondary">
                </div>
            </div>
            <br />
            <div class="form-group">
                <div class="col-xs-12">
                    <button class="sc-btn" id="sc-download-css"><i class="fa fa-download"></i> Get CSS file</button>
                </div>
            </div>
            <br />
            <br />
            <div> <a class="sty-demo-btn" href="https://codelayers.net/templates/arma/demo/demo.html"
                    target="_blank">Demos</a> </div>
        </div>
        <button id="sc-toggle" title="Styles Customizer"><i class="fa fa-wrench"></i> </button>
    </section>
    <div class="modal fade" tabindex="-1" role="dialog" id="afterSaveCSSFileModal"
        aria-labelledby="afterSaveCSSFileModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="afterSaveCSSFileModalLabel">File saved</h4>
                </div>
                <div class="modal-body"> In order to apply the generated custom styles to your template, please follow
                    these steps:
                    <ol>
                        <li class="sc-after-save-todo-point-file">Upload the "skin.css" file to "css" directory in your
                            template</li>
                        <li class="sc-after-save-todo-point-image">Upload the image file to "img" directory in your
                            template. Keep the image file name unchanged.</li>
                        <li class="sc-after-save-todo-point-stylesheet-code"> Copy this code and paste it into
                            "index.html" file in your template, after the line marked as <code>&lt;!-- Skin stylesheet
                                --&gt;</code>
                            <pre><code>&lt;link rel="stylesheet" href="css/skin.css"&gt;</code></pre>
                        </li>
                        <li class="sc-after-save-todo-point-preloader"> Copy this code and paste it into "index.html"
                            file in your template, after the line marked as <code>&lt;!-- Preloader icon --&gt;</code>
                            <pre><code class="sc-preloader-html"></code></pre>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Style customizer END -->

    <div class="wrapper-boxed">
        <div class="site-wrapper">
            <?php echo $__env->make('Frontend.layouts.includes.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="clearfix"></div>

            <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->make('Frontend.layouts.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- end section -->

            <a href="#" class="scrollup"></a><!-- end scroll to top of the page-->

        </div>
        <!--end site wrapper-->
    </div>
    <!--end wrapper boxed-->

    <?php echo $__env->make('Frontend.layouts.includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

<!-- Mirrored from codelayers.net/templates/arma/corporate5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 08:50:46 GMT -->

</html>
<?php /**PATH C:\laragon\www\arma-ecom\resources\views/Frontend/layouts/master.blade.php ENDPATH**/ ?>