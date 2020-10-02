<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function fichier(){
        return $this->belongsTo('App\Models\Fichier');
    }
}
