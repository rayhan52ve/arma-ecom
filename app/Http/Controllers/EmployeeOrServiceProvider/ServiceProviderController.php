<?php

namespace App\Http\Controllers\EmployeeOrServiceProvider;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ProductOrder;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function index()
    {
        $order = Order::where('employee_id',auth()->user()->id)->get();
        $productOrder = ProductOrder::all();
        return view('Service_Provider.modules.index',compact('order','productOrder'));
    }
}
