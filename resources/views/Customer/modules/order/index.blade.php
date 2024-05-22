@extends('Customer.layouts.master')
@section('content')
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">

                <div class="table-responsive m-t-20">
                    <h3 class="text-center ">
                        @if (session()->get('language') == 'bangla')
                            Service List
                        @else
                            Service List
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
                                        Total Charge(TK)
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
                                        একশন
                                    @else
                                        Action
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Review
                                    @else
                                        Review
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        {{ $item->service->name ?? null }}
                                    </td>
                                    <td>

                                        {{ $item->user->address ?? null }}
                                    </td>
                                    <td>
                                        {{ $item->service_time ?? null }}
                                        {{ $item->addedtime ? '+' . $item->addedtime->added_service_time . '(Extra)' : '' }}
                                        {{ $item->charge_type ?? null }}
                                    </td>
                                    <td>
                                        @if ($item->service)
                                            @php
                                                $baseCost = $item->service_time * $item->service->service_charge;
                                                $additionalTimeCost = $item->addedtime
                                                    ? $item->addedtime->added_service_time *
                                                        $item->service->service_charge
                                                    : 0;
                                                $totalCost = $baseCost + $additionalTimeCost;
                                            @endphp
                                            {{ $item->addedtime ? $totalCost : $baseCost }}
                                        @else
                                            N/A <!-- or any other default value you want to display when service is null -->
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status == 1)
                                            <span class="text-warning">Pending</span>
                                        @elseif ($item->status == 2)
                                            <span class="text-success">Accepted</span>
                                        @elseif ($item->status == 3)
                                            <span class="text-info">Running</span>
                                        @elseif ($item->status == 4)
                                            <span class="text-success">Completed</span>
                                        @else
                                            <span class="text-danger">Declined</span>
                                        @endif
                                    </td>

                                    <td>

                                        @if ($item->status == 4)
                                            @if ($item->payment_status == 0)
                                                <a href="{{ route('customer.customerPayment', $item->id) }}"
                                                    class="btn btn-outline-success">Pay</a>
                                                @if (!$item->addedtime)
                                                    <button data-toggle="modal"
                                                        data-target="#addTimeModal{{ $item->id }}"
                                                        class="btn btn-outline-warning">Add Time</button>
                                                @endif
                                            @else
                                                <span class="text-success">Payment Completed</span>
                                            @endif
                                        @endif

                                        <!-- Modal -->
                                        <div class="modal fade" id="addTimeModal{{ $item->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="addTimeModalLabel{{ $item->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Add Extra Time</h5>

                                                            <form class="form" method="post"
                                                                action="{{ route('customer.addTime', $item->id) }}">
                                                                @csrf
                                                                {{-- @method('PUT') --}}

                                                                <div class="form-group">
                                                                    <label for="added_service_time"
                                                                        class="form-label">Duration</label>
                                                                    <input type="number" name="added_service_time"
                                                                        class="form-control" required>
                                                                    @if ($item->service)
                                                                        <label for="charge_type" class="form-label">Duration
                                                                            Type</label>
                                                                        <select name="added_charge_type"
                                                                            id="added_charge_type" class="form-control"
                                                                            required>
                                                                            <option value="Hour"
                                                                                {{ $item->service->charge_type == 'Hour' ? 'selected' : 'disabled' }}>
                                                                                Hour
                                                                            </option>
                                                                            <option value="Minute"
                                                                                {{ $item->service->charge_type == 'Minute' ? 'selected' : 'disabled' }}>
                                                                                Minute
                                                                            </option>
                                                                            <option value="Day"
                                                                                {{ $item->service->charge_type == 'Day' ? 'selected' : 'disabled' }}>
                                                                                Day
                                                                            </option>
                                                                        </select>
                                                                    @endif
                                                                </div>

                                                                <input type="hidden" name="status" value="1">

                                                                <button type="submit"
                                                                    class="btn btn-success">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($item->payment_status == 1)
                                            <form method="post" action="{{ route('customer.review.store') }}">
                                                {{-- @method('PUT') --}}
                                                @csrf
                                                <div class="form-group">
                                                    <textarea name="msg" id="" class="form-control" rows="3" placeholder="Write a review" required></textarea>
                                                </div>
                                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                                <input type="hidden" name="service_id" value="{{ $item->service->id }}">
                                                <button type="submit" class="btn btn-outline-primary">Send</button>
                                                <a href="{{ route('customer.bookOrder', $item->service->id) }}"
                                                    class="btn btn-outline-info">See Reviews</a>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
@endsection
