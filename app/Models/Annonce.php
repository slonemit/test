<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function fichier(){
        return $this->belongsTo('App\Models\Fichier');
    }
    public function comments(){
        return $this->hasMany('App\Models\Commentaire');
    }
    public function category(){
        return $this->belongsTo('App\Models\CategAnnonce');
    }
}
