@extends('layout.main')

@section('content')

<div class="text-white">
    <div class="character image">
        <img src="{{$character->picture}}" alt="{{$character->name}}" width="400px">
    </div>
    <div class="py-2">
        <h1 class="card-title py-3">{{$character->name}}</h1>
        <h2>{{$character->race['name']}}</h2>
        <p class="card-text">HEIGHT: {{$character->height}}mts</p>
        <p class="card-text">WEIGHT: {{$character->weight}} Kg</p>
        <p class="card-text">STORY: {{$character->background}}</p>
        <p class="card-text">ARMOR: {{$character->armor_class}}</p>
        <p class="card-text">Strength: {{$character->for}} + {{$character->race['mod_for']}}</p>
        <p class="card-text">Dexterity: {{$character->des}}  + {{$character->race['mod_des']}}</p>
        <p class="card-text">Constitution:{{$character->cos}}  + {{$character->race['mod_cos']}}</p>
        <p class="card-text">Intelligence: {{$character->int}}  + {{$character->race['mod_int']}}</p>
        <p class="card-text">Wisdom: {{$character->sag}}  + {{$character->race['mod_sag']}}</p>
        <p class="card-text">Charisma: {{$character->car}}  + {{$character->race['mod_car']}}</p>
        @if ($character->skills->isNotEmpty())
            <p class="card-text">Skills:</p>
            <ul>
                @foreach ($character->skills as $skill)
                    <li>{{ $skill['name'] }}</li>
                @endforeach
            </ul>
        @endif

    </div>
    <div class="d-flex justify-content-center gap-3">
        @include('partials.edit_boton', ['route' => route('characters.edit', $character)])
        @include('partials.delete_boton', ['route' => route('characters.destroy', $character)])
    </div>
</div>


@endsection
