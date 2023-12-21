@extends('layout.main')

@section('content')
<div class="characters">
<div class="d-flex">
    @include('admin.partials.create_boton', ['route' => route('admin.races.create'), 'add' => 'add race'] )
    @include('admin.partials.searchbar', ['route' => route('admin.races.index', $races), 'name' => 'race'])
</div>


@if (session('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
</div>
@endif


<div class="d-flex flex-wrap gap-2 my-3 justify-content-center">
@foreach ($races as $race )
    <a class="text-decoration-none text-white h-100" href="{{ route('admin.races.show', $race)}}">
        <div class="card item p-2 text-white" style="width: 17rem;">
            <div class="card-body">
                <h5 class="card-title">{{$race->name}}</h5>
                <p class="card-text">{{$race->description}}</p>
                <div class="d-flex gap-2 justify-content-center">
                    @include('admin.partials.show_button', ['route' => route('admin.races.show', $race)])
                    @include('admin.partials.characters_race_btn', ['route' => route('admin.character-races', $race)])
                    @include('admin.partials.edit_boton', ['route' => route('admin.races.edit', $race)])
                </div>
            </div>
        </div>
    </a>
@endforeach
</div>

<div class="mt-5 d-flex justify-content-center" style="color: white">
    {{$races->links()}}
</div>
</div>
@endsection
