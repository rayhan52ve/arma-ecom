@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Edit Product Category</h4>
                <form class="form-horizontal p-t-20" action="{{route('admin.productCategory.update',$productCategory->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{$productCategory->id}}">

                    @if(session()->get('language') != 'bangla')
                    <div class="form-group row">
                        <div class="col-6 col-md-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Product Categoty</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="name"
                                           placeholder="Product Category Name" value="{{$productCategory->name??null}}">
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-12 col-md-12 col-lg-12 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Product Categoty</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="team_name_bangla"
                                    value="{{$productCategory->name_bangla??null}}">
                                </div>
                            </div>
                        </div>

                    </div>
                    @endif

                    <div class="form-group row mt-1 m-b-0">
                        <div class="col-sm-12 ">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">@if(session()->get('language')== 'bangla') আপডেট @else Update @endif
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
