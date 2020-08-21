<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colecao;

class ColecaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Colecao::latest()->paginate(5);
        return view('gama.collections', compact('collections'))->with('i', (request()->input('page', 1) - 1) *  5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $colecoes = Colecao::lists(['id', 'nome']);
        return view('gama.addcollection');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'numero' => 'required',
            'instituicao' => 'required',
            'localizacao' => 'required'
        ]);
        $colecao = new Colecao;
        $colecao->nome          = $request->get('nome');
        $colecao->dimensao      = $request->get('dimensao');
        $colecao->numero        = $request->get('numero');
        $colecao->instituicao   = $request->get('instituicao');
        $colecao->tuteladireta  = $request->get('tuteladireta');
        $colecao->localizacao   = $request->get('localizacao');
        $colecao->descricao     = $request->get('descricao');
        $colecao->relevancia    = $request->get('relevancia');
        $colecao->utilizacao    = $request->get('utilizacao');
        // $colecao->conservacao   = $request->get('conservacao');
        $colecao->observacoes   = $request->get('observacoes');
        $colecao->bibliografia  = $request->get('bibliografia');
        $colecao->save();
        return redirect('colecoes')->with('success', 'Coleção adicionada com sucesso !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('gama.colecoes.show', ['collections' => Colecao::findOrFail($id)]);
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
