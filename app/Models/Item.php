<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function store_item($request)
    {
        self::$data = new Item();
        self::$data->title = $request->title;
        self::$data->price = $request->price;
        self::$data->save();
    }
    public static function update_item($request)
    {
        self::$data = Item::find($request->id);
        self::$data->title = $request->title;
        self::$data->price = $request->price;
        self::$data->save();
    }
}
