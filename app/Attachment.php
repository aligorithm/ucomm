<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable = ['name','activity_id','url'];

    public function attachto()
    {
        $this->morphTo();
    }
}
