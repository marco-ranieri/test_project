<nav class="topnav">
    <div class="p-2 d-flex justify-content-around">
        <div class="d-flex align-items-center">

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

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

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
    </div>
</nav>







{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid d-flex justify-content-between">
      <a class="navbar-brand" href="#">Navbar</a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>

      </div>
    </div>
  </nav> --}}
