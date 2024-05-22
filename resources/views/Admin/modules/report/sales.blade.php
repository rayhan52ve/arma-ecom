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
                                    @if (session()->get('language') == 'bangla')
                                        নাম
                                    @else
                                        Customer Name
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
                                        Phone
                                    @else
                                        Phone
                                    @endif
                                </th>

                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        নাম
                                    @else
                                        Service Duration
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
                                        নাম
                                    @else
                                        Address
                                    @endif
                                </th>
                                <th>
                                    Order Start Date|Time
                                </th>
                                <th>
                                    Order End Date|Time
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Assigned Employee
                                    @else
                                        Assigned Employee
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->user->name ?? null }}</td>
                                    <td>{{ $item->service->name ?? null }}</td>
                                    <td>{{ $item->user->phone ?? null }}</td>
                                    <td>{{ $item->service_time ?? null }} ({{ $item->charge_type ?? null }})</td>
                                    <td class="text-success">{!! $item->payment->amount ?? '<span class="text-danger">Not Paid</span>' !!}</td>
                                    <td>{{ $item->address ?? null }}</td>
                                    <td>{{ $item->created_at->toDayDateTimeString() ?? null }}</td>
                                    <td>{{ $item->updated_at->toDayDateTimeString() ?? null }}</td>
                                    <td>{{ $item->employee->name ?? null }}</td>
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

                window.location.href = "{{ route('admin.salesReport') }}" + "?start_date=" + startDate +
                    "&end_date=" + endDate;

            });
        });
    </script>
@endsection
