<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listas = Lista::all();
        return view('lista.index', compact('listas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lista = new Lista();
        $lista->Filme = $request->nome;
        $lista->Ano = $request->ano;
        $lista->Genero = $request->genero;

        $lista->save();

        return redirect('/listas');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ator  $ator
     * @return \Illuminate\Http\Response
     */
    public function show(Lista $lista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ator  $ator
     * @return \Illuminate\Http\Response
     */
    public function edit(Lista $lista)
    {
        //busca no banco o ator
        
        return view('listas.edit', compact('lista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ator  $ator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lista $lista)
    {
        $lista->Filme = $request->nome;
        $atore->Ano = $request->ano;
        $lista->Genero = $request->genero;

        $lista->save();

        return redirect('/listas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ator  $ator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lista $lista)
    {
        $lista->delete();
        return redirect('/listas');
        
    }
}

}
