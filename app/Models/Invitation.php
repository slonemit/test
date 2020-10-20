<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $guarded = [];

    public function structure(){
        return $this->belongsTo('App\Models\Structure');
    }

    public function salon(){
        return $this->belongsTo('App\Models\Salon');
    }
}
