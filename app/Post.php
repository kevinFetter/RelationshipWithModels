<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //deixar declarativo qual tabela se trabalha 
    protected $table = "posts";

    public function author() 
    {   //caminho da volta
         return $this->belongsTo(User::class, 'user', 'id');
    }

    public function categories()
    {
        //tabela/cahve estraigeiras
        //verificar qual é a tabela pivo que se relaciona com qual tabela
        return $this->belongsToMany(Category::class, 'posts_categories', 'post', 'category');
    }

}
