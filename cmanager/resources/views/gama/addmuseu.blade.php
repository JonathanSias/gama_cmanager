@extends('gama.master.layout')

@section('content')
    <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU</span> -->
    <div id="main" class="conteudo">
        <!--  -->
        <h2>Cadastrar Museu</h2>
        <div class="form-group">
            <form name="cadmuseu" method="post" action="{{ route('museus.store') }}">
                @csrf
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" style="width: 50%" placeholder="Digite o nome do museu">
                
                <label for="endereco" style="margin-top:2%">Endereço</label>
                <input type="text" name="endereco" class="form-control" id="endereco" style="width: 50%" placeholder="Digite o endereço">

                <label for="bairro" style="margin-top:2%">Bairro</label>
                <input type="text" name="bairro" class="form-control" id="bairro" style="width: 50%" placeholder="Informe o bairro">

                <label for="cep" style="margin-top:2%">CEP</label>
                <input type="text" name="cep" class="form-control" id="cep" style="width: 50%" placeholder="Informe o CEP">
                
                <label for="codigoMuseu" style="margin-top:2%">Código</label>
                <input type="text" name="codigoMuseu" class="form-control" id="codigo" style="width: 50%" placeholder="Informe o código do museu">
                
                {{-- DIRETOR --}}
                {{-- <select name="id_user" class="form-control" id="id_user">
                    <option value="">Diretor</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select> --}}
                
                <label for="telefone" style="margin-top:2%">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" style="width: 50%" placeholder="Informe o telefone do museu">

                <label for="email" style="margin-top:2%">Email</label>
                <input type="text" name="email" class="form-control" id="email" style="width: 50%" placeholder="Informe o email">
                
                <label for="horarios" style="margin-top:2%">Horário de Funcionamento</label>
                <textarea name="horarios" class="form-control" id="horarios" style="width: 50%" rows="6" placeholder="Horário de funcionamento"></textarea>
                
                <label for="descricao" style="margin-top:2%">Descrição</label>
                <textarea name="descricao" class="form-control" id="descricao" style="width: 50%" rows="6" placeholder="Sobre o museu"></textarea>
                
                <input type="submit" class="btn btn-default btn-mod" value="Cadastrar" style="margin-top: 2%">
            </form>
        </div>
        {{-- <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" style="width: 50%" placeholder="Digite o nome do museu">
        </div>

        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" style="width: 50%" placeholder="Digite o endereço">
        </div>

        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" id="codigo" style="width: 50%" placeholder="Informe o código do museu">
        </div>

        <div class="form-group">
            <label for="diretor">Diretor</label>
            <select class="form-control" style="width: 50%" id="diretor" name="diretor">
                <option value="1">Turing</option>
                <option value="2">Dijkstra</option>
                <option value="3">Lovelace</option>
            </select>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" style="width: 50%" placeholder="Informe o telefone do museu">
        </div>

        <div class="form-group">
            <label for="horarios">Horário de Funcionamento</label>
            <textarea class="form-control" id="horarios" style="width: 50%" rows="6" placeholder="Horário de funcionamento"></textarea>
            <!-- <input type="text" class="form-control" id="horarios" style="width: 50%" placeholder="Horário de funcionamento"> -->
        </div>

        <div class="form-group">
            <label for="sobre">Descrição</label>
            <!-- <input type="text" class="form-control" id="descricao" style="width: 50%;" rows="6" placeholder="Sobre o museu"> -->
            <textarea class="form-control" id="descricao" style="width: 50%" rows="6" placeholder="Sobre o museu"></textarea>
        </div> --}}
        {{-- <button type="submit" class="btn btn-default">Cadastrar</button> --}}
    </div>
@endsection