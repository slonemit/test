<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    protected $guarded = [];

    public function compte(){
        return $this->belongsTo('App\Models\Compte');
    }
    public function grille(){
        return $this->belongsTo('App\Models\grille');
    }
}
