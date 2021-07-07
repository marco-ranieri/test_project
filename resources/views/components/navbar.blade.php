<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand px-2" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="row container-fluid px-0 align-items-center">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-2">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Link</a>
                </li>
                @if (Auth::user())
                    <div class="dropdown px-2">
                        <div class="dropdown-toggle py-2" id="navbarUserDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hello, {{Auth::user()->name}}</div>
                            <ul class="dropdown-menu" aria-labelledby="navbarUserDropdown">
                                @if (!(Auth::user()->is_revisor))
                                    <li class="py-2 ps-2">
                                        <a class="text-dark" href="{{route('revisor.request')}}">Diventa Revisore!</a>
                                    </li>
                                @endif
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="{{route('announcement.new')}}">Nuovo annuncio</a>
                                </li>
                                <li class="py-2 ps-2">
                                    <a class="text-dark" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout').submit();">Logout <i class="fas fa-sign-out-alt"></i></a>
                                    <form method="POST" action="{{route('logout')}}"" id="logout">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                    </div>
                    @endif

                    @if (Auth::user() && Auth::user()->is_revisor)
                        <a href="{{route('revisor.index')}}">{{\App\Models\Announcement::toBeRevisionedCount()}}</a>
                        <a href="{{route('revisor.bin')}}">{{\App\Models\Announcement::rejectedCount()}}</a>



                    @endif

                    @guest
                    <a href="{{route('login')}}">Login</a>
                    <a href="{{route('register')}}">Registrati</a>
                    @endguest
                </ul>
            </div>
            <div class="dropdown px-2">
                <div class="dropdown-toggle py-2" id="navbarCategoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorie</div>
                    <ul class="dropdown-menu" aria-labelledby="navbarCategoriesDropdown">
                        @foreach ( $categories as $category )
                            <li class="py-2 ps-2">
                                <a class="text-dark" href={{ route( 'announcements.by.category', [$category->name, $category->id]) }}>{{$category->name}}</a>
                            </li>

                        @endforeach
                    </ul>
            </div>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
