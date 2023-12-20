@extends('layout.main')

@section('content')

<div class="d-flex">
    @include('partials.create_boton', ['route' => route('races.create'), 'add' => 'add race'] )
</div>

<div class="d-flex flex-wrap gap-2 my-3 justify-content-center">
@foreach ($races as $race )
    <a class="text-decoration-none text-white h-100" href="{{ route('races.show', $race)}}">
        <div class="card item p-2 text-white" style="width: 17rem;">
            <div class="card-body">
                <h5 class="card-title">{{$race->name}}</h5>
                <p class="card-text">{{$race->description}}</p>
                <div class="d-flex gap-2 justify-content-center">
                    @include('partials.show_button', ['route' => route('races.show', $race)])
                    @include('partials.characters_race_btn', ['route' => route('character-races', $race)])

                </div>
            </div>
        </div>
    </a>
@endforeach
</div>

<div class="mt-5 d-flex justify-content-center" style="color: white">
    {{$races->links()}}
</div>
@endsection
