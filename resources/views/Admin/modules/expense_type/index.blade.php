@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">
                    @if (session()->get('language') == 'bangla')
                        নতুন সার্ভিস যোগ করুন
                    @else
                        ADD NEW EXPENSE TYPE
                    @endif
                </h4>
                <form class="form-horizontal p-t-20" action="{{ route('admin.expenseType.store') }}" method="POST">
                    @csrf
                    @if (session()->get('language') != 'bangla')
                        <div class="form-group row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <label for="uname1" class="col-sm-12 control-label mb-2">Expense Type Name </label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="uname1" name="expense_type"
                                            placeholder="Expense Type Name">
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-12 col-md-12 col-lg-12">
                                <label for="uname1" class="col-sm-12 control-label mb-2">Expense Type Name</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="uname1" name="team_name_bangla"
                                            placeholder=" Expense Type Name ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


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
                            Expense Type List
                        @else
                            Expense Type List
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
                                        Expense Type Name
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
                            @foreach ($expense_types as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->expense_type ?? null }}
                                        @else
                                            {{ $item->expense_type ?? null }}
                                        @endif
                                    </td>
                                    <td><a href="{{ route('admin.expenseType.edit', $item->id) }}" title="Edit"
                                            class="btn btn-success"><i class="icon-note"></i></a>
                                        <form action="{{ route('admin.expenseType.destroy', $item->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this?')">
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
