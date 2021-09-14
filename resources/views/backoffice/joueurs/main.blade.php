@extends('template.welcome')

@section('content')
<h1 class="text-center">Joueurs</h1>
<div class="d-flex justify-content-center">
    <a href="{{route('joueurs.create')}}" class="btn btn-success">Create</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Age</th>
        <th scope="col">Telephone</th>
        <th scope="col">Email</th>
        <th scope="col">Genre</th>
        <th scope="col">Pays d'Origine</th>
        <th scope="col">Role</th>
        <th scope="col">Equipe</th>
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

      @foreach ($dataJoueur as $item)
        <tr>
            <th>{{$item->id}}</th>
            <th>{{$item->nom}}</th>
            <th>{{$item->prenom}}</th>
            <th>{{$item->age}}</th>
            <th>{{$item->telephone}}</th>
            <th>{{$item->email}}</th>
            <th>{{$item->genre}}</th>
            <th>{{$item->paysOrigine}}</th>
            <th>{{$item->role->nomRole}}</th> 
            <th>{{$item->equipe->nomClub}}</th> 
            <th>
                <a href="{{route('joueurs.edit', $item->id)}}" class="btn btn-primary">Edit</a>
            </th>
            <th>
                <a href="{{route('joueurs.show', $item->id)}}" class="btn btn-warning">SHOW</a>
            </th>
            <th>
                <form action="{{route('joueurs.destroy', $item->id)}}" method="POST">
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