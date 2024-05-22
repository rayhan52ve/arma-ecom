<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use App\Models\ExpenseType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expense_type = ExpenseType::all();
        $expenses = Expense::with('expensetype')->get();
        return view('Admin.modules.expense.index', compact('expenses', 'expense_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expense_types = ExpenseType::all();
        return view('Admin.modules.expense.create', compact('expense_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'expense_type_id' => 'required|exists:expense_types,id',
            'expense_amount' => 'required',
            'voucher' => 'nullable',
            'comment' => 'nullable',
            'date' => 'nullable',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/expense/';
            $file->move(public_path($path), $filename);
            $validatedData['image'] = $filename;
        }

        Expense::create($validatedData);
        toastr()->success('Expense Added Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expense_types = ExpenseType::all();
        $expense = Expense::find($id);
        return view('Admin.modules.expense.edit', compact('expense', 'expense_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        $validatedData = $request->validate([
            'expense_type_id' => 'required|exists:expense_types,id',
            'expense_amount' => 'required',
            'voucher' => 'nullable',
            'comment' => 'nullable',
            'date' => 'nullable',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('image')) {
            $destination = 'uploads/expense/' . $expense->image;

            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/expense/';
            $file->move(public_path($path), $filename);
            $validatedData['image'] = $filename;
        }

        $expense->update($validatedData);
        toastr()->success('Expense Updated Successfully');
        return redirect()->route('admin.expense.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expense = Expense::find($id);

        $destination = 'uploads/expense/' . $expense->image;

        if (File::exists($destination)) {
            File::delete($destination);
        }

        $expense->delete();
        toastr()->success('Expense Deleted Successfully');
        return redirect()->back();
    }
}
