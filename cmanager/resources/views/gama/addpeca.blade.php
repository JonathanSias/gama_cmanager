@extends('gama.master.layout')

@section('content')
    <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU</span> -->
    <div id="main" class="conteudo">
        <!--  -->
        <h2>Cadastrar Peça</h2>
        <div class="form-group">
            <form name="cadpeca" method="post" action="{{ url('pecas') }}">
                @csrf
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" style="width: 50%" placeholder="Digite o nome da obra">

                <label for="instituicao" style="margin-top: 2%">Instituição</label>
                <input type="text" name="instituicao" class="form-control" id="instituicao" style="width: 50%" placeholder="Nome da instituição">

                <label for="numeroinventario" style="margin-top: 2%">Número de inventário</label>
                <input type="text" name="numeroinventario" class="form-control" id="numeroinventario" style="width: 50%" placeholder="Número de inventário">

                <label for="outrosnumeros" style="margin-top: 2%">Outros números</label>
                <input type="text" name="outrosnumeros" class="form-control" id="outrosnumeros" style="width: 50%" placeholder="Outros números...">

                <label for="data" style="margin-top: 2%">Data</label>
                <input type="date" name="data" class="form-control" id="data" style="width: 50%">

                <label for="epoca" style="margin-top: 2%">Época</label>
                <input type="text" name="epoca" class="form-control" id="epoca" style="width: 50%" placeholder="Informe a época">

                {{-- COLEÇÃO --}}
                
                {{-- <select class="form-group" name="nome" id="nomecolecao"> --}}
                    {{--  --}}
                {{-- </select> --}}
                {{-- <label for="colecao" style="margin-top: 2%">Coleção</label>
                <input type="text" name="colecao" value="" class="form-control" id="colecao" style="width: 50%" placeholder="Selecione a coleção"> --}}

                <label for="titulo" style="margin-top: 2%">Título</label>
                <input type="text" name="titulo" class="form-control" id="titulo" style="width: 50%" placeholder="Informe o título da obra">

                <label for="material" style="margin-top: 2%">Material</label>
                <input type="text" name="material" class="form-control" id="material" style="width: 50%" placeholder="Material...">

                <label for="tecnica" style="margin-top: 2%">Técnica</label>
                <input type="text" name="tecnica" class="form-control" id="tecnica" style="width: 50%" placeholder="Técnica utilizada">

                <label for="autoria" style="margin-top: 2%">Autoria</label>
                <input type="text" name="autoria" class="form-control" id="autoria" style="width: 50%" placeholder="Autoria da obra">

                <label for="altura" style="margin-top: 2%">Altura</label>
                <input type="text" name="altura" class="form-control" id="altura" style="width: 50%" placeholder="Altura">

                <label for="largura" style="margin-top: 2%">Largura</label>
                <input type="text" name="largura" class="form-control" id="largura" style="width: 50%" placeholder="Largura">

                <label for="comprimento" style="margin-top: 2%">Comprimento</label>
                <input type="text" name="comprimento" class="form-control" id="comprimento" style="width: 50%" placeholder="Comprimento">

                <label for="procedencia" style="margin-top: 2%">Procedência</label>
                <input type="text" name="procedencia" class="form-control" id="procedencia" style="width: 50%" placeholder="Procedência">

                <label for="doador" style="margin-top: 2%">Doador</label>
                <input type="text" name="doador" class="form-control" id="doador" style="width: 50%" placeholder="Doador">

                <label for="localdeproducao" style="margin-top: 2%">Local de Produção</label>
                <input type="text" name="localdeproducao" class="form-control" id="localdeproducao" style="width: 50%" placeholder="Local de produção da peça">

                <label for="descricao" style="margin-top: 2%">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" style="width: 50%" rows="8" placeholder="Descrição..."></textarea>

                <label for="estadodeconservacao" style="margin-top: 2%">Estado de Conservação</label>
                <input type="text" name="estadodeconservacao" class="form-control" id="estadodeconservacao" style="width: 50%" placeholder="Estado de conservação da peça">

                <label for="circulacaocondicao" style="margin-top: 2%">Circulação/Condição de Reprodução/Mídias Relacionadas</label>
                <input type="text" name="circulacaocondicao" class="form-control" id="circulacaocondicao" style="width: 50%" placeholder="...">

                <label for="localizacao" style="margin-top: 2%">Localização</label>
                <input type="text" name="localizacao" class="form-control" id="localizacao" style="width: 50%" placeholder="Localização...">

                <label for="situacao" style="margin-top: 2%">Situação</label>
                <input type="text" name="situacao" class="form-control" id="situacao" style="width: 50%" placeholder="Situação...">

                <label for="inscricao" style="margin-top: 2%">Inscrição</label>
                <input type="text" name="inscricao" class="form-control" id="inscricao" style="width: 50%" placeholder="Inscrição...">

                <label for="referencianoacervo" style="margin-top: 2%">Referência no Acervo</label>
                <input type="text" name="referencianoacervo" class="form-control" id="referencianoacervo" style="width: 50%" placeholder="Referência no acervo">

                <label for="classificacao" style="margin-top: 2%">Classificação</label>
                <input type="text" name="classificacao" class="form-control" id="classificacao" style="width: 50%" placeholder="Classificação...">

                <label for="observacoes" style="margin-top: 2%">Observações</label>
                <textarea class="form-control" name="observacoes" id="observacoes" style="width: 50%" rows="8" placeholder="Observações..."></textarea>

                <label for="recebidopor" style="margin-top: 2%">Recebido Por</label>
                <input type="text" name="recebidopor" class="form-control" id="recebidopor" style="width: 50%" placeholder="Recebido por...">

                <label for="preenchidopor" style="margin-top: 2%">Preenchido Por</label>
                <input type="text" name="preenchidopor" class="form-control" id="preenchidopor" style="width: 50%" placeholder="Preenchido por...">

                <label for="datadepreenchimento" style="margin-top: 2%">Data de preenchimento</label>
                <input type="date" name="datadepreenchimento" class="form-control" id="datadepreenchimento" style="width: 50%">

                <label for="revisadopor" style="margin-top: 2%">Revisado Por</label>
                <input type="text" name="revisadopor" class="form-control" id="revisadopor" style="width: 50%" placeholder="Revisado por...">

                <label for="dataderevisao" style="margin-top: 2%">Data de revisão</label>
                <input type="date" name="dataderevisao" class="form-control" id="dataderevisao" style="width: 50%">

                <input type="submit" class="btn btn-default btn-mod" value="Cadastrar" style="margin-top: 2%">
            </form>
        </div>
    </div>
@endsection