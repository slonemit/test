<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $guarded = [];

    public function message(){
        return $this->belongsTo('App\Models\Message');
    }
}
