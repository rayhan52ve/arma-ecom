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
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Assigned Employee
                                    @else
                                        Assigned Employee
                                    @endif
                                </th>
                                <th>
                                    Order Date|Time
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
                                    <td>{{ $item->employee->name ?? null }}</td>
                                    <td>{{ $item->created_at->toDayDateTimeString() ?? null }}</td>
                                    @if (url()->current() != route('admin.completedOrderList'))
                                        <td>
                                            <form action="{{ route('admin.orderStatus', $item->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('PUT')

                                                <!-- Accept Button -->
                                                <button type="button" class="btn btn-success" data-toggle="modal"
                                                    data-target="#orderModal{{ $item->id }}">
                                                    {{ $item->status == 2 ? 'Chenge Employee' : 'Accept' }}
                                                </button>

                                                <!-- Decline Button -->
                                                @if ($item->status != 3)
                                                    <button type="submit" name="status" value="3"
                                                        class="btn btn-danger" title="Decline">Decline</button>
                                                @endif
                                            </form>

                                            <!-- Modal -->
                                            <div class="modal fade" id="orderModal{{ $item->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="orderModalLabel{{ $item->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Assign Employee</h5>

                                                                <form class="form" method="post"
                                                                    action="{{ route('admin.orderStatus', $item->id) }}">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <!-- Employee Selection -->
                                                                    <div class="form-group">
                                                                        {{-- <label for="employee_id{{ $item->id }}">Select Employee</label> --}}
                                                                        <select class="form-control" name="employee_id"
                                                                            id="employee_id{{ $item->id }}" required
                                                                            aria-required="true">
                                                                            <option value="" selected disabled>Select
                                                                                Employee</option>
                                                                            @forelse ($employees as $employee)
                                                                                <option value="{{ $employee->id }}"
                                                                                    {{ $employee->id == $item->employee_id ? 'selected' : '' }}>
                                                                                    {{ $employee->name }}</option>
                                                                            @empty
                                                                                <p>No employee Found</p>
                                                                            @endforelse
                                                                        </select>
                                                                    </div>

                                                                    <input type="hidden" name="status" value="2">

                                                                    <button type="submit"
                                                                        class="btn btn-success">Submit</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    @push('css')
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
    @endpush
@endsection
