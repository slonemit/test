<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rdvmotif extends Model
{
    protected $guarded = [];

    public function rdv(){
        return $this->belongsTo('App\Models\Rdv');
    }
}
