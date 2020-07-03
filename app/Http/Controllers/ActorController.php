<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function show($id){
        $actor = Actor::find($id);
        $vac = compact("actor");
        return view("paginas.detalleActor", $vac);
    }
}
