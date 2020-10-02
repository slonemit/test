<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    protected $guarded = [];

    public function message(){
        return $this->belongsTo('App\Models\Message');
    }
}
