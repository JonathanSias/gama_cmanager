@extends('gama.master.layout')

@section('content')
    <div id="main" class="conteudo">
        <div class="row">
            <div class="col-md-10">
                <h1>{{ $pecas->nome }}</h1>
            </div>
        </div>
        <hr>
        <br>
    </div>
@endsection