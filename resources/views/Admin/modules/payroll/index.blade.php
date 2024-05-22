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
                                        Name
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Email
                                    @else
                                        Email
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
                                        Address
                                    @else
                                        Address
                                    @endif
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
                            @foreach ($users as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->name ?? null }}
                                        @else
                                            {{ $item->name ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->email ?? null }}
                                        @else
                                            {{ $item->email ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->phone ?? null }}
                                        @else
                                            {{ $item->phone ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->address ?? null }}
                                        @else
                                            {{ $item->address ?? null }}
                                        @endif
                                    </td>
                                    <td><a href="{{ route('admin.employeeDetail', $item->id) }}" title="Edit"
                                            class="btn btn-info">Order Details</a>

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
