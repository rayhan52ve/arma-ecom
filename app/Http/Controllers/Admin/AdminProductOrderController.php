<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ProductOrder;
use App\Models\User;
use Illuminate\Http\Request;

class AdminProductOrderController extends Controller
{
    public function pendingOrderList()
    {
        $pageTitle = 'Pending Order';
        $orders = ProductOrder::with('user', 'productOrderDetails')->where('status', 1)->latest()->get();
        return view('Admin.modules.product_order.index', compact('orders', 'pageTitle'));
    }

    public function acceptedOrderList()
    {
        $pageTitle = 'Running Order';
        $orders = ProductOrder::with('user', 'productOrderDetails')->where('status', 2)->latest()->get();
        return view('Admin.modules.product_order.index', compact('orders', 'pageTitle'));
    }

    public function declinedOrderList()
    {
        $pageTitle = 'Declined Order';
        $orders = ProductOrder::with('user', 'productOrderDetails')->where('status', 3)->latest()->get();
        return view('Admin.modules.product_order.index', compact('orders', 'pageTitle'));
    }

    public function completedOrderList()
    {
        $pageTitle = 'Completed Order';
        $orders = ProductOrder::with('user', 'productOrderDetails')->where('status', 4)->latest()->get();
        return view('Admin.modules.product_order.index', compact('orders', 'pageTitle'));
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $order = ProductOrder::findOrFail($id);

        $status = $request->status;

        if ($status == 2) {
            $order->status = 2;
            $order->save();
            toastr()->success('Ordered Accepted');
        } elseif ($status == 3) {
            $order->status = 3;
            $order->save();
            toastr()->success('Ordered Declined');
        } elseif ($status == 4) {
            $order->status = 4;
            $order->save();
            toastr()->success('Ordered Declined');
        }

        return redirect()->back();
    }
}
