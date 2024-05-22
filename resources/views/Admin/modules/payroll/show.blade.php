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
                            Orders of {{ $employee->name }}
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
                                        Payroll
                                    @else
                                        Payroll
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        নাম
                                    @else
                                        Status
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        নাম
                                    @else
                                        Date
                                    @endif
                                </th>
                                @if (url()->current() != route('admin.completedOrderList'))
                                    <th>
                                        @if (session()->get('language') == 'bangla')
                                            একশন
                                        @else
                                            Action
                                        @endif
                                @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee->employeOrders as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->user->name ?? null }}</td>
                                    <td>{{ $item->service->name ?? null }}</td>
                                    <td>{{ $item->address ?? null }}</td>
                                    <td>{{ $item->service_time ?? null }} {{ $item->charge_type ?? null }}</td>
                                    <td>{{ (@$item->service_time * $item->service->service_charge * 0.6 ?? null)}} Taka</td>
                                    <td>
                                        @if ($item->status == 1)
                                            <span class="text-warning">Pending</span>
                                        @elseif ($item->status == 2)
                                            <span class="text-info">Running</span>
                                        @elseif($item->status == 3)
                                            <span class="text-danger">Declined</span>
                                        @elseif($item->status == 4)
                                            <span class="text-success">Completed</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->created_at->toDayDateTimeString() ?? null }}</td>
                                    @if (url()->current() != route('admin.completedOrderList'))
                                        <td>
                                            <form action="{{ route('admin.payrollStatus', $item->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('PUT')

                                                <input type="hidden" name="order_id" value="{{ $item->id }}">
                                                <input type="hidden" name="user_id" value="{{ $item->employee_id }}">
                                                <input type="hidden" name="status" value="1">
                                                <input type="hidden" name="payroll"
                                                    value="{{ ($item->service_time * $item->service->service_charge * 0.6 )}}">
                                                <!-- Decline Button -->
                                                @if ($item->status == 4)
                                                    @if ($item->payroll?->status == 0)
                                                        <button type="submit" class="btn btn-success"
                                                            title="Decline">Pay</button>
                                                    @else
                                                        <span class="text-success"><b>Paid</b></span>
                                                    @endif
                                                @endif
                                            </form>

                                        </td>
                                    @endif
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
