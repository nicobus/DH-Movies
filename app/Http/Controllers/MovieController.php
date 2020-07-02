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
}
