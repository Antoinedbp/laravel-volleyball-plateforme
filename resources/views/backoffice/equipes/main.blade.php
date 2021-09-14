@extends('template.welcome')

@section('content')
<h1 class="text-center">Equipes</h1>
<div class="d-flex justify-content-center">
    <a href="{{route('equipes.create')}}" class="btn btn-success">Create</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Ville</th>
        <th scope="col">Pays</th>
        <th scope="col">Nombre Max</th>
        <th scope="col">Continent</th>
        <th scope="col">Edit</th>
        <th scope="col">Show</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>

      @if (session()->has('message'))
        <div class="alert alert-success">
          {{session()->get('message')}}
        </div>
      @endif

      @foreach ($dataEquipe as $item)
        <tr>
            <th>{{$item->id}}</th>
            <th>{{$item->nomClub}}</th>
            <th>{{$item->ville}}</th>
            <th>{{$item->pays}}</th>
            
            <th>{{$item->nbrMax}}</th>
            <th>{{$item->continent->nomContinent}}</th>
            <th>
                <a href="{{route('equipes.edit', $item->id)}}" class="btn btn-primary">Edit</a>
            </th>
            <th>
                <a href="{{route('equipes.show', $item->id)}}" class="btn btn-warning">SHOW</a>
            </th>
            <th>
                <form action="{{route('equipes.destroy', $item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </th>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection