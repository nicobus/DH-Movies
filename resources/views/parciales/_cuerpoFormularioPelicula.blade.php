@csrf

<div class="form-group row">
    <label for="title" class="col-md-4 col-form-label text-md-right">Título:</label>
    <div class="col-md-6">
        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
            placeholder="Ingrese el título de la película..." name="title" value="{{old('title', $movie->title)}}">
        @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="rating" class="col-md-4 col-form-label text-md-right">Rating:</label>
    <div class="col-md-6">
        <input id="rating" type="text" class="form-control @error('rating') is-invalid @enderror"
            placeholder="Seleccione el rating de la película..." name="rating"
            value="{{old('rating', $movie->rating)}}">
        <input type="range" class="custom-range" min="0" max="10" value="{{old('rating', $movie->rating)}}" step="0.1"
            id="rating-range" name="rating-range" oninput="actualizarRating(value)">
        @error('rating')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="awards" class="col-md-4 col-form-label text-md-right">Premios:</label>
    <div class="col-md-6">
        <input id="awards" type="number" class="form-control @error('awards') is-invalid @enderror"
            placeholder="Ingrese la cantidad de premios..." name="awards" value="{{old('awards', $movie->awards)}}">
        @error('awards')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="release_date" class="col-md-4 col-form-label text-md-right">Fecha de lanzamiento:</label>
    <div class="col-md-6">
        <input placeholder="Seleccione la fecha de lanzamiento..." type="date" id="release_date" name="release_date"
            class="form-control @error('release_date') is-invalid @enderror"
            value="{{old('release_date', $movie->release_date)}}">
        @error('release_date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="length" class="col-md-4 col-form-label text-md-right">Duracion:</label>
    <div class="col-md-6">
        <input id="length" type="text" class="form-control @error('length') is-invalid @enderror"
            placeholder="Ingrese la duracion en minutos..." name="length" value="{{old('length', $movie->length)}}">
        @error('length')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="genre_id" class="col-md-4 col-form-label text-md-right">Género:</label>
    <div class="col-md-6">
        <select class="form-control custom-select mr-sm-2 @error('genre_id') is-invalid @enderror" id="genre_id"
            name="genre_id">
            @if (old('genre_id'))
            <option value="{{$genres[old('genre_id')-1]->id}}" selected>{{$genres[old('genre_id')-1]->name}}</option>
            @else
            @if ($movie->genre != null)
            <option value="{{$movie->genre->id}}" selected>{{$movie->genre->name}}</option>
            @else
            <option value="" selected>Seleccione el género de la pelicula</option>
            @endif
            @endif
            @foreach ($genres as $genre)
            <option value="{{$genre->id}}">{{$genre->name}}</option>
            @endforeach
            <option value=""><a href="">Agregar género</a></option>
        </select>
        @error('genre_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="poster" class="col-md-4 col-form-label text-md-right">Poster:</label>
    <div class="col-md-6">
        <input type="file" class="form-control-file" id="poster" name="poster">
        @error('genre_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-3 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{$btntext}}
        </button>
    </div>
</div>
