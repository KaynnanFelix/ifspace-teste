@extends('templates.master')
@section('title', 'Index')
@section('content')
<h1>{{$title}}</h1>
<a href="{{route('spaces.create')}}">Novo</a>
@if(count($spaces)>0)
<hr class="my-4">
<div class="row">
   @foreach ($spaces as $s) 
   <div class="col-sm-3">
      <div class="card">
         <img class="card-img-top" src="/images/ifsp_foto_sala.jpg" alt="a">
         <div class="card-body">
            <h4 class="card-title"> {{$s['name']}}</h4>
            <p class="card-text">{{$s['localization']}}</p>
            <p class="card-text">{{$s['type']}}</p>
         </div>
         <div class="card-footer text-center">
            <a href="{{route('spaces.show', $s['id'])}}"><i class="material-icons">add</i></a>
            <a href="{{route('spaces.edit', $s['id'])}}"><i class="material-icons">edit</i></a>
            
            <form action="{{route('spaces.destroy', $s['id'])}}" method="POST">
               @csrf
               @method('DELETE')
               <input type="submit" class='material-icons' value="delete">
            </form>
            
         </div>
      </div>
   </div>
   @endforeach
</div>
@else
<h4>Não existe espaços cadastrados</h4>
@endif
@endsection