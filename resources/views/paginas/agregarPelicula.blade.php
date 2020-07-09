@extends('layouts.layout')
@section('titulo')
Add movie | DH-Movies
@endsection
@section('contenidoPrincipal')
<main>
  <div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar película</div>
                <div class="card-body">
                    <form method="POST" action="/agregarpelicula" enctype="multipart/form-data">
                      @include('parciales._cuerpoFormularioPelicula', ['btntext'=>'Agregar'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  
</main>
@endsection