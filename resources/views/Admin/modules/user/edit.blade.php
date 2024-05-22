@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">EDIT USER</h4>
                <form class="form-horizontal p-t-20" action="{{ route('admin.user.update', $user->id) }}" method="POST"
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
                        <div class="col-6 col-md-6 col-lg-6 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">User Name </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="name"
                                        placeholder="User Name" value="{{ $user->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Service Category </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select type="select" class="form-control" id="uname1" name="role"
                                        placeholder="User Type" required>
                                        <option selected disabled>Select User Type</option>
                                        <option value="employeeIn"
                                            {{ $user->role == 'employee' && $user->employee_type == 'In House' ? 'selected' : '' }}>
                                            Employee(In House)
                                        </option>
                                        <option value="employeeOut"
                                            {{ $user->role == 'employee' && $user->employee_type == 'Out House' ? 'selected' : '' }}>
                                            Employee(Out House)
                                        </option>
                                        <option value="customer" {{ $user->role == 'customer' ? 'selected' : '' }}>
                                            Customer
                                        </option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Email</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email"
                                        value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Phone</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="number" class="form-control" name="phone" placeholder="Phone"
                                        value="{{ $user->phone }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Address</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="address" placeholder="Address"
                                        value="{{ $user->address }}">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="previous_route" value="{{ $previoiusRoute }}">
                        <div class="col-6 col-md-6 col-lg-6 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Password</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Leave blank to keep current password">
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
                                @if (@$user->userDetail->image)
                                    <img id="image-preview" src="{{ asset('uploads/user/' . $user->userDetail->image) }}"
                                        class="mt-2" style="max-width: 250px;" alt="">
                                @else
                                    <img id="image-preview" class="mt-2" style="max-width: 250px;" alt="">
                                @endif
                            </div>
                        </div>

                    </div>


            </div>

            <div class="form-group row mt-1 m-b-0">
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
