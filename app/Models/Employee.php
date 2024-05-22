<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public static $data,$image,$imageName,$directory,$imageUrl;
    public static function store_employe($request)
    {
        self::$data = new Employee();
        self::$data->name = $request->name;
        self::$data->address = $request->address;
        self::$data->phone = $request->phone;
        self::$data->employe_type = $request->employe_type;
        self::$data->fixed_salary = $request->fixed_salary;
        self::$data->save();
    }
    public static function update_employe($request)
    {
        self::$data = Employee::find($request->id);
        self::$data->name = $request->name;
        self::$data->address = $request->address;
        self::$data->phone = $request->phone;
        self::$data->employe_type = $request->employe_type;
        self::$data->fixed_salary = $request->fixed_salary;
        self::$data->save();
    }
    public function work_history()
    {
        return $this->hasMany(WorkHistory::class,'crm_id','id');
    }
}
