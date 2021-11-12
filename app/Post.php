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

}
