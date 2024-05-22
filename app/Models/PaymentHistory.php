<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    use HasFactory;
    public static $data,$image,$imageName,$directory,$imageUrl;
    public static function store_payment($request)
    {
        self::$data = new PaymentHistory();
        self::$data->crm_id = $request->crm_id;
        self::$data->month_id = $request->month_id;
        self::$data->paid_amount = $request->paid_amount;

//        self::$data->attendance = $request->attendance;
        self::$data->salary = $request->salary;
//        self::$data->attendance_amount = $request->attendance_amount;
        self::$data->total_salary = $request->total_salary;
//        self::$data->total_payable = ($request->total_salary) - ($request->paid_amount);

        self::$data->date = $request->date;
        self::$data->note = $request->note;
        self::$data->save();
    }
//    public static function update_crm($request)
//    {
//        self::$data = CRM::find($request->id);
//        self::$data->name = $request->name;
//        self::$data->email = $request->email;
//        self::$data->address = $request->address;
//        self::$data->phone = $request->phone;
//        if ($request->password){
//
//            self::$data->password= Hash::make($request->password);
//        }
//        self::$data->roll_id = $request->roll_id;
//        self::$data->save();
//    }
}
