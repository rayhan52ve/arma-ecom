<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    public static $data,$image,$imageName,$directory,$imageUrl;
    public static function store_attendance($request)
    {
        self::$data = new Attendance();
        self::$data->employe_id = $request->crm_id;
        self::$data->attendance_date = $request->attendance_date;
        self::$data->save();
    }
    public static function update_attendance($request)
    {
        self::$data = Attendance::find($request->id);
        self::$data->employe_id = $request->crm_id;
        self::$data->attendance_date = $request->attendance_date;
        self::$data->save();
    }
    public function employe()
    {
        return $this->belongsTo(Employee::class);
    }
}
