@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">
                    @if (session()->get('language') == 'bangla')
                        .
                    @else
                        ADD NEW USER
                    @endif
                </h4>
                <form class="form-horizontal p-t-20" action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
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
                        <div class="col-6 col-md-6 col-lg-6 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">User Name </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="name"
                                        placeholder="User Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">User Type</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select type="select" class="form-control" id="uname1" name="role"
                                        placeholder="User Type" required>
                                        <option selected disabled>Select User Type</option>
                                        <option value="employeeIn">Employee(In House)</option>
                                        <option value="employeeOut">Employee(Out House)</option>
                                        <option value="customer">Customer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Email</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Phone</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Address</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="address" placeholder="Address">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Password</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-3">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Image</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image"
                                        onchange="previewImage(this)">
                                </div>
                                <img id="image-preview" class="mt-2" style="max-width: 250px;" alt="">
                            </div>
                        </div>

                    </div>



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
            width: 250px;
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
