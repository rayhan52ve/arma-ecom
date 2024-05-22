<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function services(){
        return $this->hasMany(Service::class,'service_category_id');
    }

    public function serviceSubCategories(){
        return $this->hasMany(ServiceSubCategory::class,'service_category_id');
    }
}
