<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnProductHistory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function customer(){
        return $this->belongsTo(User::class, 'customer_id','id');
    }

    public function employee(){
        return $this->belongsTo(User::class, 'employee_id','id');
    }
}
