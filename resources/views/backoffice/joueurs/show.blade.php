@extends('template.welcome')

@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h3 class="card-title">{{$joueur->nom}}</h3>
            <h3 class="card-title">{{$joueur->prenom}}</h3>
            <h3 class="card-title">{{$joueur->age}}</h3>
            <h3 class="card-title">{{$joueur->telephone}}</h3>
            <h3 class="card-title">{{$joueur->email}}</h3>
            <h3 class="card-title">{{$joueur->genre}}</h3>
            <h3 class="card-title">{{$joueur->paysOrigine}}</h3>
            <h3 class="card-title">{{$joueur->role->nomRole}}</h3>
            <h3 class="card-title">{{$joueur->equipe->nomClub}}</h3>
            <form action="{{route('joueurs.destroy', $joueur->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('joueurs.edit', $joueur->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection