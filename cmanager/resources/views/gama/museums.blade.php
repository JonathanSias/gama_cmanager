@extends('gama.master.layout')

@section('content')
    <div id="main" class="conteudo">
        <div class="row">
            <div class="col-md-10">
                <h1>Museus UFPel</h1>
            </div>
            <div class="col-md-2">
                <a href="{{ url('addmuseu')}}"> <button class="btn-submit" type="submit">Cadastrar Museu</button> </a>
            </div>
        </div>
        <hr>
        <br>
        <div class="row">
            @foreach ($museums as $key => $museu)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem; margin-bottom: 15%;">
                        <img class="card-img-top" src="../_imagens/286x180.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $museu->nome }}</h5>
                            <div class="row">
                                <div class="col">
                                    <form action="{{ url('museus') }}" method="POST">
                                        <a class="btn btn-submit" href="{{ url('museus.show', $museu->id) }}">Visitar</a>
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5%;">
                                <div class="col">
                                    <form action="{{ url('museus') }}" method="POST">
                                        <a class="btn btn-submit" href="{{ url('museus.edit', $museu->id) }}">Editar</a>
                                        @csrf
                                    </form>
                                </div>
                                <div class="col">
                                    <form action="{{ url('museus') }}" method="POST">
                                        <a class="btn btn-submit" href="{{ url('', $museu->id) }}">Remover</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection