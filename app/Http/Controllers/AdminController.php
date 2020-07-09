<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class AdminController extends Controller
{
    public function list(){
        $movies = Movie::paginate(6);
        $titulo = 'All movies';
        $vac = compact('movies', 'titulo');
        return view('paginas.listaPeliculasAdmin', $vac);
    }

    public function byTitle(Request $req){
        $title = $req->get('movieTitle');
        $movies = Movie::where("title", "like", "%$title%")
        ->orderBy("release_date")
        ->paginate(6);
        $titulo ='Resultados busqueda';
        $vac = compact('movies', 'titulo');
        return view("paginas.listaPeliculasAdmin", $vac);
    }
}

