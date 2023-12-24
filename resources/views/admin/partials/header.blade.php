<header class="d-flex py-4 justify-content-between align-items-center">
    <div class=" px-1 d-flex align-items-center">
        <div class="logo p-1" style="width: 80px">
            <img class="d-inline-block img-fluid w-100 h-100" src="/logoDandD.png" alt="logoDeD">
        </div>
        <a href="{{ route('home')}}" class="btn btn-outline-secondary text-white text-decoration-none">
            <i class="fa-solid fa-arrow-left"></i>
            <span>public site</span>
        </a>
    </div>


    <ul class="nav nav-pills gap-3">
        <li class="nav-item"><a href="{{Route('admin.home')}}" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="{{Route('admin.characters.index')}}" class="nav-link active" aria-current="page">Character List</a></li>
        <li class="nav-item">@include('admin.partials.create_boton', ['route' => route('admin.characters.create'), 'add' => 'Make your own character'] )</li>
        <li class="nav-item"><a href="{{Route('admin.races.index')}}" class="nav-link active" aria-current="page">Races list</a></li>
        <li class="nav-item"><a href="{{Route('admin.skills.index')}}" class="nav-link active" aria-current="page">Skills list</a></li>
    </ul>
    <ul class="navbar-nav ml-auto ">
        <div class="d-flex gap-3">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                    <a class="dropdown-item" href="{{ route('admin.home') }}">
                        Go to admin site
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </div>
    </ul>
</header>
