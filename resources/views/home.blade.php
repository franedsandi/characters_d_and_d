@extends('layout.main')

@section('content')
    <h1 class="text-white">D&D project</h1>
    <p class="text-white lh-lg fw-semibold">Welcome adventurers, guardians of realms, and wizards of magical lands! Are you ready to immerse yourselves in an epic world where magic dances with the sword, and legends come to life? "Epic Realms: Unconquerable Legends" is the project that will lead you through timeless adventures in the heart of the Forgotten Realms. In this ambitious Dungeons & Dragons role-playing project, we invite you to explore unknown lands, face legendary monsters, and forge your destiny in a universe rich with mysteries. Whether you're a seasoned knight seeking fame, a cunning wizard in search of ancient secrets, or a stealthy rogue hungry for hidden treasures, "Epic Realms" offers a tailor-made gaming experience for every type of hero.
    </p>

    <button type="button" class="btn btn-warning">
        <a href="{{Route('characters.index')}}" class="nav-link active" aria-current="page">Character List</a>
    </button>
    {{-- make character  --}}
    @include('partials.create_boton', ['route' => route('characters.create'), 'add' => 'Make your own character'] )



@endsection
