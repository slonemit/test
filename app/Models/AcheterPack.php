<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcheterPack extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function personne(){
        return $this->belongsTo('App\Models\Personne');
    }
}
