<form class="form-eliminar d-inline-flex m-0" action="/eliminarpelicula" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" name="movie_id" value="{{$movie->id}}">
    <div class="col-md-3 d-inline-flex ml-5 p-0">
        <button type="submit" class="btn btn-danger fa fa-trash btn-eliminar">
        </button>
    </div>
</form>