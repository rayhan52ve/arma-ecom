@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Edit Service Sub Category</h4>
                <form class="form-horizontal p-t-20"
                    action="{{ route('service-sub-category.update', $serviceSubCategory->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group row">
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Service Sub Category</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="name"
                                        placeholder="Team Name" value="{{ $serviceSubCategory->name ?? null }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Service Sub Category </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select type="select" class="form-control" id="uname1" name="service_category_id"
                                        placeholder="Service Sub Category" required>
                                        <option selected disabled>Select Service Sub Category</option>
                                        @foreach ($service_categories as $service_category)
                                            <option value="{{ $service_category->id }}"
                                                {{ $service_category->id == $serviceSubCategory->service_category->id ? 'selected' : '' }}>
                                                {{ $service_category->service_category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Service Sub Category Photo</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image"
                                        onchange="previewImage(this)">
                                </div>
                                <img id="image-preview"
                                    src="{{ asset('uploads/service_sub_category/' . $serviceSubCategory->image) }}"
                                    class="mt-2" style="max-width: 300px;" alt="">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <div class="col-12 col-md-12 col-lg-12">
                                <label for="uname1" class="col-sm-12 control-label mb-2">Service Sub Category Description
                                </label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <textarea name="description" id="editor" placeholder="Write Service Sub Category Description" cols="30"
                                            rows="10">{!! $serviceSubCategory->description !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mt-3 m-b-0">
                            <div class="col-sm-12 ">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                    @if (session()->get('language') == 'bangla')
                                        আপডেট
                                    @else
                                        Update
                                    @endif
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ck editor --}}
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
    {{-- ck editor --}}

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
@endsection
