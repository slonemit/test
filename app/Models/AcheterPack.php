<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcheterPack extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function pack(){
        return $this->belongsTo('App\Models\Pack');
    }

    public function personne(){
        return $this->belongsTo('App\Models\Personne');
    }
}
