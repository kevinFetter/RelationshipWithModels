<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
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
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */

     //a injeção de dependencia Address já faz o bind dos parametros e devolver o modelo pronto
    public function show(Address $address)
    {
        if($address) 
        {
            echo "<h1>Endereço Completo</h1>";  
            echo "<p><em>Endereço: {$address->street}, {$address->number}, {$address->city}/{$address->state}</em></p>";
        } 

        $user = $address->user()->first();

        if($user)
        {
            echo "<h1>Dados do Usuários</h1>";  
            echo "<p><strong>Nome:</strong>  {$user->name} </p>";
            echo "<p><strong>Email:</strong> {$user->email} </p>";
        }   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
    }
}
