@extends('layouts.layout')
@section('titulo')
Home | DH-Movies
@endsection
@section('contenidoPrincipal')
<main>
    @if(session()->has('message'))
    <div class="alert alert-danger" role="alert">
        {{ session()->get('message') }}
      </div>
@endif
    {{-- inicio 5 peliculas random --}}
    <div class="peliculas mx-4">
        <h2 class="m-3">Peliculas</h2>
        <div class="row">
            @foreach ($moviesRandom as $movie)
            @include('parciales._cardMovieBasic')
            @endforeach
        </div>
    </div>
    {{-- fin 5 peliculas random --}}
    {{-- inicio 5 ultimas peliculas --}}
    <div class="peliculas mx-4">
        <h2 class="m-3">Novedades</h2>
        <div class="row">
            @foreach ($moviesNovedades as $movie)
            @include('parciales._cardMovieBasic')
            @endforeach
        </div>
    </div>
    {{-- fin 5 ultimas peliculas --}}
</main>
@endsection
