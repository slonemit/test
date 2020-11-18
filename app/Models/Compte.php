<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $guarded = [];

    public function structure(){
        return $this->belongsTo('App\Models\Structure');
    }

    public function personne(){
        return $this->belongsTo('App\Models\Personne');
    }
}
