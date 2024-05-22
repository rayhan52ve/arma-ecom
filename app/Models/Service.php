<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function service_category(){
        return $this->belongsTo(ServiceCategory::class);
    }
    
    public function serviceSubCategory(){
        return $this->belongsTo(ServiceSubCategory::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
