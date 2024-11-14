<nav class="navbar navbar-expand-lg sfondo">
  <div class="container">
   <div>
    <a class="navbar-brand text-dark" href="{{route('homepage')}}"><img class="logo" src="{{Storage::url('images/Designer_35.jpeg')}}" alt=""></a>
  </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('article.index') }}">Tutti Gli Articoli</a>
        </li>

        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            @if (Auth::user()->is_admin)
                <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
              @endif
             @if (Auth::user()->is_revisor)
                <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard Revisore</a></li>
              @endif
            <li>
              <a class="dropdown-item" href="{{ route('article.create') }}">Crea Articolo</a>
            </li>
            <li>
              <a href="{{ route('careers') }}" class="nav-link active" aria-current="page">Lavora con noi</a>
            </li>
            <li>
              <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#logout-form').submit()">Logout</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </ul>
        </li>
        @endauth

        @guest
        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto Ospite 
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('careers') }}" class="nav-link active" aria-current="page">Lavora con noi</a></li>
                <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
            </ul>
        </li>
        @endguest

      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
    </div>
  </div>

</nav>