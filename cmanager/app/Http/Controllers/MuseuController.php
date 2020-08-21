<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Museu;

class MuseuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $museums = Museu::latest()->paginate(5);
        return view('gama.museums', compact('museums'))->with('i', (request()->input('page', 1) - 1) *  5);
        // return view('gama.museums');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gama.addmuseu');
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
            'codigoMuseu' => 'required',
            // 'instituicao' => 'required',
            // 'localizacao' => 'required'
        ]);
        $museu = new Museu;
        $museu->nome        = $request->get('nome');
        $museu->endereco    = $request->get('endereco');
        $museu->bairro      = $request->get('bairro');
        $museu->cep         = $request->get('cep');
        $museu->codigoMuseu = $request->get('codigoMuseu');
        $museu->telefone    = $request->get('telefone');
        $museu->email       = $request->get('email');
        $museu->horarios    = $request->get('horarios');
        $museu->descricao   = $request->get('descricao');
        $museu->save();
        return redirect('museus')->with('success', 'Museu adicionado com sucesso !');
        
        // $museu = new Museu;
        // $museu->nome        = $request->nome;
        // $museu->endereco    = $request->endereco;
        // $museu->descricao   = $request->descricao;
        // $museu->codigoMuseu = $request->codigoMuseu;
        // $museu->save();
        // return redirect()->route('museus')->with('message', 'Novo museu cadastrado com sucesso !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('gama.museus.show', ['museums' => Museu::findOrFail($id)]);
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
        // $museu = Museu::findOrFail($id);
        // $museu->delete();
        // return redirect()->route('museus')->with('alert-success', 'Museu removido com sucesso !');
    }
}
