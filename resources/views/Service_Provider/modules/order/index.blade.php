@extends('Service_Provider.layouts.master')
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
                                        Status
                                    @endif
                                </th>
                                @if (url()->current() != route('serviceProvider.completedOrderList'))
                                    <th>
                                        @if (session()->get('language') == 'bangla')
                                            একশন
                                        @else
                                            Action
                                        @endif
                                    </th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->user->name ?? null }}</td>
                                    <td>{{ $item->user->phone ?? null }}</td>
                                    <td>{{ $item->service->name ?? null }}</td>
                                    <td>{{ $item->user->address ?? null }}</td>
                                    <td>
                                        {{ $item->service_time ?? null }}
                                        {{ $item->addedtime ? '+' . $item->addedtime->added_service_time . '(Extra)' : '' }}
                                        {{ $item->charge_type ?? null }}
                                    </td>
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
                                    @if ($item->status == 2)
                                        <td>
                                            <form action="{{ route('serviceProvider.orderCountdown', $item->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="orderId" value="{{ $item->id }}">
                                                <input type="hidden" name="time"
                                                    value="{{ $item->addedtime ? $item->addedtime->added_service_time : $item->service_time ?? null }}">
                                                <input type="hidden" name="time_type"
                                                    value="{{ $item->charge_type ?? null }}">
                                                <button type="submit" class="btn btn-outline-warning" title="Start Service"
                                                    id="startButton">
                                                    Start
                                                </button>
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
