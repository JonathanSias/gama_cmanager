<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peca;

class PecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pecas = Peca::latest()->paginate(5);
        return view('gama.parts', compact('pecas'))->with('i', (request()->input('page', 1) - 1) *  5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gama.addpeca');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peca = new Peca;
        $peca->nome                 = $request->get('nome');
        $peca->instituicao          = $request->get('instituicao');
        $peca->numeroinventario     = $request->get('numeroinventario');
        $peca->outrosnumeros        = $request->get('outrosnumeros');
        $peca->data                 = $request->get('data');
        $peca->epoca                = $request->get('epoca');
        // $peca->colecao              = $request->get('colecao');
        $peca->titulo               = $request->get('titulo');
        $peca->material             = $request->get('material');
        $peca->tecnica              = $request->get('tecnica');
        $peca->autoria              = $request->get('autoria');
        $peca->altura               = $request->get('altura');
        $peca->largura              = $request->get('largura');
        $peca->comprimento          = $request->get('comprimento');
        $peca->procedencia          = $request->get('procedencia');
        $peca->doador               = $request->get('doador');
        $peca->localdeproducao      = $request->get('localdeproducao');
        $peca->descricao            = $request->get('descricao');
        $peca->estadodeconservacao  = $request->get('estadodeconservacao');
        $peca->circulacaocondicao   = $request->get('circulacaocondicao');
        $peca->localizacao          = $request->get('localizacao');
        $peca->situacao             = $request->get('situacao');
        $peca->inscricao            = $request->get('inscricao');
        $peca->referencianoacervo   = $request->get('referencianoacervo');
        $peca->classificacao        = $request->get('classificacao');
        $peca->observacoes          = $request->get('observacoes');
        $peca->recebidopor          = $request->get('recebidopor');
        $peca->preenchidopor        = $request->get('preenchidopor');
        $peca->datadepreenchimento  = $request->get('datadepreenchimento');
        $peca->revisadopor          = $request->get('revisadopor');
        $peca->dataderevisao        = $request->get('dataderevisao');
        $peca->save();
        return redirect('pecas')->with('success', 'Peça adicionada com sucesso !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('gama.pecas.show', ['pecas' => Peca::findOrFail($id)]);
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
