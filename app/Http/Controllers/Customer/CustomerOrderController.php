<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Jobs\SendAddTimeMail;
use App\Mail\AddTimeMail;
use App\Mail\ServiceCompleteMail;
use App\Models\AddedTime;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\ProductOrder;
use App\Models\ProductOrderDetail;
use App\Models\Review;
use App\Models\Service;
use App\Models\User;
use App\Models\WebsiteInfo;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CustomerOrderController extends Controller
{
    public function orderList()
    {
        $orders = Order::with('user', 'service')
            ->where('user_id', auth()->user()->id)
            ->get();
        return view('Customer.modules.order.index', compact('orders'));
    }

    public function productOrderList()
    {
        $orders = ProductOrder::with('user', 'productOrderDetails')
            ->where('user_id', auth()->user()->id)
            ->latest()
            ->get();
        return view('Customer.modules.product_order.index', compact('orders'));
    }

    public function bookOrder($id)
    {
        $service = Service::find($id);
        $product = Product::with(['offer' => function ($query) {
            $today = Carbon::today();
            $query->whereDate('start_date', '<=', $today)
                ->whereDate('valid_till', '>=', $today);
        }])->find($id);


        if (isset($service->id)) {
            return view('Frontend.modules.order.book_order', compact('service'));
        } else {
            return view('Frontend.modules.order.book_order', compact('product'));
        }
    }

    public function authOrder(Request $request)
    {

        if (@$request->service_id) {
            $url = 'book2';
            $book_id = $request->service_id;
        } else {
            $url = 'book1';
            $book_id = $request->product_id;
        }

        return view('auth.login', compact('url', 'book_id'));
    }

    public function storeOrder(Request $request)
    {
        dd($request->all());
        $authId = Auth::user()->id;
        $user = User::find($authId);
        if ($request->phone) {
            $user->update([
                'phone' => $request->phone,
                'address' => $request->address,
            ]);
        }

        if ($request->order_type == 'service') {
            Order::create([
                'user_id' => Auth::user()->id,
                'service_id' => $request->service_id,
                'status' => 1,
                'service_time' => $request->service_time,
                'charge_type' => $request->charge_type,
            ]);
            toastr()->success('Service Ordered Successfully');
            return redirect()->route('customer.orderList');
        }
        if ($request->order_type == 'product' && isset($request->products) && is_array($request->products)) {

            $productOrder = ProductOrder::create([
                'user_id' => Auth::user()->id,
                'status' => 1,
                'subtotal' => $request->subtotal,
                'total' => $request->total,
                'coupon_discount' => $request->coupon,
            ]);

            foreach ($request->products as $productId => $productDetails) {
                ProductOrderDetail::create([
                    'product_order_id' => $productOrder->id,
                    'product_id' => $productId,
                    'qty' => $productDetails['qty'],
                    'price' => $productDetails['price'],
                ]);
            }

            Cart::destroy();

            toastr()->success('Product Ordered Successfully');
            return redirect()->route('customer.productOrderList');
        }
    }

    public function addTime(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'status' => 1,
        ]);

        AddedTime::create([
            'order_id' => $request->id,
            'added_service_time' => $request->added_service_time,
            'added_charge_type' => $request->added_charge_type,
        ]);

        $webinfo = WebsiteInfo::first();
        $AdminEmail = $webinfo->email;
        SendAddTimeMail::dispatch($AdminEmail, $order);
        toastr()->success('Service Ordered Successfully');
        return back();
    }

    // public function destroy($id)
    // {
    //     $order = Order::find($id);

    //     $order->delete();
    //     toastr()->success('Order Deleted Successfully');
    //     return redirect()->back();
    // }

    public function customerPayment(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $order->payment_status = 1;
        $order->save();

        $payment = new Payment();
        $payment->order_id = $order->id;
        $payment->amount = $order->service_time * $order->service->service_charge;
        $payment->save();

        toastr()->success('Payment Completed Successfully');
        return back();
    }
}
