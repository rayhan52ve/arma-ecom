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
                                        Item(s)
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
                                        Phone
                                    @else
                                        Phone
                                    @endif
                                </th>

                                {{-- <th>
                                    @if (session()->get('language') == 'bangla')
                                        Payment
                                    @else
                                        Payment
                                    @endif
                                </th> --}}
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        নাম
                                    @else
                                        Address
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Discount
                                    @else
                                        Discount
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Total(৳)
                                    @else
                                        Total(৳)
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
                                    <td style="min-width: 200px">
                                        @foreach ($item->productOrderDetails as $key => $productOrderDetail)
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{ asset('uploads/product/' . $productOrderDetail->product->image) }}"
                                                        width="60px" style="height:60px" alt="">

                                                </div>
                                                <div class="col-md-6">
                                                    {{ $productOrderDetail->product->name }}<br>
                                                    (<b>৳ {{ $productOrderDetail->price }}</b>
                                                    x {{ $productOrderDetail->qty }})
                                                </div>
                                            </div><br>
                                        @endforeach
                                    </td>
                                    <td>{{ $item->user->name ?? null }}</td>
                                    <td>{{ $item->user->phone ?? null }}</td>
                                    <td class="text-success">{!! $item->payment->amount ?? '<span class="text-danger">Not Paid</span>' !!}</td>
                                    <td>{{ $item->address ?? null }}</td>
                                    <td class="text-success">
                                        {!! $item->coupon_discount ?? '<span class="text-danger">N/A</span>' !!}
                                    </td>
                                    <td>
                                        @if ($item->coupon_discount)
                                            {{ $item->total }}
                                        @else
                                            {{ $item->subtotal }}
                                        @endif
                                    </td>
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

                window.location.href = "{{ route('admin.productSalesReport') }}" + "?start_date=" +
                    startDate +
                    "&end_date=" + endDate;

            });
        });
    </script>
@endsection
