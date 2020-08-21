@extends('gama.master.layout')

@section('content')
    <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU</span> -->
    <div id="main" class="conteudo">
        <!--  -->
        <h2>Cadastrar Coleção</h2>
        <div class="form-group">
            <form name="cadcolecao" method="post" action="{{ route('colecoes.store') }}">
                @csrf
                <label for="nome" style="margin-top:2%">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" style="width: 50%" placeholder="Digite o nome da Coleção">

                <label for="dimensao" style="margin-top:2%">Dimensão</label>
                <input type="text" name="dimensao" class="form-control" id="dimensao" style="width: 50%" placeholder="Número estimado de artefatos">

                <label for="numero" style="margin-top:2%">Número</label>
                <input type="text" name="numero" class="form-control" id="numero" style="width: 50%" placeholder="Número de série do levantamento">

                <label for="instituicao" style="margin-top:2%">Instituição</label>
                <input type="text" name="instituicao" class="form-control" id="instituicao" style="width: 50%" placeholder="Instituição de tutela">

                <label for="tuteladireta" style="margin-top:2%">Unidade de Tutela Direta</label>
                <input type="text" name="tuteladireta" class="form-control" id="tuteladireta" style="width: 50%" placeholder="Unidade de tutela direta">

                <label for="localizacao" style="margin-top:2%">Localização</label>
                <input type="text" name="localizacao" class="form-control" id="localizacao" style="width: 50%" placeholder="Local onde a coleção se encontra">

                <label for="descricao" style="margin-top:2%">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" style="width: 50%" rows="6" placeholder="Sobre a coleção"></textarea>

                <label for="relevancia" style="margin-top:2%">Relevância</label>
                <textarea class="form-control" name="relevancia" id="relevancia" style="width: 50%" rows="6" placeholder="Relevância histórica/científica"></textarea>

                <label for="utilizacao" style="margin-top:2%">Utilização</label>
                <input type="text" name="utilizacao" class="form-control" id="utilizacao" style="width: 50%" placeholder="Usos recentes da coleção">

                {{-- <label for="conservacao" style="margin-top:2%">Estado de Conservação</label>
                <input type="text" name="conservacao" class="form-control" id="conservacao" style="width: 50%" placeholder="Estado geral de conservação"> --}}

                <label for="observacoes" style="margin-top:2%">Observações</label>
                <textarea class="form-control" name="observacoes" id="observacoes" style="width: 50%" rows="6" placeholder="Observações"></textarea>

                <label for="bibliografia" style="margin-top:2%">Bibliografia</label>
                <textarea class="form-control" name="bibliografia" id="bibliografia" style="width: 50%" rows="6" placeholder="Bibliografia sobre a coleção"></textarea>
        
                {{-- <label for="codigo" style="margin-top:2%">Código</label>
                <input type="text" class="form-control" id="codigo" style="width: 50%" placeholder="Informe o código do museu"> --}}
        
                {{-- <label for="descricao" style="margin-top:2%">Descrição</label>
                <textarea class="form-control" id="descricao" style="width: 50%" rows="6" placeholder="Sobre o museu"></textarea> --}}
        
                <input type="submit" class="btn btn-default btn-mod" value="Cadastrar" style="margin-top: 2%">
            </form>
        </div>
        {{-- <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" style="width: 50%" placeholder="Digite o nome do museu">
        </div>

        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" id="codigo" style="width: 50%" placeholder="Informe o código do museu">
        </div>

        <div class="form-group">
            <label for="sobre">Descrição</label>
            <!-- <input type="text" class="form-control" id="descricao" style="width: 50%;" rows="6" placeholder="Sobre o museu"> -->
            <textarea class="form-control" id="descricao" style="width: 50%" rows="6" placeholder="Sobre o museu"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Cadastrar</button> --}}
    </div>
@endsection