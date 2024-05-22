<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = 'Customer List';
        $users = User::where('role', 'customer')->latest()->get();
        return view('Admin.modules.user.index', compact('users', 'pageTitle'));
    }

    public function employee()
    {
        $pageTitle = 'In House Employee List';
        $users = User::where('role', 'employee')->where('employee_type', 'In House')->latest()->get();
        return view('Admin.modules.user.index', compact('users', 'pageTitle'));
    }

    public function employeeOutHouse()
    {
        $pageTitle = 'Out House Employee List';
        $users = User::where('role', 'employee')->where('employee_type', 'Out House')->latest()->get();
        return view('Admin.modules.user.index', compact('users', 'pageTitle'));
    }

    public function userStatus(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($user->status == 0) {
            $user->status = 1;
            $user->save();
            toastr()->success('Employee Active');
        } elseif ($user->status == 1) {
            $user->status = 0;
            $user->save();
            toastr()->success('Employee Inactive');
        }

        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.modules.user.create');
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
            'name' => 'required|string|max:255',
            'role' => 'required',
            'employee_type' => 'nullable',
            'email' => 'required|email|unique:users|max:255',
            'phone' => 'nullable',
            'address' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:6',
        ]);

        $validatedData['password'] = bcrypt($request->input('password'));

        if ($request->role == 'employeeIn') {
            $validatedData['role'] = 'employee';
            $validatedData['employee_type'] = 'In House';
        } elseif ($request->role == 'employeeOut') {
            $validatedData['role'] = 'employee';
            $validatedData['employee_type'] = 'Out House';
        } elseif ($request->role == 'customer') {
            $validatedData['role'] = $request->role;
            $validatedData['employee_type'] = null;
        }
        $user = User::create($validatedData);

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/user/';
            $file->move(public_path($path), $filename);
            $user->userDetail()->create(['image' => $filename]);
        }

        toastr()->success('User Created Successfully');
        return redirect()->back();
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
        $user = User::find($id);
        $previoiusRoute = url()->previous();
        return view('Admin.modules.user.edit', compact('user', 'previoiusRoute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required',
            'employee_type' => 'nullable',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:6',
        ]);
        if ($request->role == 'employeeIn') {
            $validatedData['role'] = 'employee';
            $validatedData['employee_type'] = 'In House';
        } elseif ($request->role == 'employeeOut') {
            $validatedData['role'] = 'employee';
            $validatedData['employee_type'] = 'Out House';
        } else {
            $validatedData['role'] = $request->role;
            $validatedData['employee_type'] = null;
        }

        // Check if password is provided before updating
        if (!empty($validatedData['password'])) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        } else {
            // Remove the 'password' key if not provided
            unset($validatedData['password']);
        }

        $user->update($validatedData);

        // Handle file upload
        if ($request->hasFile('image')) {
            $destination = 'uploads/user/' . @$user->userDetail->image;

            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/user/';
            $file->move(public_path($path), $filename);
            if (@$user->userDetail->image) {
                $user->userDetail()->update(['image' => $filename]);
            } else {
                $user->userDetail()->create(['image' => $filename]);
            }
        }

        toastr()->success('User Updated Successfully');
        return redirect($request->previous_route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $destination = 'uploads/user/' . $user->userDetail->image;

        if (File::exists($destination)) {
            File::delete($destination);
        }
        $user->delete();
        toastr()->success('User Deleted Successfully');
        return redirect()->back();
    }
}
