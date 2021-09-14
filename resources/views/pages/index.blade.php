@extends('template.welcome')

@section('content')
<section>
    <h2 class=" text-center my-3">Equipes remplies</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nom du Club</th>
          <th scope="col">Ville</th>
          <th scope="col">pays</th>
          <th scope="col">Nbr de joueurs</th>
          <th scope="col">Continent</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($allTeam as $equipe )
              @if ($equipe->joueurs->count() ===$equipe->nbrMax)
                  
              <tr>
                <th scope="row">{{$equipe->id}}</th>
                <td>{{$equipe->nomClub}}</td>
                <td>{{$equipe->ville}}</td>
                <td>{{$equipe->pays}}</td>
                <td>{{$equipe->joueurs->count()}}/{{$equipe->nbrMax}}</td>
    
              </tr>
              @endif
          @endforeach
    
      </tbody>
    </table>
    
</section>

@endsection