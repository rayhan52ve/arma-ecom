<?php

namespace App\Http\Controllers\EmployeeOrServiceProvider;

use App\Http\Controllers\Controller;
use App\Jobs\StartCountdownJob;
use App\Models\Order;
use App\Models\ProductOrder;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeOrderController extends Controller
{

    public function acceptedOrderList()
    {
        $pageTitle = 'Running Orders';
        $orders = Order::with('user', 'service', 'employee')
            ->where('employee_id', auth()->user()->id)
            ->where('status', 2)
            ->whereNull('product_id')
            ->latest()
            ->get();
        return view('Service_provider.modules.order.index', compact('orders', 'pageTitle'));
    }

    public function completedOrderList()
    {
        $pageTitle = 'Completed Orders';
        $orders = Order::with('user', 'service', 'employee')->where('employee_id', auth()->user()->id)->where('status', 4)->latest()->get();
        return view('Service_provider.modules.order.index', compact('orders', 'pageTitle'));
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        // dd($order);

        $status = $request->status;

        if ($status == 4) {
            $order->status = 4;
            $order->save();
            toastr()->success('Order Completed');
        }

        return redirect()->back();
    }
    public function orderCountdown(Request $request)
    {
        $time = $request->time;
        $time_type = $request->time_type;

        $delay = 0;

        switch ($time_type) {
            case 'Hour':
                $delay = $time * 3600; // 1 hour = 3600 seconds
                break;
            case 'Minute':
                $delay = $time * 60;   // 1 minute = 60 seconds
                break;
            case 'Day':
                $delay = $time * 86400; // 1 day = 86400 seconds
                break;
            default:
                break;
        }

        if ($delay > 0) {
            StartCountdownJob::dispatch($request->orderId)->delay(now()->addSeconds($delay));

            toastr()->success('Service Time Started');
        } else {
            toastr()->error('Invalid time type');
        }

        return redirect()->back();
    }

    // product order start

    public function pendingProductOrderList()
    {
        $pageTitle = 'Pending Order';
        $orders = ProductOrder::with('user', 'productOrderDetails')->where('status', 1)->latest()->get();
        return view('Service_Provider.modules.product_order.index', compact('orders', 'pageTitle'));
    }

    public function acceptedProductOrderList()
    {
        $pageTitle = 'Running Order';
        $orders = ProductOrder::with('user', 'productOrderDetails')->where('status', 2)->latest()->get();
        return view('Service_Provider.modules.product_order.index', compact('orders', 'pageTitle'));
    }

    public function declinedProductOrderList()
    {
        $pageTitle = 'Declined Order';
        $orders = ProductOrder::with('user', 'productOrderDetails')->where('status', 3)->latest()->get();
        return view('Service_Provider.modules.product_order.index', compact('orders', 'pageTitle'));
    }

    public function completedProductOrderList()
    {
        $pageTitle = 'Completed Order';
        $orders = ProductOrder::with('user', 'productOrderDetails')->where('status', 4)->latest()->get();
        return view('Service_Provider.modules.product_order.index', compact('orders', 'pageTitle'));
    }
}
