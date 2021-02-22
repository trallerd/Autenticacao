@extends('templates.default', ['titulo' => "Negado", 'tag' => "neg"])

@section('titulo') Acesso Negado @endsection

@section('conteudo')
<br>
<h1 class="text-center">Acesso Restrito!</h1>
<br>
<div class="d-flex justify-content-center">
<img src="{{ asset('img/restrito.png') }}" alt="NEGADO">
</div>
<br>
@endsection