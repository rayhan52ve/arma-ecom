<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function service_category(){
        return $this->belongsTo(ServiceCategory::class);
    }

    public function services(){
        return $this->hasMany(Service::class,'service_sub_category_id');
    }
}
