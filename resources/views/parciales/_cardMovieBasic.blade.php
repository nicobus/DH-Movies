<div class="card mb-3 col-sm-12 col-md-6 col-lg-6 col-xl-4" style="max-width: 540px;">
    <a class="link-detalle-movie" href="{{route('pelicula.detalle', ['id' => $movie->id])}}"></a>
    <div class="row no-gutters">
        <div class="col-md-4">
            <img class="card-img" src="/storage/sin-imagen.png" alt="poster-pelicula">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                @if ($movie->genre)
                <p class="card-text">{{$movie->genre->name}}</p>
                @else
                <p class="card-text">Sin genero</p>
                @endif
            </div>
        </div>
    </div>
</div>
