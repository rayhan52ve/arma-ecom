<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payroll;
use App\Models\User;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = 'Employee List';
        $users = User::where('role','employee')->get();
        return view('Admin.modules.payroll.index', compact('users','pageTitle'));
    }

    public function payrollHistory()
    {
        $pageTitle = 'Payroll History';
        $payrolls = Payroll::with('order','user', 'service', 'employee')->where('status', 1)->get();
        return view('Admin.modules.payroll.history', compact('payrolls', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function employeeDetail($id)
    {
       $pageTitle = 'All Orders';
       $employee = User::findOrFail($id);
       $employee->load('employeOrders');
       return view('Admin.modules.payroll.show', compact('employee', 'pageTitle'));

    }

    public function payrollStatus(Request $request, $id)
    {
        Payroll::create($request->all());

        toastr()->success('Payroll Completed');

        return redirect()->back();
    }

}
