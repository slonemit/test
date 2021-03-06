<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $guarded = [];

    public function structure(){
        return $this->belongsTo('App\Models\Structure');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
