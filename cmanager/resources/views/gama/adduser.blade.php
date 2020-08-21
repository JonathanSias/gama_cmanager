@extends('gama.master.layout')

@section('content')
    <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU</span> -->
    <div id="main" class="conteudo">
        <!--  -->
        <h2>Cadastrar Usuário</h2>
        <div class="fomr-group">
            <form name="caduser" method="post" action="{{ route('usuarios.store') }}">
                @csrf
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" style="width: 50%" placeholder="Digite o nome do usuário">

                <label for="sobrenome" style="margin-top: 2%">Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" id="sobrenome" style="width: 50%" placeholder="Digite o sobrenome do usuário">

                <label for="cpf" style="margin-top: 2%">CPF</label>
                <input type="text" name="cpf" class="form-control" id="cpf" style="width: 50%" placeholder="Digite o cpf do usuário">

                <label for="email" style="margin-top: 2%">Email</label>
                <input type="text" name="email" class="form-control" id="email" style="width: 50%" placeholder="Informe o e-mail">

                <label for="senha" style="margin-top: 2%">Senha</label>
                <input type="password" name="password" class="form-control" id="senha" style="width: 50%" placeholder="Digite uma senha">

                {{-- ACESSO --}}

                <input type="submit" class="btn btn-default btn-mod" value="Cadastrar" style="margin-top: 2%">
            </form>
        </div>
        {{-- <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" style="width: 50%" placeholder="Digite o nome do usuário">
        </div>
    
        <div class="form-group">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control" id="sobrenome" style="width: 50%" placeholder="Digite o sobrenome do usuário">
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" style="width: 50%" placeholder="Digite o cpf do usuário">
        </div>
    
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" style="width: 50%" placeholder="Informe o e-mail">
        </div>
    
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" style="width: 50%" placeholder="Digite uma senha">
        </div>

        <div class="form-group">
            <label for="acesso">Acesso</label>
            <select class="form-control" style="width: 50%" id="acesso" name="acesso">
                <option value="admin">Admin</option>
                <option value="diretor">Diretor</option>
                <option value="tecnico">Técnico</option>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Cadastrar</button> --}}
    </div>
@endsection