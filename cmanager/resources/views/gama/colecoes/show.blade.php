@extends('gama.master.layout')

@section('content')
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" >
    <div id="main" class="conteudo">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $collections->nome }}</h1>
            </div>
        </div>
        <hr>
        <br>
        <div class="row" style="margin-bottom: 5%">
            <div class="col-md-4">
                <img class="" src="../_imagens/286x180.png" alt="">
            </div>
            <div class="col-md-8">
                {{--  --}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>{{ $collections->descricao }}</p>
            </div>
        </div>
    </div>
@endsection