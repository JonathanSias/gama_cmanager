@extends('gama.master.layout')

@section('content')
    <div id="main" class="conteudo">
        <div class="row">
            <div class="col-md-10">
                <h1>Coleções</h1>
            </div>
            <div class="col-md-2">
                <a href="{{ url('addcolecao')}}"> <button class="btn-submit" type="submit">Cadastrar Coleção</button> </a>
            </div>
        </div>
        <div class="row">
            <!-- BUSCAR COLEÇAO -->
            <div class="input-group col-md-8">
                <input type="text" class="form-control" placeholder="buscar coleção..." aria-label="buscar" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" style="">Buscar</button>
                </div>
            </div>
            <div class="col-md-2">
                <!--  -->
            </div>
        </div>
        <!-- linha divisória -->
        <!-- <hr> -->
        <!-- quebra de linha -->
        <br>
        <div class="">
            <table class="table">
                <thead class="thead table-head">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Instituição</th>
                        <th scope="col">Número</th>
                        <th colspan=3>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($collections as $key => $colecao)
                        <tr>
                            <td>{{ $colecao->id }}</td>
                            <td>{{ $colecao->nome }}</td>
                            <td>{{ $colecao->instituicao }}</td>
                            <td>{{ $colecao->numero }}</td>
                            <td>
                                <form action="{{ url('colecoes') }}" method="POST">
                                    <a class="btn btn-info" href="{{ url('colecoes.show', $colecao->id) }}">Ver</a>
                                    <a class="btn btn-primary" href="{{ url('colecoes.edit', $colecao->id) }}">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection