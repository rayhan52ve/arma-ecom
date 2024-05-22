<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function employee()
    {
        return $this->belongsTo(User::class)->where('role', 'employee');
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }


    public function payroll(){
        return $this->hasOne(Payroll::class, 'order_id');
    }


    public function payment(){
        return $this->hasOne(Payment::class, 'order_id');
    }

    public function addedtime(){
        return $this->hasOne(AddedTime::class, 'order_id');
    }
    
}
