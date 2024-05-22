<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function productOrderDetails(){
        return $this->hasMany(ProductOrderDetail::class,'product_order_id','id');
    }
}
