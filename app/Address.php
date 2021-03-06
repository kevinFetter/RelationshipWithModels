<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //parametriznado o Model
    protected $table = "addresses";

    public function user()
    {
        return $this->belongsTo(User::class, 'user','id');
    }

}
