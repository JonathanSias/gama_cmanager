@extends('gama.master.layout')

@section('content')
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" >
    <div id="main" class="conteudo">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $museums->nome }}</h1>
            </div>
        </div>
        <hr>
        <br>
        <div class="row" style="margin-bottom: 5%">
            <div class="col-md-4">
                <img class="" src="../_imagens/286x180.png" alt="">
            </div>
            <div class="col-md-8">
                <h6 style="margin-bottom: 2.5%"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $museums->endereco }} - {{ $museums->bairro }}, {{ $museums->cep }}</h6>
                <h6 style="margin-bottom: 2.5%"><i class="fa fa-phone" aria-hidden="true"></i> {{ $museums->telefone }}</h6>
                <h6 style="margin-bottom: 2.5%"><i class="fa fa-envelope" aria-hidden="true"></i> {{ $museums->email }}</h6>
                <h6 style="margin-bottom: 2.5%"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $museums->horarios }}</h6>
                <h6><i class="fa fa-tag" aria-hidden="true"></i> {{ $museums->codigoMuseu }}</h6>
            </div>
        </div>
        {{--  --}}
        <div class="row">
            <div class="col-md-12">
                <p>{{ $museums->descricao }}</p>
            </div>
        </div>
    </div>
@endsection