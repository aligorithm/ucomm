<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function posts(){
        $this->hasMany(Post::class);
    }
}
