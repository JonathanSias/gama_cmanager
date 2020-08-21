@extends('gama.master.layout')

@section('content')
    <div id="main" class="conteudo">
        <div class="row">
            <div class="col-md-10">
                <h1>Peças</h1>
            </div>
            <div class="col-md-2">
                <a href="{{ url('addpeca') }}"> <button class="btn-submit" type="submit">Cadastrar Peças</button> </a>
            </div>
        </div>
        <div class="row">
            <!-- BUSCAR COLEÇAO -->
            <div class="input-group col-md-8">
                <input type="text" class="form-control" placeholder="buscar peça..." aria-label="buscar" aria-describedby="button-addon2">
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
                        {{-- <th scope="col">Coleção</th> --}}
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pecas as $key => $peca)
                        <tr>
                            <td>{{ $peca->id }}</td>
                            <td>{{ $peca->nome }}</td>
                            <td>{{ $peca->instituicao }}</td>
                            {{-- <td>{{ $peca->numero }}</td> --}}
                            <td>
                                <form action="{{ url('pecas') }}" method="POST">
                                    <a class="btn btn-info" href="{{ url('pecas.show', $peca->id) }}">Ver</a>
                                    <a class="btn btn-primary" href="{{ url('pecas.edit', $peca->id) }}">Editar</a>
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