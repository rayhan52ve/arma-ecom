@extends('super_admin.master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xlg-10 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Edit Profile</p>
                        <hr>
                        <form class="form-horizontal form-material mx-2"
                            action="{{ route('admin.profile_update', Auth::user()->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="mb-4">
                                <label class="image" for="imageInput">
                                    <input type="file" id="imageInput" name="image" class="form-control">
                                    @php
                                        @$image = auth()->user()->userDetail->image;
                                    @endphp
                                    @if (@$image)
                                        <img id="profileImage" src="{{ asset('uploads/user/' . $image) }}"
                                            height="150" width="150">
                                    @else
                                        <img id="profileImage" src="{{ asset('assets/avatar.png') }}"
                                            height="150" width="150">
                                    @endif
                                    <i class="mdi mdi-camera mdi-24px"></i>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-6 col-lg-6 mt-4">
                                    <label for="uname1" class="col-sm-12 control-label mb-2">Name </label>
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="uname1" name="name"
                                                placeholder="User Name" value="{{ auth()->user()->name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-6 mt-4">
                                    <label for="uname1" class="col-sm-12 control-label mb-2">Email</label>
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="email" placeholder="Email"
                                                value="{{ auth()->user()->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-6 mt-4">
                                    <label for="uname1" class="col-sm-12 control-label mb-2">Phone</label>
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="phone" placeholder="Phone"
                                                value="{{ auth()->user()->phone }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-6 mt-4">
                                    <label for="uname1" class="col-sm-12 control-label mb-2">Address</label>
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="address" placeholder="Address"
                                                value="{{ auth()->user()->address }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-6 mt-4">
                                    <label for="uname1" class="col-sm-12 control-label mb-2">Password</label>
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Leave blank to keep current password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <div class="col-sm-12 d-flex">
                                    <button type="submit" class="btn btn-success mx-auto mx-md-0 text-white">Update
                                        Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @push('css')
        <style>
            .image {
                display: block;
                width: 60vw;
                max-width: 150px;
                background-color: rgb(239, 241, 245);
                border-radius: 2px;
                font-size: 1em;
                line-height: 1.6em;
                text-align: center;
            }

            .image:hover {
                background-color: rgb(207, 226, 207);
            }

            .image:active {
                background-color: skyblue;
            }

            #imageInput {
                border: 5px;
                /* border-radius: 50%; */
                clip: rect(1px, 1px, 1px, 1px);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }
        </style>
    @endpush

    @push('js')
        <script>
            var imageInput = document.getElementById("imageInput");
            var profileImage = document.getElementById("profileImage");

            imageInput.addEventListener("change", function() {
                // Check if a file has been selected
                if (imageInput.files && imageInput.files[0]) {
                    var reader = new FileReader();

                    // When the file is loaded, set the src attribute of the img element
                    reader.onload = function(e) {
                        profileImage.src = e.target.result;
                    };

                    // Read the selected file as a data URL
                    reader.readAsDataURL(imageInput.files[0]);
                }
            });
        </script>
    @endpush
@endsection
