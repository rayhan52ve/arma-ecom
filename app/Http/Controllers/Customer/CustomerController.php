<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ProductOrder;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $order = Order::where('user_id',auth()->user()->id)->get();
        $productOrder = ProductOrder::where('user_id',auth()->user()->id)->get();
        return view('Customer.modules.index',compact('order','productOrder'));
    }
}
