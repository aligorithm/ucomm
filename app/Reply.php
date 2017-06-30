<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = ['user_id','comment_id','body' ];

    public function comment(){
        $this->belongsTo(Comment::class);
    }
    public function likes(){
        return $this->morphMany('App\Like','liked');
    }
    public function like(User $user){
        return $this->likes()->create(['user_id' => $user->id]);
    }
}
