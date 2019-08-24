@extends('templates.master')
@section('title', 'Show')
@section('content')
<h3>Informações do Espaço</h3>
<p>Identificação: {{$space['id']}}</p>
<p>Nome: {{$space['name']}}</p>
<p>Localização: {{$space['localization']}}</p>
<p>Tipo: {{$space['type']}}</p>
<br>
<a href="{{route('spaces.index')}}">Voltar</a>
@endsection