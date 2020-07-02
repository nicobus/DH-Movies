@extends('layouts.layout')
@section('titulo')
Home ! DH-Movies
@endsection
@section('contenidoPrincipal')
<main class="color-principal">
    {{-- inicio 5 peliculas random --}}
    <div class="peliculas">
        <h2 class="m-3">Peliculas</h2>
        <div class="row">
            @foreach ($moviesRandom as $movie)
            <a href="{{route('pelicula.detalle', ['id' => $movie->id])}}">
                <div class="card mb-3 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="max-width: 540px;">
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
            </a>
            @endforeach
        </div>
    </div>
    {{-- fin 5 peliculas random --}}
    {{-- inicio 5 ultimas peliculas --}}
    <div class="peliculas">
        <h2 class="m-3">Novedades</h2>
        <div class="row">
            @foreach ($moviesNovedades as $movie)
            <a href="{{route('pelicula.detalle', ['id' => $movie->id])}}">
            <div class="card mb-3 col-sm-12 col-md-6" style="max-width: 540px;">
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
        </a>
            @endforeach
        </div>
    </div>
    {{-- fin 5 ultimas peliculas --}}
</main>
@endsection
