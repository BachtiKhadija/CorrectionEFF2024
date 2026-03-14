@extends('layouts.master');
@section('content')
<table class="table table-striped">
  <tr><th>Théme</th><th>Date début</th><th>Date fin</th><th>description</th><th>cout journalier</th><th>Expert</th><th>Actions</th></tr>

    @foreach($events as $event)
       <tr><td>{{$event->theme}}</td><td>{{$event->dateDebut}}</td>
       <td>{{$event->dateFin}}</td><td>{{$event->description}}</td><td>{{$event->coutJ}}</td><td>{{$event->expert_id}}</td><th>
         <a href="{{url('/evenements/{id}')}}">Consulter</a>
         <a href="{{route('evenements.edit',$event->id)}}">Edit</a>
         <form action="{{route('evenements.destroy',$event->id)}}" method="POST">
            @csrf 
            @method('DELETE')
         <button type="submit">Supprimer</button>
         </form>


       </th></tr>




    @endforeach
</table>






@endsection