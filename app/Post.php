<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['body','topic_id','user_id','scope_type','scope_id'];

    public function scope()
    {
        $this->morphTo();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function topic(){
        return $this->belongsTo(Topic::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment(User $user, $body)
    {
        return $this->comments()->create(['user_id' => $user->id, 'body' => $body]);
    }
    public function attachments(){
        return $this->morphMany('App\Attachment','attachto');
    }
    public function owner(){
        return ($this->user_id == auth()->user()->id);
    }

    public function likes(){
        return $this->morphMany('App\Like','liked');
    }
    public function like(User $user){
        return $this->likes()->create(['user_id' => $user->id]);
    }
}
