@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">
                    @if (session()->get('language') == 'bangla')
                        নতুন PRODUCT যোগ করুন
                    @else
                        ADD NEW PRODUCT
                    @endif
                </h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form-horizontal p-t-20" action="{{ route('admin.product.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Product Name </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="name"
                                        placeholder="Product Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="category_id" class="col-sm-12 control-label mb-2">Product Category </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select type="select" class="form-control" onchange="setSubCategory(this.value)"
                                        id="product_category_id" name="product_category_id" placeholder="Product Category"
                                        required>
                                        <option selected disabled>Select Product Category</option>
                                        @foreach ($product_categories as $product_category)
                                            <option value="{{ $product_category->id }}">
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
                                    <input type="number" class="form-control" id="uname1" name="price"
                                        placeholder="Product Price Amount">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="product_sub_category_id" class="col-sm-12 control-label mb-2">Product Sub Category
                            </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select type="select" class="form-control" id="subCategoryId"
                                        name="product_sub_category_id" placeholder="Product Sub Category" required>
                                        <option selected disabled>Select Product Sub Category</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Discount Price </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="number" class="form-control" id="uname1" name="discount_price"
                                        placeholder="Product Discount Price">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="image" class="control-label mb-2">Thumbnail Image</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image"
                                        onchange="previewImage(this, 'image-preview1')">
                                </div>
                                <img id="image-preview1" class="mt-2 image-preview" style="max-width: 250px;"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="photos" class="control-label mb-2">Product Gallery</label>
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
                                    <textarea name="description" id="editor" placeholder="Write product Description" class="form-control"
                                        cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row m-b-0">
                        <div class="col-sm-12 mt-2">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

                <div class="table-responsive m-t-20">
                    <h3 class="text-center ">
                        @if (session()->get('language') == 'bangla')
                            Product List
                        @else
                            Product List
                        @endif
                    </h3>
                    <table id="config-table" class="table display table-striped border no-wrap">
                        <thead>
                            <tr>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        সি.নং
                                    @else
                                        SL
                                    @endif
                                </th>
                                <th>
                                    Product Photo
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        সার্ভিসের নাম
                                    @else
                                        Product Name
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Product Category
                                    @else
                                        Product Category
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Product Sub Category
                                    @else
                                        Product Sub Category
                                    @endif
                                </th>
                                <th>
                                    Product Price
                                </th>
                                <th>
                                    Discount Price
                                </th>
                                <th>
                                    Offer Price
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        একশন
                                    @else
                                        Action
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/product/' . $item->image) }}" width="100px"
                                            alt="">
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->name ?? null }}
                                        @else
                                            {{ $item->name ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->product_category->name ?? null }}
                                        @else
                                            {{ $item->product_category->name ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->product_sub_category->name ?? null }}
                                        @else
                                            {{ $item->product_sub_category->name ?? null }}
                                        @endif
                                    </td>
                                    <td class="{{ isset($item->discount_price) || isset($item->offer) ? 'text-decoration-line-through' : '' }}">
                                        {{ $item->price ?? null }}</td>
                                    <td>{{ $item->discount_price ?? null }}</td>
                                    <td>
                                        @if ($item->offer)
                                          @if ($item->offer->offer_type == '৳')
                                          {{ $item->price - @$item->offer->offer }}
                                          @elseif ($item->offer->offer_type == '%')
                                          {{ $item->price - ($item->price * (@$item->offer->offer/100)) }}
                                          @endif
                                        @else
                                        <p class="text-danger">No Offer</p>
                                        @endif
                                    </td>
                                    <td><a href="{{ route('admin.product.edit', $item->id) }}" title="Edit"
                                            class="btn btn-success"><i class="icon-note"></i></a>
                                        <form action="{{ route('admin.product.destroy', $item->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this service category?')">
                                                <i class="icon-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

        {{-- ck editor --}}
        <style>
            /* Style for CKEditor container */
            #editor {
                margin-top: 20px; /* Add some top margin */
                border: 1px solid #ccc; /* Add a border for visual clarity */
                border-radius: 5px; /* Add border-radius for rounded corners */
                padding: 10px; /* Add some padding for space */
            }

            /* Style for CKEditor contents */
            .ck-editor__editable {
                min-height: 150px; /* Set a minimum height for the editable area */
                border: 1px solid #ddd; /* Add a border for the editable area */
                border-radius: 5px; /* Add border-radius for rounded corners */
                padding: 10px; /* Add some padding for space within the editable area */
                font-family: Arial, sans-serif; /* Set font-family */
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
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            function setSubCategory(id) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('get-sub-category-by-category') }}",
                    data: {
                        id: id
                    },
                    datatype: "JSON",
                    success: function(response) {
                        var option = '';
                        option += '<option value="" disabled selected>--Select Sub Category--</option>';
                        $.each(response, function(key, value) {
                            option += '<option value="' + value.id + '">' + value.name + '</option>'
                        });
                        $('#subCategoryId').empty();
                        $('#subCategoryId').append(option);
                    }

                });
            }
        </script>


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
    @endpush

@endsection
