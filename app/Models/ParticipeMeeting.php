<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipeMeeting extends Model
{
    protected $guarded = [];

    public function meeting(){
        return $this->belongsTo('App\Models\Meeting');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
