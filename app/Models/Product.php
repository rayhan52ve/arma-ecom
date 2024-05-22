<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product_category(){
        return $this->belongsTo(ProductCategory::class);
    }

    public function product_sub_category(){
        return $this->belongsTo(ProductSubCategory::class);
    }

    public function product_galleries(){
        return $this->hasMany(ProductGallery::class);
    }

    public function offer(){
        return $this->belongsTo(Offer::class, 'offer_id');
    }


    public function reviews(){
        return $this->hasMany(Review::class);
    }

}
