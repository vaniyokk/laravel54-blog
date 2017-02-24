<?php

namespace App;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
        Comment::create([
            'body' => $body,
            'user_id' => auth()->user()->id,
            'post_id' => $this->id
        ]);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
   
}
