@extends('templates.master')
@section('title', 'Create')
@section('content')
<h3>Novo Espaço</h3>
<form action="{{route('spaces.store')}}" method="POST">
    @csrf
    <p>Nome</p>
    <input type="text" name="name">
    <p>Localização</p>
    <input type="text" name="localization">
    <p>Tipo</p>
    <input type="text" name="type">
    <input type="submit" value="Criar">
</form>
@endsection