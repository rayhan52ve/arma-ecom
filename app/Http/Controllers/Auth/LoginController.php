<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']])) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.home');
            } elseif (auth()->user()->role == 'customer') {
                if ($request->url == 'book2') {
                    $service = Service::find($request->book_id);
                    return redirect()->route('customer.bookOrder', [$service, '#confirmOrder']);
                }elseif ($request->url == 'book1') {
                    $product = Product::find($request->book_id);
                    return redirect()->route('customer.bookOrder',[$product,'#returnTocart']);
                }else {
                    return redirect()->route('customer.home');
                }
            } elseif (auth()->user()->role == 'employee') {
                return redirect()->route('serviceProvider.home');
            }
        } else {
            return redirect()
                ->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
    }
}
