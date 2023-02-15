<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function parecer() {
        return view('parecer');
    }

    public function avaliativa() {
        return view('avaliativa');
    }

    public function cadernoregistro() {
        return view('cadernoregistro');
    }

    public function portfolio() { 
        return view('portfolio');
    }

    public function planoaula() {
        return view('planoaula');
    }

    public function login() {
        return view('login');
    }
}
