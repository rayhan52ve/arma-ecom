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
                                        Assigned Employee
                                    @else
                                        Assigned Employee
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
                                        Service
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
                                    @if (session()->get('language') == 'bangla')
                                        নাম
                                    @else
                                        Service Duration
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        নাম
                                    @else
                                        Payroll
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        নাম
                                    @else
                                        Pay Date
                                    @endif
                                </th>
                                {{-- <th>
                                    @if (session()->get('language') == 'bangla')
                                        নাম
                                    @else
                                        Status
                                    @endif
                                </th> --}}

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payrolls as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->order->employee->name ?? null }}</td>
                                    <td>{{ $item->order->employee->phone ?? null }}</td>
                                    <td>{{ $item->order->service->name ?? null }}</td>
                                    <td>{{ $item->order->address ?? null }}</td>
                                    <td>{{ $item->order->service_time ?? null }} {{ $item->order->charge_type ?? null }}s
                                    </td>
                                    <td>{{ $item->payroll ?? null }}</td>
                                    <td>{{ $item->created_at->toDayDateTimeString() ?? null }}</td>
                                    {{-- <td>
                                        @if ($item->status == 1)
                                            <span class="text-success">Paid</span>
                                        @endif
                                    </td> --}}
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

                window.location.href = "{{ route('admin.servicePayReport') }}" + "?start_date=" +
                    startDate +
                    "&end_date=" + endDate;

            });
        });
    </script>
@endsection
