<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function floor(){
        return $this->belongsTo(room::class);
    }
    public function order(){
        return $this->belongsTo(Order::class,'floor_id','id');
    }
}
