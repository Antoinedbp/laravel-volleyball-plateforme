@extends('template.welcome')

@section('content')
    <h1 class="text-center my-3">Nouveau Joueur</h1>
    
    <form action="{{route('joueurs.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 m-5">
            <label class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" value="{{old('nom')}}">
        </div>
        <div class="mb-3 m-5">
            <label class="form-label">Prénom</label>
            <input class="form-control" name="prenom" value="{{old('prenom')}}">
        </div>
        <div class="mb-3 m-5">
            <label class="form-label">Age</label>
            <input type="text" name="age" class="form-control" value="{{old('age')}}">
        </div>
        <div class="mb-3 m-5">
            <label class="form-label">Telephone</label>
            <input type="text" name="telephone" class="form-control" value="{{old('telephone')}}">
        </div>
        <div class="mb-3 m-5">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{old('email')}}">
        </div>
        <div class="mb-3 m-5">
            <label class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" value="{{old('genre')}}">
        </div>
        <div class="mb-3 m-5">
            <label class="form-label">Pays d'origine</label>
            <input type="text" name="paysOrigine" class="form-control" value="{{old('paysOrigine')}}">
        </div>
        <div class="mb-3 m-5">
            <label for="exampleInputEmail1" class="form-label">Role_ID</label>
            <input type="number" name="role_id" class="form-control" value="{{old('role_id')}}">
        </div>
        <div class="mb-3 m-5">
            <label for="exampleInputEmail1" class="form-label">Equipe_ID</label>
            <input type="number" name="equipe_id" class="form-control" value="{{old('equipe_id')}}">
        </div>
        <button type="submit" class="btn btn-primary m-5">Submit</button>
    </form>
    
@endsection