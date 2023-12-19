@extends('layout.main')

@section('content')
<h1>Those are all the characters of the race {{$race->name}}</h1>
<div class="d-flex flex-wrap gap-2 my-3 justify-content-center">
    @foreach ($characters as $character)
        <a class="text-decoration-none text-white h-100" href="{{ route('characters.show', $character) }}">
            <div class="card item p-2 text-white" style="width: 17rem;">
                <img src="{{ $character->picture }}" class="card-img-top" alt="{{ $character->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $character->name }}</h5>
                    <p class="card-text">HEIGHT: {{ $character->height }}mts</p>
                    <p class="card-text">WEIGHT: {{ $character->weight }} Kg</p>
                    <p class="card-text">STORY: {{ $character->background }}</p>
                </div>
                <div class="d-flex gap-2 justify-content-center">
                    @include('partials.show_button', ['route' => route('characters.show', $character)])
                    @include('partials.edit_boton', ['route' => route('characters.edit', $character)])
                    @include('partials.delete_boton', ['route' => route('characters.destroy', $character)])
                </div>
            </div>
        </a>
    @endforeach
</div>

<div class="mt-5 d-flex justify-content-center" style="color: white">
    {{ $characters->links() }}
</div>
@endsection
