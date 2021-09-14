@extends('template.welcome')

@section('content')
    <h1 class="text-center my-3">Nouveau Continent</h1>
    
    <form action="{{route('continents.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 m-5">
            <label class="form-label">Nom</label>
            <input type="text" name="nomContinent" class="form-control" value="{{old('nomContinent')}}">
        </div>
        <button type="submit" class="btn btn-primary m-5">Submit</button>
    </form>
    
@endsection