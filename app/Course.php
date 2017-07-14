<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'lecturer_id','title','code','time','department','units'
    ];
    public function lecturer(){
        return $this->belongsTo(Lecturer::class);
    }
    public function activities(){
        return $this->hasMany(Activity::class);
    }

    public function addActivity($name,$type,$description)
    {
        return $this->activities()->create(compact('name','type','description'));
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
