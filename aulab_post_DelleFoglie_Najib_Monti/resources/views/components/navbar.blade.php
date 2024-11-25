{{-- <nav class="d-flex container-nav sfondo justify-content-between">

    <div class="">
        <a class="navbar-brand text-dark" href="{{route('homepage')}}"><img class="logo container-xs" src="{{Storage::url('images/Designer_35.jpeg')}}" id="logo" alt="p"></a>

    </div>

    <form class="d-flex mx-2" action="{{route('article.search')}}" method="GET">
        <input class="form-control me-2" type="search" placeholder="Cerca tra gli articoli" aria-label="Search" name="query">
        <button class="btn my-btn " type="submit">Cerca</button>
    </form>

    <div class="hamburger-menu">
        <input type="checkbox" id="sidebar-active">

        <label for="sidebar-active" class="open-side-button">
            
            <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
            
        </label>
    
        <label id="overlay" for="sidebar-active"></label>
     
        <div class="links-container">
    
            <label for="sidebar-active" class="close-side-button">
    
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
    
            </label>
    
            
            <div class="my-btn home-link btn mx-2">
                <a class="" own-item href="{{route('chiSiamo')}}">Chi siamo</a>
            </div>

            <div class="my-btn btn mx-2">
                <a class="dropdown-item ">Presentati</a>
            </div>
            
            @auth
            @if (Auth::user()->is_admin)

            <div class="my-btn home-link btn mx-2">
                <a href="{{route('admin.dashboard')}}">Dashboard Admin</a>
            </div>
            @endif
            @if (Auth::user()->is_revisor) 

            <div class="my-btn home-link btn mx-2">
                <a href="{{route('revisor.dashboard')}}">Dashboard Revisore</a>
            </div> 

            @endif
            
            <div class="my-btn home-link btn mx-2">
                <a href="{{ route('article.create') }}">Crea Articolo</a>
            </div>

            <div class="my-btn home-link btn mx-2" >
                <a href="{{ route('careers') }}">Lavora con noi</a>
            </div>

            <div  class="my-btn home-link btn mx-2">
                <a href="#" onclick="event.preventDefault(); document.querySelector('#logout-form').submit()">Logout</a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf
            @endauth

            @guest
            <div  class="my-btn home-link btn mx-2">
                <a class="dropdown-item" href="{{ route('register') }}">Registrati</a>
            </div>
            <div class="my-btn home-link btn mx-2">
                <a class="dropdown-item" href="{{ route('login') }}">Accedi</a>
            </div>
            @endguest
            
            
            
    
        </div>
    </div>

 

    
</nav> --}}