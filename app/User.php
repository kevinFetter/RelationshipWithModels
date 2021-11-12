<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //fazer o relacionamento entre as models
    //criar meu método address que será chamado na controller User
    public function address()
    {
        //dentro desse elemento ele terá apenas um, preciso passar qual modelo vou me relacionar 
        //e as 2 chaves que vai unir esses 2 modelos
        // pegar do namespace app (Adrress::) e passar as 2 cahves
        // foreignkey e localkey // coluna 'user' da tabela addresses
        return $this->hasOne(Address::class,'user', 'id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'user', 'id');
    }
}
