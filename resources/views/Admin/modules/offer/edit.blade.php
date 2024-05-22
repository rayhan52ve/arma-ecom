@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Edit Offer</h4>
                <form class="form-horizontal p-t-20" action="{{ route('admin.offer.update', $offer->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{ $offer->id }}">

                    <div class="form-group row">
                        <div class="col-3 col-md-3">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Offer Name</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="name"
                                        placeholder="Offer Name" value="{{ $offer->name ?? null }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-md-3">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Offer <Code></Code></label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="offer"
                                        placeholder="Offer Percentage" value="{{ $offer->offer ?? null }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-md-3 col-lg-3">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Offer Type</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select class="form-control" name="offer_type" id="">
                                        <option selected disabled>Select Offer value Type</option>
                                        <option value="%" {{$offer->offer_type== '%' ? 'selected':'' }}>% (Percentage)</option>
                                        <option value="৳" {{$offer->offer_type== '৳' ? 'selected':'' }}>৳ (Taka)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-md-3">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Start Date</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="date" class="form-control" id="uname1" name="start_date"
                                        placeholder="Offer Name" value="{{ $offer->start_date ?? null }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-md-3">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Valid Till</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="date" class="form-control" id="uname1" name="valid_till"
                                        placeholder="Offer Name" value="{{ $offer->valid_till ?? null }}">
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
    <div class="container-fluid">
        <div class="card mt-4">
            {{-- offer --}}
            <div class="card-body">
                <h4 class="card-title"><a class="btn btn-warning" href="{{route('admin.offer.index')}}"><i class="fa-solid fa-arrow-left"></i> Back</a></h4>
                <div class="table-responsive m-t-20">
                    <h3 class="text-center ">
                        @if (session()->get('language') == 'bangla')
                            Offer Added
                        @else
                            Offer Added
                        @endif
                    </h3>
                    <table id="" class="table display table-striped border no-wrap">
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
                                    Product Photo
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        সার্ভিসের নাম
                                    @else
                                        Product Name
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Product Category
                                    @else
                                        Product Category
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Product Sub Category
                                    @else
                                        Product Sub Category
                                    @endif
                                </th>
                                <th>
                                    Product Price
                                </th>
                                <th>
                                    Discount Price
                                </th>
                                <th>
                                    Offer Price
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
                            @foreach ($products['offer'] as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/product/' . $item->image) }}" width="100px"
                                            alt="">
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->name ?? null }}
                                        @else
                                            {{ $item->name ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->product_category->name ?? null }}
                                        @else
                                            {{ $item->product_category->name ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->product_sub_category->name ?? null }}
                                        @else
                                            {{ $item->product_sub_category->name ?? null }}
                                        @endif
                                    </td>
                                    <td class="{{ isset($item->discount_price) || isset($item->offer->offer) ? 'text-decoration-line-through' : '' }}">
                                        {{ $item->price ?? null }}
                                    </td>
                                    <td>{{ $item->discount_price ?? null }}</td>
                                    <td>
                                        @if ($item->offer)
                                          @if ($item->offer->offer_type == '৳')
                                          {{ $item->price - @$item->offer->offer }}
                                          @elseif ($item->offer->offer_type == '%')
                                          {{ $item->price - ($item->price * (@$item->offer->offer/100)) }}
                                          @endif
                                          (Valid From {{$item->offer->start_date}} To {{$item->offer->valid_till}})
                                        @else
                                        <p class="text-danger">No Offer</p>
                                        @endif
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.addOffer', $item->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="remove" value="0">
                                            <button type="submit" class="btn btn-danger btn-circle"><i class="fa-solid fa-minus"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- no offer --}}
            <div class="card-body">
                {{-- <h4 class="card-title">Products</h4> --}}
                <div class="table-responsive m-t-20">
                    <h3 class="text-center ">
                        @if (session()->get('language') == 'bangla')
                            Product List
                        @else
                            Product List
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
                                    Product Photo
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        সার্ভিসের নাম
                                    @else
                                        Product Name
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Product Category
                                    @else
                                        Product Category
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Product Sub Category
                                    @else
                                        Product Sub Category
                                    @endif
                                </th>
                                <th>
                                    Product Price
                                </th>
                                <th>
                                    Discount Price
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
                            @foreach ($products['noOffer'] as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/product/' . $item->image) }}" width="100px"
                                            alt="">
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->name ?? null }}
                                        @else
                                            {{ $item->name ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->product_category->name ?? null }}
                                        @else
                                            {{ $item->product_category->name ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->product_sub_category->name ?? null }}
                                        @else
                                            {{ $item->product_sub_category->name ?? null }}
                                        @endif
                                    </td>
                                    <td class="{{ $item->discount_price ? 'text-decoration-line-through' : '' }}">
                                        {{ $item->price ?? null }}</td>
                                    <td>{{ $item->discount_price ?? null }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.addOffer', $item->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="offer_id" value="{{ $offer->id }}">
                                            <button type="submit" class="btn btn-success btn-circle"><i class="fa-solid fa-plus"></i></button>
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
