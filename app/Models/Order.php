<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function floor(){
        return $this->belongsTo('App\Models\Floor');
    }
    public function room(){
        return $this->belongsTo('App\Models\room');
    }
}
