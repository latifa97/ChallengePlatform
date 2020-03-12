<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    public function participation(){
        return $this->belongsTo('App\Participation');
    }
}
