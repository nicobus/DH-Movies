<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use Illuminate\Http\Request;
use App\Movie;


class MovieController extends Controller
{
    public function show($id){
        $movie = Movie::find($id);
        $vac = compact("movie");
        return view("paginas.detallePelicula", $vac);
    }
    public function create(){
        $movie = new Movie();
        $vac = compact('movie');
        return view('paginas.agregarPelicula', $vac);
    }
    public function list(){
        $movies = Movie::paginate(6);
        $titulo = 'All movies';
        $vac = compact('movies', 'titulo');
        return view('paginas.listaPeliculas', $vac);
    }
    public function byGenre($genero){
        $movies =  Movie::join('genres', 'genres.id', '=', 'movies.genre_id')
        ->where('genres.name', '=', "$genero")
        ->paginate(6);
        $titulo = $genero . " movies";
        $vac = compact("movies", "titulo");
        return view("paginas.listapeliculas", $vac);
    }
    public function byTitle(Request $req){
        $title = $req->get('movieTitle');
        $movies = Movie::where("title", "like", "%$title%")
        ->orderBy("release_date")
        ->paginate(6);
        $titulo ='Resultados busqueda';
        $vac = compact('movies', 'titulo');
        return view("paginas.listaPeliculas", $vac);
    }

    public function store(MovieRequest $req){
        $poster = null;
        if ($req['poster'] != null) {
            $poster = basename($req->file("poster")->store("public"));
        }
        $movie = new Movie();
        $movie->poster = $poster;
        $movie->title = $req['title'];
        $movie->rating = $req['rating'];
        $movie->awards = $req['awards'];
        $movie->release_date = $req['release_date'];
        $movie->length = $req['length'];
        $movie->genre_id = $req['genre_id'];
        $movie->save();
        return redirect(route('peliculas'));
    }

    public function edit($id){
        $movie = Movie::find($id);
        $vac = compact('movie');
        return view('paginas.modificarPelicula', $vac);
    }
    public function update(MovieRequest $req, $id){
        $poster = null;
        if ($req['poster'] != null) {
            $poster = basename($req->file("poster")->store("public"));
        }
        $movie = Movie::find($id);
        $movie->poster = $poster;
        $movie->title = $req['title'];
        $movie->rating = $req['rating'];
        $movie->awards = $req['awards'];
        $movie->release_date = $req['release_date'];
        $movie->length = $req['length'];
        $movie->genre_id = $req['genre_id'];
        $movie->save();
        return redirect(route('pelicula.detalle', ['id' => $movie->id]));
    }
    public function destroy(Request $req){
        $movie = Movie::find($req['movie_id']);
        $movie->delete();
        return redirect(route('peliculas'));
    }
    public function listApi(){
        $movies = Movie::All();
        return json_encode($movies);
    }
}
