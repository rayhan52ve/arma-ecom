<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roll extends Model
{
    use HasFactory;
    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function store_roll($request)
    {
        self::$data = new Roll();
        self::$data->name = $request->name;
        self::$data->save();
    }

    public static function update_roll($request)
    {
        self::$data = Roll::find($request->id);
        self::$data->name = $request->name;
        self::$data->save();
    }
}
