<div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img class="card-img" src="/storage/sin-imagen.png" alt="poster-pelicula">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h2 class="card-title">{{$movie->title}}</h2>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Rating: {{$movie->rating}}</li>
                @if ($movie->genre)
                <li class="list-group-item">Género: {{$movie->genre->name}}</li>
                @else
                <li class="list-group-item">Sin género</li>
                @endif
                <li class="list-group-item">Fecha de lanzamiento: {{$movie->release_date}}</li>
                <li class="list-group-item">Duracion: {{$movie->length}} minutos</li>
                <li class="list-group-item">Actores:
                    @foreach ($movie->actors as $actor)
                    <a href="{{route('actor.detalle', ['id' => $actor->id])}}">{{$actor->getFullName()}}</a>
                    @endforeach
                </li>
            </ul>
        </div>
    </div>
</div>