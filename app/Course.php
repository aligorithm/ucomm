<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'user_id','title','code','time','department'
    ];
    public function lecturer(){
        return $this->belongsTo(Lecturer::class);
    }
    public function activities(){
        return $this->hasMany(Activity::class);
    }
    public function students(){
        return $this->hasMany(User::class);
    }
}
