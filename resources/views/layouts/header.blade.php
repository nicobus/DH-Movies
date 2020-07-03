<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark font-weight-bold">
        <a class="navbar-brand" href="{{route('home')}}"><img src="/img/logo.png" width="80" height="80" alt="" loading="lazy"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse my-4" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Titulos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  @foreach ($genres as $genre)
                  <a class="dropdown-item" href="{{route('peliculas.porGenero', ['genero' => $genre->name])}}">{{$genre->name}}</a>
                  @endforeach
                  <a class="dropdown-item" href="{{route('peliculas')}}">Ver Todos</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Series
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Actores
              </a> 
            </li>
          </ul>
          <form action="{{route('peliculas.porTitulo')}}" class="form-inline my-4 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2 my-2" type="search" placeholder="Ingrese el título de la película..." aria-label="Search" name="movieTitle" id="movieTitle">
            <button class="btn btn-buscar my-2 my-sm-0" type="submit">BUSCAR PELICULA</button>
          </form>
        </div>
      </nav>
</header>