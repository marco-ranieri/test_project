<nav class="topnav">
    <div class="p-2 d-flex justify-content-around">

        <div class="d-flex align-items-center class="collapse navbar-collapse" id="navbarSupportedContent"">

            <a class="active navbar-brand" href="#home">Home</a>

            @if (Auth::user())
            <li class="dropdown">
                <a class="dropdown-toggle" id="navbarUserDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hello, {{Auth::user()->name}}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarUserDropdown">
                    <li class="py-2">
                        <a class="text-dark" href="{{route('revisor.request')}}">Diventa Revisore!</a>
                    </li>
                    <li class="py-2">
                        <a class="text-dark" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout').submit();">Logout <i class="fas fa-sign-out-alt"></i></a>
                        <form method="POST" action="{{route('logout')}}"" id="logout">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            @endif

            <form class="d-flex py-2">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>

        <div class="d-flex">

            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            @guest
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Registrati</a>
            @endguest

        </div>

        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> --}}

    </div>
</nav>
