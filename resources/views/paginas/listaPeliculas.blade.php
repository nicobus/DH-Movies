@extends('layouts.layout')
@section('titulo')
 {{$titulo}} | DH-Movies
@endsection
@section('contenidoPrincipal')
<main>
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