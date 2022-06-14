<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{route('register')}}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link"href="">Benvenuto {{Auth::user()->name}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('addComic')}}">Inserisci il tuo fumetto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" method="POST" action="{{route('logout')}}" class="d-none">
                @csrf
              </form>
            </li>
          @endguest
          <li class="nav-item">
            <a class="nav-link" href="{{route('allComics')}}">Catalogo fumetti</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>