@extends('layout.main')

@section('content')
@if (session('deleted'))
<div class="alert alert-danger" role="alert">
    {{session('deleted')}}
  </div>
@endif
<div class="container d-flex flex-wrap gap-3 my-3">
@foreach ($characters as $character)
    <div class="card p-3" style="width: 18rem;">
        <img src="{{$character->picture}}" class="card-img-top" alt="{{$character->name}}">
        <div class="card-body">
          <h5 class="card-title">{{$character->name}}</h5>
          <p class="card-text">HEIGHT: {{$character->height}}mts</p>
          <p class="card-text">WEIGHT: {{$character->weight}} Kg</p>
          <p class="card-text">STORY: {{$character->background}}</p>
        </div>
        <div class="d-flex gap-2 justify-content-center">
            @include('partials.show_button', ['route' => route('characters.show', $character)])
            @include('partials.edit_boton', ['route' => route('characters.edit', $character)])
            @include('partials.delete_boton', ['route' => route('characters.destroy', $character)])
        </div>
      </div>

    @endforeach
</div>
    {{$characters->links()}}
@endsection
