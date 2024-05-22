@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">
                    @if (session()->get('language') == 'bangla')
                        নতুন সার্ভিস যোগ করুন
                    @else
                        Website Informations
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
                <form class="form-horizontal p-t-20" action="{{ route('admin.websiteInfo.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Company Address </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="address" value="{{@$webInfo->address}}"
                                        placeholder="Enter Company Address">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Phone </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="phone" value="{{@$webInfo->phone}}"
                                        placeholder="Enter Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Customer Care </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="telephone" value="{{@$webInfo->telephone}}"
                                        placeholder="Enter Customer Care Number ">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Website Email </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="email" value="{{@$webInfo->email}}"
                                        placeholder="Enter Email address">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12">
                        <label for="uname1" class="col-sm-12 control-label mb-2">Description</label>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <textarea type="text" class="form-control" id="uname1" name="description"
                                    placeholder="Enter website description">{{@$webInfo->description}}</textarea>
                            </div>
                        </div>
                        <label for="uname1" class="col-sm-12 control-label mb-2">Sliding Text</label>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <textarea type="text" class="form-control" id="uname1" name="marquee"
                                    placeholder="Enter website description">{{@$webInfo->marquee}}</textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h3>Social Media</h3>
                    <div class="form-group row">
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Facebook </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="facebook" value="{{@$webInfo->facebook}}"
                                        placeholder="Enter your facebook url link">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Tweeter </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="tweeter" value="{{@$webInfo->tweeter}}"
                                        placeholder="Enter your tweeter url link">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Google+ </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="google" value="{{@$webInfo->google}}"
                                        placeholder="Enter your google+ url link">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Linkedin </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="linkedin" value="{{@$webInfo->linkedin}}"
                                        placeholder="Enter your linkedin url link">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Footer</h3>
                    <div class="form-group row">
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Copy Right </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="copy_right" value="{{@$webInfo->copy_right}}"
                                        placeholder="Enter copyright notice.">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Website Photo</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="photo" name="photo"
                                        onchange="previewImage(this)">
                                </div>
                                <img id="photo-preview" class="mt-2" style="max-width: 300px;" alt="">
                            </div>
                        </div>
                    </div> --}}



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

    </div>
    <style>
        #photo-preview {
            border: 2px solid #ccc;
            /* Border color */
            padding: 5px;
            /* Padding around the photo */
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
            var preview = document.getElementById('photo-preview');
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
