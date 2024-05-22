@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Edit Product</h4>
                <form class="form-horizontal p-t-20" action="{{ route('admin.product.update', $product->id) }}" method="POST"
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
                            <label for="uname1" class="col-sm-12 control-label mb-2">Product</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="name"
                                        placeholder="Team Name" value="{{ $product->name ?? null }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Product Category </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select type="select" class="form-control" id="uname1" name="product_category_id"
                                        placeholder="Product Category" required>
                                        <option selected disabled>Select Product Category</option>
                                        @foreach ($product_categories as $product_category)
                                            <option value="{{ $product_category->id }}"
                                                {{ $product_category->id == $product->product_category->id ? 'selected' : '' }}>
                                                {{ $product_category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Product Price </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="price"
                                        value="{{ $product->price ?? null }}" placeholder="Product Price Amount">
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Product Sub Category </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select type="select" class="form-control" id="uname1"
                                        name="product_sub_category_id" placeholder="Product Sub Category" required>
                                        <option selected disabled>Select Product Category</option>
                                        @foreach ($product_sub_categories as $product_sub_category)
                                            <option value="{{ $product_sub_category->id }}"
                                                {{ $product_sub_category->id == $product->product_sub_category->id ? 'selected' : '' }}>
                                                {{ $product_sub_category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Discount Price </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="number" class="form-control" id="uname1" name="discount_price"
                                        value="{{ $product->discount_price }}" placeholder="Product Discount Price">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 col-md-4 col-lg-4">
                                <label for="uname1" class="col-sm-12 control-label mb-2">Product Photo</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="image" name="image"
                                            onchange="previewImage(this, 'image-preview1')">
                                    </div>
                                    <img id="image-preview1" src="{{ asset('uploads/product/' . $product->image) }}"
                                        class="mt-2 image-preview" style="max-width: 300px;" alt="">
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4">
                                <label for="photos" class="control-label mb-2">Add New Gallery Image</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="photos" name="photos[]"
                                            onchange="previewImage(this, 'image-preview2')" multiple>
                                    </div>
                                    <img id="image-preview2" class="mt-2 image-preview" style="max-width: 250px;"
                                        alt="">
                                </div>
                            </div>

                        </div>
                        <div class="form-group row mt-5">
                            <div class="col-12 col-md-12 col-lg-12">
                                <label for="uname1" class="col-sm-12 control-label mb-2">Product Description </label>
                                <div class="col-sm-12" >
                                    <div class="input-group">
                                        <textarea name="description" id="editor" placeholder="Write Product Description" cols="30"
                                            rows="10">{!! $product->description !!}</textarea>
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
                <div class="row mt-5">
                    <div class="card mt-5">
                        <div class="card-header">
                            <label for="photos" class="control-label mb-2">Product Gallery</label>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($product->product_galleries as $item)
                                    <div class="col-2 col-md-2 col-lg-2">
                                        <div class="col-sm-12 position-relative">
                                            <img src="{{ asset('uploads/product/gallery/' . $item->photos) }}"
                                                class="mt-2 image-preview" style="max-width: 250px; max-height: 250px"
                                                alt="">
                                            <form action="{{ route('admin.productGallery.destroy', $item->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                    class="btn btn-outline-danger position-absolute top-0 end-0 m-2"
                                                    title="Delete"
                                                    onclick="return confirm('Are you sure you want to delete this?')">
                                                    <i class="icon-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
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
        .image-preview {
            border: 2px solid #ccc;
            /* Border color */
            padding: 5px;
            /* Padding around the image */
            margin-top: 10px;
            /* Margin from the top */
            display: block;
            max-width: 400px;
            min-width: 250px;
            min-height: 250px;
            box-sizing: border-box;
            /* Include border and padding in the total width/height */
        }
    </style>
    <script>
        function previewImage(input, previewId) {
            var preview = document.getElementById(previewId);
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
