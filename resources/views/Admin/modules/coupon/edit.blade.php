@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Edit Coupon</h4>
                <form class="form-horizontal p-t-20" action="{{route('admin.coupon.update',$coupon->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{$coupon->id}}">

                    <div class="form-group row">
                        <div class="col-4 col-md-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Coupon Name</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="name"
                                           placeholder="Coupon Name" value="{{$coupon->name??null}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Coupon <Code></Code></label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="code"
                                           placeholder="Coupon Code" value="{{$coupon->code??null}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Price Type</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select class="form-control" name="price_type" id="">
                                        <option selected disabled>Select Coupon Price Type</option>
                                        <option value="%" {{$coupon->price_type== '%' ? 'selected':'' }}>% (Percentage)</option>
                                        <option value="৳" {{$coupon->price_type== '৳' ? 'selected':'' }}>৳ (Taka)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Coupon Price(৳) </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="number" class="form-control" id="uname1" name="price"
                                        placeholder="Coupon Price" value="{{$coupon->price??null}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-md-3">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Start Date</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="date" class="form-control" id="uname1" name="start_date"
                                        placeholder="Offer Name" value="{{ $coupon->start_date ?? null }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Valid Till</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="date" class="form-control" id="uname1" name="valid_till"
                                           placeholder="Valid Till" value="{{$coupon->valid_till??null}}">
                                </div>
                            </div>
                        </div>

                    </div>

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
