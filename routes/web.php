<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $nome = "Nicoly";
    $idade = 18;

    $arr = [1,2,3,4,5];

    return view('welcome',
        [
            'nome' => $nome, 
            'idade' => $idade,
            'arr' => $arr,
        ]);
});

Route::get('/login', function () {

    return view('login');
});

Route::get('/arquivos', function () {

    $busca = request('search');

    return view('arquivos', ['busca' => $busca]);
});

Route::get('/arquivos/{id}', function ($id) {

    return view('arquivo', 
        [
            'id' => $id,
        ]);
});


