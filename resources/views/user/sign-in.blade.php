<link rel="stylesheet" href="{{asset('css/floating-labels.css')}}">
@extends('templates.master')
@section('titles', 'Sign-in')
@section('content')
    <form class="form-signin" action="">
        <div class="text-center mb-4">
            <img src="/images/ifsp_logo.png" alt="">
            <h1 class="h1 mb-1" style="color: black">IFSpace</h1>
        </div>
        <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="E-mail ou Prontuário" required autofocus>
            <label for="inputEmail">E-mail ou Prontuário</label>
        </div>
        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
            <label for="inputPassword">Senha</label>
        </div>
        <button class="btn btn-lg btn-success btn-lock" type="submit">Acessar</button>
        <div>
            <p>Não é cadastrado? | Esqueceu a senha?</p>
        </div>
    </form>
@endsection