<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrderDetail extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function productOrder(){
        return $this->belongsTo(ProductOrder::class);
    }
    
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
