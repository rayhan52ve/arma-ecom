<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoadMistri extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function team(){
        return $this->belongsTo(Team::class, 'team_id','id');
    }
}
