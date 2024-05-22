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
                                        Item(s)
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
                                        নাম
                                    @else
                                        Phone
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Placed On
                                    @else
                                        Placed On
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
                                    @if (session()->get('language') == 'bangla')
                                        Status
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
                                                    <b>৳ {{ $productOrderDetail->price }}</b><br>
                                                    x {{ $productOrderDetail->qty }}

                                                </div>
                                            </div><br>
                                        @endforeach
                                    </td>
                                    <td>{{ $item->user->name ?? null }}</td>
                                    <td>{{ $item->user->phone ?? null }}</td>
                                    <td>
                                        {{ $item->created_at->toDayDateTimeString() ?? null }}
                                    </td>
                                    <td>
                                        {{ $item->user->address ?? null }}
                                    </td>
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

                                    @if (url()->current() != route('admin.completedProductOrder'))
                                        <td>
                                            <form action="{{ route('admin.productOrderStatus', $item->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('PUT')

                                                <!-- Accept Button -->
                                                @if ($item->status != 2)
                                                    <button type="submit" name="status" value="2" title="Accept"
                                                        class="btn btn-success">Accept</button>
                                                @endif

                                                @if ($item->status == 2)
                                                    <button type="submit" name="status" value="4"
                                                        title="Complete Order" class="btn btn-success">Complete</button>
                                                @endif

                                                <!-- Decline Button -->
                                                @if ($item->status != 3)
                                                    <button type="submit" name="status" value="3"
                                                        class="btn btn-danger" title="Decline">Decline</button>
                                                @endif
                                            </form>

                                        </td>
                                        @else
                                        <td>
                                            <a href="{{route('invoice',$item->id)}}" class="btn btn-purple">Invoice</a>
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
