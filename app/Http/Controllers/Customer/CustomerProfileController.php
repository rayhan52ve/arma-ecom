<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CustomerProfileController extends Controller
{
    public function profile()
    {
        return view('Customer.modules.profile');
    }


    public function profile_update(Request $request, string $id)
    {
        if ($request->isMethod('PUT')) {
            $user = User::find($id);

            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->update();

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
        }

        toastr()->success('Profile Updated Successfully');
        return redirect()->back();
    }
}
