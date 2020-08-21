@extends('gama.master.layout')

@section('content')
    <div id="main" class="conteudo">
        <div class="row">
            <div class="col-md-10">
                <h1>Usuários</h1>
            </div>
            <div class="col-md-2">
                <a href="{{ url('addusuario') }}"> <button class="btn-submit" type="submit">Cadastrar Usuário</button> </a>
            </div>
        </div>
        <div class="row">
            <!-- BUSCAR COLEÇAO -->
            <div class="input-group col-md-8">
                <input type="text" class="form-control" placeholder="buscar usuário..." aria-label="buscar" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" style="padding: 0% 15% 0% 15%;">Buscar</button>
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
                        <th scope="col">Email</th>
                        <th colspan=3>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($varuser as $key => $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->nome }} {{ $usuario->sobrenome }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>
                                <form action="{{ url('usuarios') }}" method="POST">
                                    <a class="btn btn-info" href="{{ url('usuario.show', $usuario->id) }}">Ver</a>
                                    <a class="btn btn-primary" href="{{ url('usuario.edit', $usuario->id) }}">Editar</a>
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