@extends('super_admin.master')
@section('content')
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">

                <div class="table-responsive m-t-20">
                    <h3 class="text-center ">
                        @if (session()->get('language') == 'bangla')
                            {{ $pageTitle }}
                        @else
                            {{ $pageTitle }}
                        @endif
                    </h3>
                    <!-- Date Range Search Inputs -->
                    <div class="row m-3">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="start_date">From Date:</label>
                                    <input type="date" id="start_date" class="form-control datepicker">
                                </div>
                                <div class="col-md-3">
                                    <label for="end_date">To Date:</label>
                                    <input type="date" id="end_date" class="form-control datepicker">
                                </div>
                                <div class="col-md-1 mt-3">
                                    <button id="search-btn" class="btn btn-lg btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    Created At
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
                                    <td>{{ $item->created_at->toDayDateTimeString() ?? null }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#search-btn').on('click', function() {
                var startDate = $('#start_date').val();
                var endDate = $('#end_date').val();

                window.location.href = "{{ route('admin.expenseReport') }}" + "?start_date=" + startDate +
                    "&end_date=" + endDate;

            });
        });
    </script>
@endsection
