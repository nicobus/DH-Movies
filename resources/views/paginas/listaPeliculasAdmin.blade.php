@extends('layouts.layout')
@section('titulo')
 {{$titulo}} | DH-Movies
@endsection
@section('contenidoPrincipal')
<main>
    <div class="alert alert-danger" role="alert">
        <span>Seleccione o busque la pelicula que desea editar/eliminar.</span>
        <form action="{{route('porTitulo.admin')}}" class="form-inline my-4 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2 my-2" type="search" placeholder="Ingrese el título de la película..."
                aria-label="Search" name="movieTitle" id="movieTitle">
            <button class="btn btn-buscar my-2 my-sm-0" type="submit">BUSCAR PELICULA</button>
        </form>
      </div>
<div class="peliculas">
    <h1 class="m-4">{{$titulo}}</h1>
    <div class="row">
        @foreach ($movies as $movie)
            @include('parciales._cardMovieBasic')
        @endforeach
    </div>
    <p>{{$movies->links()}}</p>
</div>
</main>
@endsection