@foreach ($spaces as $s) 
   <li>{{ $s['id']}} | {{$s['name']}} | 
      <a href="{{route('spaces.edit', $s['id'])}}">Editar</a> |
      <a href="{{route('spaces.show', $s['id'])}}">Detalhes</a> |
      <form action="{{route('spaces.destroy', $s['id'])}}" method="POST">
         @csrf
         @method('DELETE')
         <input type="submit" value="Excluir">
     </form>
   </li>
@endforeach