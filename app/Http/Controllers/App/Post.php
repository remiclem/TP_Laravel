<?php

namespace App;
use App\Post;
use App\Comment;


class Post extends Model
{

    Public function comments()
    {
        return $this->hasMany(comment::class);
    }


    public function addComment($body)
    {
        Comment::create([

            'body' => $body,
            'post_id' => $this->id
        ]);
    }

}