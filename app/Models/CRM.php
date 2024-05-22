<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hash;

class CRM extends Model
{
    use HasFactory;
    public static $data,$image,$imageName,$directory,$imageUrl;
    public static function store_crm($request)
    {
        self::$data = new CRM();
        self::$data->name = $request->name;
        self::$data->email = $request->email;
        self::$data->address = $request->address;
        self::$data->phone = $request->phone;
        if ($request->password){

            self::$data->password= Hash::make($request->password);
        }
        self::$data->roll_id = $request->roll_id;
        self::$data->save();
    }
    public static function update_crm($request)
    {
        self::$data = CRM::find($request->id);
        self::$data->name = $request->name;
        self::$data->email = $request->email;
        self::$data->address = $request->address;
        self::$data->phone = $request->phone;
        if ($request->password){

            self::$data->password= Hash::make($request->password);
        }
        self::$data->roll_id = $request->roll_id;
        self::$data->save();
    }
    public function roll()
    {
        return $this->belongsTo(Roll::class);
    }
    public function work_history()
    {
        return $this->hasMany(WorkHistory::class,'crm_id','id');
    }

}
