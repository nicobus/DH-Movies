@extends('layouts.layout')
@section('titulo')
Movie | DH-Movies
@endsection
@section('contenidoPrincipal')
<main>
  @include('parciales._cardMovieFull')
</main>
@endsection