<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //como estou passando só um método, vou pegar só pelo primeiro ID
        $user = User::where('id', $id)->first();

        if($user)
        {
            echo "<h1>Dados do Usuários</h1>";  
            echo "<p><strong>Nome:</strong>  {$user->name} </p>";
            echo "<p><strong>Email:</strong> {$user->email} </p>";
        }     

        //passar o método address que vai estar devolvendo o objeto
        //pode devolver uma coleção ou um elemento com o firs()
        $address = $user->address()->first();

        if($address) 
        {
            echo "<h1>Endereço Completo</h1>";  
            echo "<p><em>Endereço: {$address->street}, {$address->number}, {$address->city}/{$address->state}</em></p>";
        }

        $posts = $user->posts()->get();
      
        if($posts)
        {
                echo "<h1>Artigo</h1>";  
            foreach($posts as $post)  
            {
                echo "<p>Titulo: {$post->title}</p>";
                echo "<p>#{$post->id} Conteúdo: {$post->content}</p>";
            }
        }

    


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
