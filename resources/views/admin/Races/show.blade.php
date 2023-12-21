@extends('layout.main')

@section('content')
<div class="races">

    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    @if (session('updated'))
    <div class="alert alert-success" role="alert">
        {{ session('updated') }}
    </div>
    @endif

    <h1> {{$race->name}}</h1>

    <p> {{$race->description}}</p>

    <table class="table table-dark table-striped w-25">
            <thead>
        <tr>
            <th scope="col">Value</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">For</th>
            <td>{{$race->mod_for}}</td>
        </tr>
        <tr>
            <th scope="row">Des</th>
            <td>{{$race->mod_des}}</td>
        </tr>
        <tr>
            <th scope="row">Cos</th>
            <td>{{$race->mod_cos}}</td>
        </tr>
        <tr>
            <th scope="row">Int</th>
            <td>{{$race->mod_int}}</td>
        </tr>
        <tr>
            <th scope="row">Sag</th>
            <td>{{$race->mod_sag}}</td>
        </tr>
        <tr>
            <th scope="row">Car</th>
            <td>{{$race->mod_car}}</td>
        </tr>
        </tbody>
    </table>

    {{-- back to races index --}}


    <div class="d-flex gap-2 mt-3">
        <a class="btn btn-warning" href="{{route('admin.races.index')}}">
            <i class="fa-solid fa-arrow-left fa-beat-fade"></i>
        </a>
        @include('admin.partials.characters_race_btn', ['route' => route('admin.character-races', $race)])
        @include('admin.partials.edit_boton', ['route' => route('admin.races.edit', $race)])
    </div>
</div>
@endsection
