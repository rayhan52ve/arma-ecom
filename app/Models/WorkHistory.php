<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkHistory extends Model
{
    use HasFactory;
    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function store_work_history($request)
    {
        self::$data = new WorkHistory();
        self::$data->employe_id = $request->crm_id;
        self::$data->item_id = $request->item_id;
        self::$data->qty = $request->qty;
        self::$data->date = $request->date;
        self::$data->save();
    }
    public static function update_work_history($request)
    {
        self::$data = WorkHistory::find($request->id);
        self::$data->employe_id = $request->crm_id;
        self::$data->item_id = $request->item_id;
        self::$data->qty = $request->qty;
        self::$data->date = $request->date;
        self::$data->save();
    }
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
//    public function crm()
//    {
//        return $this->belongsTo(CRM::class);
//    }
    public function employe()
    {
        return $this->belongsTo(Employee::class);
    }
}
