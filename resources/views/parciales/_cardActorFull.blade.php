<div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img class="card-img" src="/storage/sin-imagen.png" alt="poster-pelicula">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h2 class="card-title">{{$actor->getFullName()}}</h2>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Rating: {{$actor->rating}}</li>
                <li class="list-group-item">Peliculas en las que actuo:
                    @foreach ($actor->movies as $movie)
                    {{$movie->title}}
                    @endforeach
                </li>
                <li class="list-group-item">Peliculas favoritas:
                    @foreach ($actor->favoriteMovies as $movie)
                    {{$movie->title}}
                    @endforeach
                </li>
            </ul>
        </div>
    </div>
</div>
