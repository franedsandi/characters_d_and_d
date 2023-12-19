<header class="d-flex justify-content-center py-3">
    <ul class="nav nav-pills gap-3">
      <li class="nav-item"><a href="{{Route('home')}}" class="nav-link active" aria-current="page">Home</a></li>
      <li class="nav-item"><a href="{{Route('characters.index')}}" class="nav-link active" aria-current="page">Character List</a></li>
      <li class="nav-item">@include('partials.create_boton', ['route' => route('characters.create'), 'add' => 'Make your own character'] )</li>
      <li class="nav-item"><a href="{{Route('races.index')}}" class="nav-link active" aria-current="page">Races list</a></li>

    </ul>
  </header>
