@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">
                    Update About Us
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
                <form class="form-horizontal p-t-20" action="{{ route('admin.aboutUs.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">

                        <div class="col-12 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Photo</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image"
                                        onchange="previewImage(this)">
                                </div>
                                @if (@$aboutUs->image)
                                    <img id="image-preview" src="{{ asset('uploads/about_us/' . $aboutUs->image) }}"
                                        class="mt-2" style="width: auto;" alt="">
                                @else
                                    <img id="image-preview" class="mt-2" style="width: 100%;" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Description</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <textarea name="description" class="form-control" id="editor" cols="30" rows="">{{ @$aboutUs->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="form-group row m-b-0">
                        <div class="col-sm-12 mt-2">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                Save
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
            width: 100%;
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        /* Style for CKEditor contents */
        .ck-editor__editable {
            width: 100%;
            min-height: 150px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            font-family: Arial, sans-serif;
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
            width: 100%;
            height: 500px;
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
