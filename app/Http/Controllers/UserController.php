<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        session()->flush();
        return redirect(route('home'));
    }
}
