@extends('layout.main')
@section('content')
<div>
    <img src="{{$character->picture}}" alt="{{$character->name}}" width="400px">
    <div>
      <h5 class="card-title">{{$character->name}}</h5>
      <p class="card-text">HEIGHT: {{$character->height}}mts</p>
      <p class="card-text">WEIGHT: {{$character->weight}} Kg</p>
      <p class="card-text">STORY: {{$character->background}}</p>
      <p class="card-text">ARMOR: {{$character->armor_class}}</p>
      <p class="card-text">FOR: {{$character->for}}</p>
      <p class="card-text">DES: {{$character->des}}</p>
      <p class="card-text">COS:{{$character->cos}}</p>
      <p class="card-text">INT: {{$character->int}}</p>
      <p class="card-text">SAG: {{$character->sag}}</p>
      <p class="card-text">CAR: {{$character->car}}</p>
    </div>
    <div class="d-flex justify-content-center gap-3">
        @include('partials.edit_boton')
        @include('partials.delete_boton')
    </div>
  </div>


@endsection
