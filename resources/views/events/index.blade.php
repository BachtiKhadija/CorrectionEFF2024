@extends('layouts.master');
@section('content')
<table class="table table-striped">
    <tr><th>Theme</th><th>description</th><th>cout journalier</th><th>Expert_id</th><th>Actions</th></tr>


    @foreach($events as $event)





    @endforeach
</table>






@endsection