<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'name','about','university_id'
    ];
    public function students(){
        return $this->hasMany(User::class);
    }
    public function university(){
        return $this->belongsTo(University::class);
    }
    public function posts(){
        return $this->morphMany('App\Post','scope');
    }
}
