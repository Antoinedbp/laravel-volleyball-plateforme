@extends('template.welcome')

@section('content')
<h1 class="text-center">Continents</h1>
<div class="d-flex justify-content-center">
    <a href="{{route('continents.create')}}" class="btn btn-success">Create</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
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

      @foreach ($dataContinent as $item)
        <tr>
            <th>{{$item->id}}</th>
            <th>{{$item->nomContinent}}</th>
            <th>
                <a href="{{route('continents.edit', $item->id)}}" class="btn btn-primary">Edit</a>
            </th>
            <th>
                <a href="{{route('continents.show', $item->id)}}" class="btn btn-warning">SHOW</a>
            </th>
            <th>
                <form action="{{route('continents.destroy', $item->id)}}" method="POST">
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