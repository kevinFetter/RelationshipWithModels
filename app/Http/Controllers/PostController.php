<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
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
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        echo "<h1>Artigo</h1>";  
        echo "<h3>{$post->title}</h3>";
        echo "<p>#{$post->id} Conteúdo: {$post->content}</p>"; 

        $user = $post->author()->first();

        if($user)
        {
            echo "<h1>Autor</h1>";  
            echo "<p><strong>Nome:</strong>  {$user->name} </p>";
            echo "<p><strong>Email:</strong> {$user->email} </p>";
        }   

        $categories = $post->categories()->get();

        if($categories)
        {
            echo "<h1>Categoria</h1>";  
            foreach($categories as $category) 
            {
                echo "<p>categoria {$category->title}</p>";
                echo "<p>categoria {$category->description}</p>";
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
