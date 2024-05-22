<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function adminLogin(Request $request){

        if(Auth::guard('admin')->check()){
            return redirect()->route('admin.home');
        }else{
            if($request->isMethod('post')){
                $data = $request->input();
                 if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {

                    return redirect()->route('admin.home');
                }else{
                    //echo "failed"; die;
                    return redirect()->back()->with('error', 'Email-Address And Password Are Wrong.');
                }
            }
        }

        return view('Admin.auth.login');
    }

        public function logout(){
        Auth::guard('admin')->logout();
    	return redirect()->route('login');
    }
}
