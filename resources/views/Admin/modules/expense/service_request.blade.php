@extends('super_admin.master')
@section('content')
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">

                <div class="table-responsive m-t-20">
                    <h3 class="text-center ">
                            Service Requests
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
                                    Customer Name
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        সার্ভিসের নাম
                                    @else
                                        Service Name
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Service Category
                                    @else
                                        Service Category
                                    @endif
                                </th>
                                <th>
                                    Service Charge
                                </th>
                                <th>
                                    Service Charge Type
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
                            @foreach ($services as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        Customer
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->name ?? null }}
                                        @else
                                            {{ $item->name ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->service_category->service_category ?? null }}
                                        @else
                                            {{ $item->service_category->service_category ?? null }}
                                        @endif
                                    </td>
                                    <td>{{ $item->service_charge ?? null }}</td>
                                    <td>{{ $item->charge_type ?? null }}</td>
                                    <td><a href="" title="Accept"
                                            class="btn btn-success">Accept</a>
                                        <a href="" title="Decline"
                                            class="btn btn-danger">Decline</a>
                                        {{-- <form action="{{ route('service.destroy', $item->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this service category?')">
                                                <i class="icon-trash"></i>
                                            </button>
                                        </form> --}}
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
