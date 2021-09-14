@extends('template.welcome')

@section('content')
    <h1 class="text-center my-3">Nouvelle Equipe</h1>
    
    <form action="{{route('equipes.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 m-5">
            <label class="form-label">Nom du Club</label>
            <input type="text" name="nomClub" class="form-control" value="{{old('nomClub')}}">
        </div>
        <div class="mb-3 m-5">
            <label class="form-label">Ville</label>
            <input class="form-control" name="ville" value="{{old('ville')}}">
        </div>
        <div class="mb-3 m-5">
            <label class="form-label">Pays</label>
            <input type="text" name="pays" class="form-control" value="{{old('pays')}}">
        </div>
        <div class="mb-3 m-5">
            <label class="form-label">Nombre Max</label>
            <input type="text" name="nbrMax" class="form-control" value="{{old('nbrMax')}}">
        </div>
        <div class="mb-3 m-5">
            <label for="exampleInputEmail1" class="form-label">Continent_ID</label>
            <input type="file" name="continent_id" class="form-control" value="{{old('continent_id')}}">
        </div>
        <button type="submit" class="btn btn-primary m-5">Submit</button>
    </form>
    
@endsection