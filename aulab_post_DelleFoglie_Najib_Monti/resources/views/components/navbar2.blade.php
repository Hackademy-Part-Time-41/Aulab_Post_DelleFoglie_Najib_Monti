{{-- <nav class="bg-secondary shadow">
    <div class="container-nav sfondo">

        <div class="mx-2">
            <a class="navbar-brand bg-dark text-dark" href="{{route('homepage')}}"><img class="logo container-xs" src="{{Storage::url('images/Designer_35.jpeg')}}" alt="p"></a>

        </div>
         
        <div class="my-btn btn mx-2">
            <a class="dropdown-item " href="{{route('chiSiamo')}}">Chi siamo</a>
        </div>
        
        <form class="d-flex mx-2" action="{{route('article.search')}}" method="GET">
            <input class="form-control me-2" type="search" placeholder="Cerca tra gli articoli" aria-label="Search" name="query">
            <button class="btn my-btn " type="submit">Cerca</button>
        </form>
        
        <div class="my-btn btn mx-2">
            <a class="dropdown-item" href="{{ route('article.index') }}">Tutti Gli Articoli</a>
        </div>

        <div class="mx-2">
            @auth
            <div class="nav-item dropdown">

                <a class="dropdown-toggle my-btn btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Benvenuto {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                    @if (Auth::user()->is_admin)
                        <li>
                            <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a>
                        </li>
                    @endif
                    @if (Auth::user()->is_revisor)
                        <li class="d-flex justify-content-center">
                            <a class="my-dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard Revisore</a>
                        </li>
                    @endif
                    @if (Auth::user()->is_writer)
                            <li class="d-flex justify-content-center">
                                <a class="my-dropdown-item" href="{{route('writer.dashboard')}}">Dashboard Writer</a>
                            </li>
                    @endif    
                    <hr class="dropdown-divider">
                    
                    <hr class="dropdown-divider">
                    <li>
                        <a class="dropdown-item" href="{{ route('article.create') }}">Crea Articolo</a>
                    </li>
                    <hr class="dropdown-divider">
                    <li>
                        <a href="{{ route('careers') }}" class="dropdown-item">Lavora con noi</a>
                    </li>
                    <hr class="dropdown-divider">
                    <li>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#logout-form').submit()">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </ul> 
            </div>
            @endauth

            @guest
            <ul class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Benvenuto Ospite 
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{ route('article.index') }}">Tutti Gli Articoli</a>
                    </li> 
                    
                    <li><a href="{{ route('careers') }}" class="dropdown-item" aria-current="page">Lavora con noi</a></li>
                    <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                    <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                </ul>
            </ul>
            @endguest
        </div>
    </div>
</nav> --}}







<nav class="navbar navbar-expand-lg sfondo shadow">
    <div class="container-fluid">
        <div>
            <a class="navbar-brand bg-dark text-dark" href="{{route('homepage')}}"><img class="logo container-xs" src="{{Storage::url('images/Designer_35.jpeg')}}" alt="p"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <div class="my-btn btn">
                    <li class="nav-item">
                        <a class="dropdown-item " href="{{route('chiSiamo')}}">Chi siamo</a>
                    </li>
                </div>
                <div class="my-btn btn">
                    <li class="nav-item">
                        <a class="dropdown-item" href="{{ route('article.index') }}">Tutti Gli Articoli</a>
                    </li>
                </div>
                <li class="nav-item">
                    <form class="d-flex mx-2" action="{{route('article.search')}}" method="GET">
                        <input class="form-control" type="search" placeholder="Cerca tra gli articoli" aria-label="Search" name="query">
                        <button class="btn my-btn" type="submit">Cerca</button>
                    </form>
                </li>
            </ul>
            
            @auth
                <div class="nav-item dropdown">

                    <a class="dropdown-toggle my-btn btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Benvenuto {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        @if (Auth::user()->is_admin)
                            <li>
                                <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a>
                            </li>
                        @endif
                        @if (Auth::user()->is_revisor)
                            <li class="d-flex justify-content-center">
                                <a class="my-dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard Revisore</a>
                            </li>
                        @endif
                        @if (Auth::user()->is_writer)
                                <li class="d-flex justify-content-center">
                                    <a class="my-dropdown-item" href="{{route('writer.dashboard')}}">Dashboard Writer</a>
                                </li>
                        @endif    
                        <hr class="dropdown-divider">
                    
                        <li>
                            <a class="dropdown-item" href="{{ route('article.create') }}">Crea Articolo</a>
                        </li>
                        <hr class="dropdown-divider">
                        <li>
                            <a href="{{ route('careers') }}" class="dropdown-item">Lavora con noi</a>
                        </li>
                        <hr class="dropdown-divider">
                        <li>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#logout-form').submit()">Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </ul> 
                </div>
                @endauth

                @guest
                <ul class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenuto Ospite 
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('article.index') }}">Tutti Gli Articoli</a>
                        </li> 
                    
                        <li>
                            <a href="{{ route('careers') }}" class="dropdown-item" aria-current="page">Lavora con noi</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('register') }}">Registrati</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('login') }}">Accedi</a>
                        </li>
                    </ul>
                </ul>
                @endguest
        </div>
    </div>
  </nav>
