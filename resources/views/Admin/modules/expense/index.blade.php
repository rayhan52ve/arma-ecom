@extends('super_admin.master')
@section('content')
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">

                <div class="table-responsive m-t-20">
                    <h3 class="text-center ">
                        @if (session()->get('language') == 'bangla')
                            Expense History
                        @else
                            Expense History
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
                                    File
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Expense Type
                                    @else
                                        Expense Type
                                    @endif
                                </th>
                                <th>
                                    Expense Amount
                                </th>
                                <th>
                                    Voucher No.
                                </th>
                                <th>
                                    Submit Date
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
                            @foreach ($expenses as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/expense/' . $item->image) }}" width="100px"
                                            alt="">
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->expensetype->expense_type ?? null }}
                                        @else
                                            {{ $item->expensetype->expense_type ?? null }}
                                        @endif
                                    </td>
                                    <td>{{ $item->expense_amount ?? null }}</td>
                                    <td>{{ $item->voucher ?? null }}</td>
                                    <td>{{ $item->date ?? null }}</td>
                                    <td><a href="{{ route('admin.expense.edit', $item->id) }}" title="Edit"
                                            class="btn btn-success"><i class="icon-note"></i></a>
                                        <form action="{{ route('admin.expense.destroy', $item->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this expense category?')">
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
