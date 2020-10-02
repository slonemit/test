<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipeSalon extends Model
{
    protected $guarded = [];

    public function salon(){
        return $this->belongsTo('App\Models\Salon');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
