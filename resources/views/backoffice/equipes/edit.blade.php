@extends('template.welcome')

@section('content')
    <h1>Modifier Equipe</h1>
    <br>
    <form action="{{route('equipes.update', $equipe->id)}}" method="post">
        @csrf
        @method('PUT')
        Nom du Club: <input type="text" name="nomClub" value="{{$equipe->nomClub}}">
        Ville: <input type="text" name="ville" value="{{$equipe->ville}}">
        Pays: <input type="text" name="pays" value="{{$equipe->pays}}">
        Nombre Max: <input type="text" name="nbrMax" value="{{$equipe->nbrMax}}">
        continent_ID: <input type="text" name="continent_id" value="{{$equipe->continent_id}}">
        <button type="submit">Submit</button>
    </form>
@endsection