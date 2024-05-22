@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">
                    @if (session()->get('language') == 'bangla')
                        নতুন সার্ভিস যোগ করুন
                    @else
                        ADD NEW SERVICE CATEGORY
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
                <form class="form-horizontal p-t-20" action="{{ route('service-category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (session()->get('language') != 'bangla')
                        <div class="form-group row">
                            <div class="col-6 col-md-6 col-lg-6">
                                <label for="uname1" class="col-sm-12 control-label mb-2">Service Category Name </label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="uname1" name="service_category"
                                            placeholder="Service Category Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6">
                                <label for="uname1" class="col-sm-12 control-label mb-2">Photo</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="image" name="image"
                                            onchange="previewImage(this)">
                                    </div>
                                    <img id="image-preview" class="mt-2" style="max-width: 300px;" alt="">
                                </div>
                            </div>
                        @else
                            <div class="col-12 col-md-12 col-lg-12">
                                <label for="uname1" class="col-sm-12 control-label mb-2">সার্ভিসের নাম </label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="uname1" name="team_name_bangla"
                                            placeholder=" দলের নাম লিখুন ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                    <div class="form-group row m-b-0">
                        <div class="col-sm-12 mt-2">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                @if (session()->get('language') == 'bangla')
                                    তৈরি করুন
                                @else
                                    Create
                                @endif
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
                            Service Category List
                        @else
                            Service Category List
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
                                    Photo
                                </th>

                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        সার্ভিসের নাম
                                    @else
                                        Service Category Name
                                    @endif
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
                            @foreach ($service_categories as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/service_category/' . $item->image) }}"
                                            width="100px" alt="">
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->service_category ?? null }}
                                        @else
                                            {{ $item->service_category ?? null }}
                                        @endif
                                    </td>
                                    <td><a href="{{ route('service-category.edit', $item->id) }}" title="Edit"
                                            class="btn btn-success"><i class="icon-note"></i></a>
                                        <form action="{{ route('service-category.destroy', $item->id) }}" method="POST"
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
