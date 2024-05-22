<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function product_sub_categories(){
        return $this->hasMany(ProductSubCategory::class,'product_category_id');
    }
}
