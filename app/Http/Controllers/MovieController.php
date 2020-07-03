<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class MovieController extends Controller
{
    public function show($id){
        $movie = Movie::find($id);
        $vac = compact("movie");
        return view("paginas.detallePelicula", $vac);
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

}
