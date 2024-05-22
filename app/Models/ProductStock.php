<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{
    use HasFactory;
    public static $data,$image,$imageName,$directory,$imageUrl;
    public static function store_product_stock($request)
    {
        self::$data = new ProductStock();
        self::$data->item_id = $request->item_id;
        self::$data->qty = $request->qty;
        self::$data->purchase_price = $request->purchase_price;
        self::$data->selling_price = $request->selling_price;
        self::$data->save();
    }
    public static function update_product_stock($request)
    {
        self::$data = ProductStock::find($request->id);
        self::$data->item_id = $request->item_id;
        self::$data->qty = $request->qty;
        self::$data->purchase_price = $request->purchase_price;
        self::$data->selling_price = $request->selling_price;
        self::$data->save();
    }
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
