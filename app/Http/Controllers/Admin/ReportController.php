<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use App\Models\ExpenseType;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Payroll;
use App\Models\ProductOrder;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function salesReport(Request $request)
    {
        $pageTitle = 'Service Sales Report';

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $ordersQuery = Order::with('user', 'service', 'employee')->where('status', 4);

        if ($startDate) {
            if ($endDate) {
                $ordersQuery->whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
            } else {
                $ordersQuery->whereDate('created_at', $startDate);
            }
        }

        $orders = $ordersQuery->latest()->get();

        return view('Admin.modules.report.sales', compact('orders', 'pageTitle'));
    }

    public function productSalesReport(Request $request)
    {
        $pageTitle = 'Product Sales Report';

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $ordersQuery = ProductOrder::with('user', 'productOrderDetails')->where('status', 4);

        if ($startDate) {
            if ($endDate) {
                $ordersQuery->whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
            } else {
                $ordersQuery->whereDate('created_at', $startDate);
            }
        }

        $orders = $ordersQuery->latest()->get();

        return view('Admin.modules.report.product_sales', compact('orders', 'pageTitle'));
    }

    public function servicePayReport(Request $request)
    {
        $pageTitle = 'Service Pay';

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $payrollsQuery = Payroll::with('order','user', 'service', 'employee')->where('status', 1);

        if ($startDate) {
            if ($endDate) {
                $payrollsQuery->whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
            } else {
                $payrollsQuery->whereDate('created_at', $startDate);
            }
        }

        $payrolls = $payrollsQuery->latest()->get();

        return view('Admin.modules.report.service_pay', compact('payrolls', 'pageTitle'));
    }

    public function expenseReport(Request $request)
    {
        $pageTitle = 'Expense Report';

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $expenseQuery = Expense::with('expensetype');

        if ($startDate) {
            if ($endDate) {
                $expenseQuery->whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59'])->orWhereBetween('date', [$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
            } else {
                $expenseQuery->whereDate('created_at', $startDate)->orWhereDate('date', $startDate);
            }
        }

        $expenses = $expenseQuery->latest()->get();

        return view('Admin.modules.report.expense', compact('expenses', 'pageTitle'));
    }

    public function serviceProfitReport(Request $request)
    {
        $pageTitle = 'Service Profit Report';

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $totalPayment = Payment::sum('amount');
        $totalPayroll = Payroll::sum('payroll');
        $serviceProfit = $totalPayment -  $totalPayroll;
        $ordersQuery = Order::with('user', 'service', 'employee','payroll','payment')->where('status', 4);

        if ($startDate) {
            if ($endDate) {
                $ordersQuery->whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59'])->orWhereBetween('updated_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
            } else {
                $ordersQuery->whereDate('created_at', $startDate)->orWhere('updated_at', $startDate);
            }
        }

        $orders = $ordersQuery->latest()->get();

        return view('Admin.modules.report.service_profit', compact('orders', 'pageTitle','serviceProfit'));
    }

}
