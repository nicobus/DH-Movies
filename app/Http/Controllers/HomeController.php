<?php

namespace App\Http\Controllers;

use App\Movie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /*   public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $moviesRandom = Movie::inRandomOrder()->take(5)->get();
        $moviesNovedades = Movie::orderBy('id', 'desc')->take(5)
        ->get();
        $vac = compact('moviesRandom', 'moviesNovedades');
        return view('paginas.home', $vac);
    }
}
