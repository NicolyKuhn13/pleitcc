<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function index() {
        $nome = "Nicoly";
        $idade = 18;
    
        $arr = [1,2,3,4,5];
    
        return view('welcome',
            [
                'nome' => $nome, 
                'idade' => $idade,
                'arr' => $arr,
            ]
        );
    }

    public function parecer() {
        $nome = "Nicoly";
        $idade = 18;
    
        $arr = [1,2,3,4,5];
    
        return view('parecer',
            [
                'nome' => $nome, 
                'idade' => $idade,
                'arr' => $arr,
            ]
        );
    }

    public function avaliativa() {
        $nome = "Nicoly";
        $idade = 18;
    
        $arr = [1,2,3,4,5];
    
        return view('avaliativa',
            [
                'nome' => $nome, 
                'idade' => $idade,
                'arr' => $arr,
            ]
        );
    }

    public function planoaula() {
        $nome = "Nicoly";
        $idade = 18;
    
        $arr = [1,2,3,4,5];
    
        return view('planoaula',
            [
                'nome' => $nome, 
                'idade' => $idade,
                'arr' => $arr,
            ]
        );
    }

    public function login() {
        $nome = "Nicoly";
        $idade = 18;
    
        $arr = [1,2,3,4,5];
    
        return view('login',
            [
                'nome' => $nome, 
                'idade' => $idade,
                'arr' => $arr,
            ]
        );
    }
}
