@extends('template.welcome')

@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4>#{{$continent->id}}</h4>
            <h3 class="card-title">{{$continent->nomContinent}}</h3>
            <form action="{{route('continents.destroy', $continent->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{route('continents.edit', $continent->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </div>
@endsection