<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Edit Service</h4>
                <form class="form-horizontal p-t-20" action="<?php echo e(route('service.update', $service->id)); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div class="form-group row">
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Service</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="name"
                                        placeholder="Team Name" value="<?php echo e($service->name ?? null); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Service Category </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select type="select" class="form-control" id="uname1" name="service_category_id"
                                        placeholder="Service Category" required>
                                        <option selected disabled>Select Service Category</option>
                                        <?php $__currentLoopData = $service_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($service_category->id); ?>"
                                                <?php echo e($service_category->id == $service->service_category->id ? 'selected' : ''); ?>>
                                                <?php echo e($service_category->service_category); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Service Charge </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="service_charge"
                                        value="<?php echo e($service->service_charge ?? null); ?>" placeholder="Service Charge Amount">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Charge Type </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select type="select" class="form-control" id="uname1" name="charge_type" required>
                                        <option selected disabled>Select Service Charge Type</option>
                                        <option value="Minute" <?php echo e($service->charge_type == 'Minute' ? 'selected' : ''); ?>>
                                            Minutely</option>
                                        <option value="Hour" <?php echo e($service->charge_type == 'Hour' ? 'selected' : ''); ?>>
                                            Hourly</option>
                                        <option value="Day" <?php echo e($service->charge_type == 'Day' ? 'selected' : ''); ?>>Daily
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Service Photo</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image"
                                        onchange="previewImage(this)">
                                </div>
                                <img id="image-preview" src="<?php echo e(asset('uploads/service/' . $service->image)); ?>"
                                    class="mt-2" style="max-width: 300px;" alt="">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <div class="col-12 col-md-12 col-lg-12">
                                <label for="uname1" class="col-sm-12 control-label mb-2">Service Description </label>
                                <div class="col-sm-12" >
                                    <div class="input-group">
                                        <textarea name="description" id="editor" placeholder="Write Service Description" cols="30"
                                            rows="10"><?php echo $service->description; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mt-3 m-b-0">
                            <div class="col-sm-12 ">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                    <?php if(session()->get('language') == 'bangla'): ?>
                                        আপডেট
                                    <?php else: ?>
                                        Update
                                    <?php endif; ?>
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

    
    <style>
        /* Style for CKEditor container */
        #editor {
            margin-top: 20px;
            /* Add some top margin */
            border: 1px solid #ccc;
            /* Add a border for visual clarity */
            border-radius: 5px;
            /* Add border-radius for rounded corners */
            padding: 10px;
            /* Add some padding for space */
        }

        /* Style for CKEditor contents */
        .ck-editor__editable {
            min-height: 150px;
            /* Set a minimum height for the editable area */
            border: 1px solid #ddd;
            /* Add a border for the editable area */
            border-radius: 5px;
            /* Add border-radius for rounded corners */
            padding: 10px;
            /* Add some padding for space within the editable area */
            font-family: Arial, sans-serif;
            /* Set font-family */
        }
    </style>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    

    <style>
        #image-preview {
            border: 2px solid #ccc;
            /* Border color */
            padding: 5px;
            /* Padding around the image */
            margin-top: 10px;
            /* Margin from the top */
            display: block;
            max-width: 500px;
            min-width: 300px;
            min-height: 200px;
            box-sizing: border-box;
            /* Include border and padding in the total width/height */
        }
    </style>
    <script>
        function previewImage(input) {
            var preview = document.getElementById('image-preview');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('super_admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arma-ecom\resources\views/Admin/modules/service/edit.blade.php ENDPATH**/ ?>