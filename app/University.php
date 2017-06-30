<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    public function posts(){
        return $this->morphMany('App\Post','scope');
    }
}
