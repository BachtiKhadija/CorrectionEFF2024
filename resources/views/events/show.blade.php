@extends('layouts.master')
@section('content')
<h1>Détail de l'événement : {{$event->id}}</h1>
<table>
    <tr>
        <th>Théme</th>
        <td>{{$event->theme}}</td>
    </tr>
    <tr>
        <td>Date début</td>
        <td>{{$event->dateDebut}}</td>
    </tr>
    <tr>
        <td>date fin</td>
        <td>{{$event->dateFin}}</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>{{$event->description}}</td>
    </tr>
    <tr>
        <td>Côut journalier</td>
        <td>{{$event->coutJ}}</td>
    </tr>
    <tr>
        <td>Expert </td>
        <td>{{$event->expert->nom.' '.$event->expert->nom}}</td>
    </tr>
</table>
<h2>Liste des ateliers assurés</h2>
<table>
    <tr><th>nom atelier</th>
    <th>Description atelier</th></tr>
@foreach($event->ateliers as $atelier)
    <tr>
        <td>{{$atelier->nomAtelier}}</td>
        <td>{{$atelier->descriptionAtelier}}/td>
    </tr>



@endforeach
</table>







@endsection