<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $guarded = [];

    public function annonce(){
        return $this->belongsTo('App\Models\Annonce');
    }

    public function typecomment(){
        return $this->belongsTo('App\Models\TypeComment');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
