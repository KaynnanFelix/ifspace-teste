@extends('templates.master')
@section('title', 'Edit')
@section('content')
<h3>Novo Espaço</h3>
<form action="{{route('spaces.update', $space['id'])}}" method="POST">
    @csrf
    @method('PUT')
    <p>Nome</p>
    <input type="text" name="name" value="{{$space['name']}}">
    <p>Localização</p>
    <input type="text" name="localization" value="{{$space['localization']}}">
    <p>Tipo</p>
    <input type="text" name="type" value="{{$space['type']}}">
    <input type="submit" value="Salvar">
</form>
@endsection