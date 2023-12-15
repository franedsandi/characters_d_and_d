@extends('layout.main')

@section('content')
<div class="d-flex flex-wrap gap-3 justify-content-center">
@foreach ($races as $race )

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$race->name}}</h5>
        <p class="card-text">{{$race->description}}</p>
        @include('partials.show_button', ['route' => route('races.show', $race)])
        @include('partials.characters_race_btn', ['route' => route('character-races', $race)])

    </div>
</div>

@endforeach
</div>


@endsection
