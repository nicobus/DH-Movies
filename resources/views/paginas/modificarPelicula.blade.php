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
                <div class="card-header d-flex">
                    <span class="my-auto mr-auto">
                        Editar Pelicula
                    </span>
                    @include('parciales._FormularioEliminar')
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('pelicula.actualizar', ['id' => $movie->id])}}" enctype="multipart/form-data">
                        @method('PUT')
                        @include('parciales._cuerpoFormularioPelicula', ['btntext'=>'Modificar'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection