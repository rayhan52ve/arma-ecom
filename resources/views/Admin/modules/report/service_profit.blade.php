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
                    <div class="row justify-content-between m-3">
                        <div class="col-md-6">
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
                        <div class="col-md-3">
                            <h3 class="mt-3">Total Service Profit: <span class="text-success">{{$serviceProfit}} &#2547;</span></h3>
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
                                    @if (session()->get('language') == 'bangla')
                                        নাম
                                    @else
                                        Customer Name
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Assigned Employee
                                    @else
                                        Assigned Employee
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        নাম
                                    @else
                                        Service
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Payment
                                    @else
                                        Payment
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Employee Payroll
                                    @else
                                        Employee Payroll
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Service Profit
                                    @else
                                        Service Profit
                                    @endif
                                </th>
                                <th>
                                    Order Start Date|Time
                                </th>
                                <th>
                                    Order End Date|Time
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->user->name ?? null }}</td>
                                    <td>{{ $item->employee->name ?? null }}</td>
                                    <td>{{ $item->service->name ?? null }}</td>
                                    <td class="text-success">{!! $item->payment->amount ?? '<span class="text-danger">Due</span>' !!}</td>
                                    <td class="text-danger">{!! $item->payroll->payroll ?? '<span class="text-danger">Due</span>' !!}</td>
                                    <td>{!! isset($item->payment->amount, $item->payroll->payroll) ? $item->payment->amount - $item->payroll->payroll : '<span class="text-danger">N/A</span>' !!}</td>
                                    <td>{{ $item->created_at->toDayDateTimeString() ?? null }}</td>
                                    <td>{{ $item->updated_at->toDayDateTimeString() ?? null }}</td>
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

                window.location.href = "{{ route('admin.serviceProfitReport') }}" + "?start_date=" +
                    startDate +
                    "&end_date=" + endDate;

            });
        });
    </script>
@endsection
