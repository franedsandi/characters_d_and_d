@extends('layout.main')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas ea earum explicabo culpa sint at, facilis cumque minus voluptates nam incidunt laudantium officia exercitationem maiores ipsa hic! Laborum, quia nobis!</p>
    
    <button type="button" class="btn btn-warning">
        <a href="{{Route('characters.index')}}" class="nav-link active" aria-current="page">Character List</a>
    </button>
    <button type="button" class="btn btn-success">
        <a href="{{Route('characters.create')}}" class="nav-link active" aria-current="page">Make your own character</a>
    </button>


@endsection
