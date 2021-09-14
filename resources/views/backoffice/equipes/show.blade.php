@extends('template.welcome')

@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h3 class="card-title">Club: {{$equipe->nomClub}}</h3>
            <h3 class="card-title">Ville: {{$equipe->ville}}</h3>
            <h3 class="card-title">Pays: {{$equipe->pays}}</h3>
            <h3 class="card-title">Nbr Max: {{$equipe->nbrMax}}</h3>
            <h3 class="card-title">Continent: {{$equipe->continent->nomContinent}}</h3>
            <form action="{{route('equipes.destroy', $equipe->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('equipes.edit', $equipe->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection