<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class AccountController extends Controller
{
    public function tech_web_admin_account(){
        $accounts = User::where('role','user')->paginate(10);         
        
        return view('super_admin.account.account_details',compact('accounts'));
    }

    public function tech_web_customer_serarch_bydate(Request $request){
        // dd($request);
        $date_from = Carbon::parse(str_replace(',','',$request->date_from))->format('Y-m-d');
        $date_to = Carbon::parse(str_replace(',','',$request->date_to))->format('Y-m-d');
        
       
    $accounts = User::where('role', 'user')
    ->orderBy('id', 'desc')
    ->when(
        $request->date_from && $request->date_to,
        function (Builder $builder) use ($date_from, $date_to) {
            $builder->whereBetween(
                DB::raw('DATE(updated_at)'),
                [$date_from, $date_to]
            );
        }
    )
    ->paginate(10);
        // dd($accounts);
        return view('super_admin.account.account_details',compact('accounts','request'));
    }
}
