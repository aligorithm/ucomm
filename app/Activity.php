<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'name','type','course_id','description'
    ];
    protected $dates = ['time'];

    public function attachments(){
        return $this->morphMany('App\Attachment','attachto');
    }
    public function addAttachment($name,$url)
    {
        return $this->attachments()->create(compact('name','url'));
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
