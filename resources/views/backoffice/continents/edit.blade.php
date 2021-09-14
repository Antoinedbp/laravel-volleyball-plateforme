@extends('template.welcome')

@section('content')
    <h1>Modifier Continent</h1>
    <br>
    <form action="{{route('continents.update', $continent->id)}}" method="post">
        @csrf
        @method('PUT')
        Nom: <input type="text" name="nomContinent" value="{{old('nomContinent')}}">
        <button type="submit">Submit</button>
    </form>
@endsection