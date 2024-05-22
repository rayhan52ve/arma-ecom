@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">ADD NEW LOGO</h4>
                <form class="form-horizontal p-t-20" action="{{route('store.logoimg')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @if($logo!=null)
                    <input type="hidden" name="id" value="{{$logo->id}}">
                    <input type="hidden" name="old_img" value="{{$logo->logo_image}}">
                    @endif

                    <div class="form-group row">
                        <div class="col-6 col-md-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Site Name</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="site_name" name="site_name" value="{{ $logo != null ? $logo->site_name : '' }}"
                                           placeholder="Site Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Logo Image </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="logo_image" name="logo_image"
                                           placeholder="Logo Image 1">
                                    
                                </div>
                            </div>
                            <div>
                                @if($logo!=null)
                            <img src="{{asset($logo->logo_image)}}" height="100px" width="100px" alt="">
                            @endif
                            </div>
                        </div>
                    </div>
                    
                   

                    <div class="form-group row m-b-0">
                        <div class="col-sm-12 ">
                            @if($logo !=null)
                                <button type="submit" class="btn btn-info">Update</button>
                            @else
                                <button type="submit" class="btn btn-info">Submit</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- <div class="card">
            <div class="card-body">

                <div class="table-responsive m-t-40">
                    <table id="config-table" class="table display table-striped border no-wrap">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>E-mial</th>
                            
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($emp_data as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{$item->name??null}}</td>
                                <td>{{$item->address??null}}</td>
                                <td>{{$item->phone??null}}</td>
                                <td>{{$item->email??null}}</td>
                                <td><a href="{{route('edit.employe',$item->id)}}" class="btn btn-success"><i
                                            class="icon-note"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
