<?php

namespace App\Http\Controllers;

use App\Models\ExpenseType;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Payroll;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductOrder;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tech_web_index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tech_web_adminHome()
    {
        $user = User::all();
        $service = Service::all();
        $serviceCategory = ServiceCategory::all();
        $product = Product::all();
        $productCategory = ProductCategory::all();
        $order = Order::all();
        $productOrder = ProductOrder::all();
        $expenseType = ExpenseType::all();

        $totalPayment = Payment::sum('amount');
        $totalPayroll = Payroll::sum('payroll');
        $balance = $totalPayment -  $totalPayroll;

        return view('super_admin.home.index',compact('balance','user','service','serviceCategory','product','productCategory','order','productOrder','expenseType'));
    }

    public function tech_web_employeeHome(){
        return view('employee.employee.index');
    }

    public function tech_web_logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
