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
        return $this->belongsTo('App\Models\Grille');
    }
    public function produits(){
        return $this->hasMany('App\Models\Produit');
    }
    public function personne(){
        return $this->hasMany('App\Models\Personne');
    }
}
