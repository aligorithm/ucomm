<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id','post_id','body' ];

    public function attachments(){
        return $this->morphMany('App\Attachment','attachto');
    }
    public function addAttachment($name,$url)
    {
        return $this->attachments()->create(compact('name','url'));
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function addReply($name,$email,$body)
    {
        return $this->replies()->create(compact('name','email','body'));
    }
    public function likes(){
        return $this->morphMany('App\Like','liked');
    }
    public function like(User $user){
        return $this->likes()->create(['user_id' => $user->id]);
    }
}
