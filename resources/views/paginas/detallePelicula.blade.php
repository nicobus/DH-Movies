@extends('layouts.layout')
@section('titulo')
Movie ! DH-Movies
@endsection
@section('contenidoPrincipal')
<main>
    <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img class="card-img" src="/storage/sin-imagen.png" alt="poster-pelicula">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$movie->title}}</h5>
              @if ($movie->genre)
              <p class="card-text">Genero: {{$movie->genre->name}}</p>
              @else
              <p class="card-text">Sin genero</p>
              @endif
              <p class="card-text">Fecha de lanzamiento: {{$movie->release_date}}</p>
              <p class="card-text">Duracion: {{$movie->length}} minutos</p>
              <p class="card-text">Actores:
              @foreach ($movie->actors as $actor)
                  
                      {{$actor->getFullName()}}
                
              @endforeach
            </p>
            </div>
          </div>
        </div>
      </div>
</main>
@endsection