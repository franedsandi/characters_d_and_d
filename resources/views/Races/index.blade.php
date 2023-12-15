@extends('layout.main')

@section('content')
<div class="d-flex flex-wrap gap-3 justify-content-center">
@foreach ($races as $race )

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$race->name}}</h5>
        <p class="card-text">{{$race->description}}</p>
        @include('partials.show_button', ['route' => route('races.show', $race)])
        
        <a class="btn btn-outline-success" href="{{route('character-races', $race) }}"><i class="fa-solid fa-eye"></i></a>
    </div>
</div>

@endforeach
</div>


@endsection
