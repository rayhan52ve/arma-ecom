@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">
                    @if (session()->get('language') == 'bangla')
                        নতুন পণ্য যোগ করুন
                    @else
                        CREATE NEW COUPON
                    @endif
                </h4>
                <form class="form-horizontal p-t-20" action="{{ route('admin.coupon.store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Coupon Name </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="name"
                                        placeholder="Coupon Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Coupon Code </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="code"
                                        placeholder="Coupon Code" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Price Type</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select class="form-control" name="price_type" id="">
                                        <option selected disabled>Select Coupob Price Type</option>
                                        <option value="%">% (Percentage)</option>
                                        <option value="৳">৳ (Taka)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Coupon Price </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="number" class="form-control" id="uname1" name="price"
                                        placeholder="Coupon Price" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Start Date</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="date" class="form-control datepicker" id="uname1" name="start_date"
                                        placeholder="Valid Till">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Valid Till</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="date" class="form-control datepicker" id="uname1" name="valid_till"
                                        placeholder="Valid Till">
                                </div>
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

        <div class="card">
            <div class="card-body">

                <div class="table-responsive m-t-20">
                    <h3 class="text-center ">
                        @if (session()->get('language') == 'bangla')
                            Coupon List
                        @else
                            Coupon List
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
                                    @if (session()->get('language') == 'bangla')
                                        সার্ভিসের নাম
                                    @else
                                        Coupon Name
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Coupon Code
                                    @else
                                        Coupon Code
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Price Type
                                    @else
                                        Price Type
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Coupon Price
                                    @else
                                        Coupon Price
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Start Date
                                    @else
                                        Start Date
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Valid Till
                                    @else
                                        Valid Till
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
                            @foreach ($coupons as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->name ?? null }}
                                        @else
                                            {{ $item->name ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->code ?? null }}
                                        @else
                                            {{ $item->code ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->price_type ?? null }}
                                        @else
                                            {{ $item->price_type ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->price ?? null }}
                                        @else
                                            {{ $item->price ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->start_date ?? null }}
                                        @else
                                            {{ $item->start_date ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->valid_till ?? null }}
                                        @else
                                            {{ $item->valid_till ?? null }}
                                        @endif
                                    </td>
                                    <td><a href="{{ route('admin.coupon.edit', $item->id) }}" title="Edit"
                                            class="btn btn-success"><i class="icon-note"></i></a>
                                        <form action="{{ route('admin.coupon.destroy', $item->id) }}" method="POST"
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
@endsection
