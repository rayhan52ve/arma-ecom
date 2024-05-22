@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">
                    @if (session()->get('language') == 'bangla')
                        নতুন পণ্য যোগ করুন
                    @else
                        ADD NEW PRODUCT SUB CATEGORY
                    @endif
                </h4>
                <form class="form-horizontal p-t-20" action="{{ route('admin.productSubCategory.store') }}" method="POST">
                    @csrf
                    @if (session()->get('language') != 'bangla')
                        <div class="form-group row">
                            <div class="col-6 col-md-6 col-lg-6">
                                <label for="uname1" class="col-sm-12 control-label mb-2">Product Sub Category Name </label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="uname1" name="name"
                                            placeholder="Product Sub Category Name">
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-6 col-md-6 col-lg-6">
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
                    <div class="col-6 col-md-6 col-lg-6">
                        <label for="uname1" class="col-sm-12 control-label mb-2">Product Category </label>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <select type="select" class="form-control" id="uname1" name="product_category_id"
                                    placeholder="Product Category" required>
                                    <option selected disabled>Select Product Category</option>
                                    @foreach ($product_categories as $product_category)
                                        <option value="{{ $product_category->id }}">
                                            {{ $product_category->name }}</option>
                                    @endforeach
                                </select>
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
                            Product Sub Category List
                        @else
                            Product Sub Category List
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
                                    Product Sub Category
                                    @else
                                        Product Sub Category
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
                                        একশন
                                    @else
                                        Action
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product_sub_categories as $key => $item)
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
                                            {{ $item->product_category->name ?? null }}
                                        @else
                                            {{ $item->product_category->name ?? null }}
                                        @endif
                                    </td>
                                    <td><a href="{{ route('admin.productSubCategory.edit', $item->id) }}" title="Edit"
                                            class="btn btn-success"><i class="icon-note"></i></a>
                                        <form action="{{ route('admin.productSubCategory.destroy', $item->id) }}" method="POST"
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
