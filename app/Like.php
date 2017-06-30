<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['liked_type','liked_id','post_id'];
    public function liked()
    {
        $this->morphTo();
    }
}
