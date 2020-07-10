@extends('layouts.layout')
@section('titulo')
Registro usuario | DH-Movies
@endsection
@section('contenidoPrincipal')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        @include('parciales._cuerpoFormularioUsuario')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
