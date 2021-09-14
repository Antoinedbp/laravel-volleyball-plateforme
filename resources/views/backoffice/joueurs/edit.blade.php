@extends('template.welcome')

@section('content')
    <h1>Modifier Joueur</h1>
    <br>
    <form action="{{route('joueurs.update', $article->id)}}" method="post">
        @csrf
        @method('PUT')
        Nom: <input type="text" name="nom" value="{{$joueur->nom}}">
        Prénom: <input type="text" name="prenom" value="{{$joueur->prenom}}">
        Age: <input type="text" name="age" value="{{$joueur->age}}">
        Telephone: <input type="text" name="telephone" value="{{$joueur->telephone}}">
        Email: <input type="text" name="email" value="{{$joueur->email}}">
        Genre: <input type="text" name="genre" value="{{$joueur->genre}}">
        Pays d'Origine: <input type="text" name="paysOrigine" value="{{$joueur->paysOrigine}}">
        Role_ID: <input type="text" name="role_id" value="{{$joueur->role_id}}">
        Equipe_ID: <input type="text" name="equipe_id" value="{{$joueur->equipe_id}}">
        <button type="submit">Submit</button>
    </form>
@endsection