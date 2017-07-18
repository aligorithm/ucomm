<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','matric_number','faculty_id','university_id','bio','profile_pic','cover_pic','level','slug'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }
    public function university(){
        return $this->belongsTo(University::class);
    }
}
