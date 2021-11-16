<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    public function post() 
    {
        return $this->belongsToMany(Post::class, 'posts_categories', 'category', 'post');
    }

}

 