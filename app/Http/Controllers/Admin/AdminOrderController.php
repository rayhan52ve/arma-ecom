<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function pendingOrderList()
    {
        $pageTitle = 'Pending Order';
        $employees = User::where('role','employee')->get();
        $orders = Order::with('user', 'service','employee')->where('product_id',null)->where('status',1)->latest()->get();
        return view('Admin.modules.order.index', compact('orders','employees','pageTitle'));
    }

    public function acceptedOrderList()
    {
        $pageTitle = 'Running Order';
        $employees = User::where('role','employee')->get();
        $orders = Order::with('user', 'service','employee')->where('product_id',null)->where('status',2)->latest()->get();
        return view('Admin.modules.order.index', compact('orders','employees','pageTitle'));
    }

    public function declinedOrderList()
    {
        $pageTitle = 'Declined Order';
        $employees = User::where('role','employee')->get();
        $orders = Order::with('user', 'service','employee')->where('product_id',null)->where('status',3)->latest()->get();
        return view('Admin.modules.order.index', compact('orders','employees','pageTitle'));
    }

    public function completedOrderList()
    {
        $pageTitle = 'Completed Order';
        $employees = User::where('role','employee')->get();
        $orders = Order::with('user', 'service','employee')->where('product_id',null)->where('status',4)->latest()->get();
        return view('Admin.modules.order.index', compact('orders','employees','pageTitle'));
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $status = $request->status;

        if ($status == 2) {
            $order->status = 2;
            $order->employee_id = $request->employee_id;
            $order->save();
            toastr()->success('Ordered Accepted');
        } elseif ($status == 3) {
            $order->status = 3;
            $order->employee_id = null;
            $order->save();
            toastr()->success('Ordered Declined');
        }

        return redirect()->back();
    }
}
