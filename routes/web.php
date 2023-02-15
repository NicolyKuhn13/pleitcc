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

use App\Http\Controllers\EditorController;

Route::get('/', [EditorController::class, 'index']);
Route::get('/parecer', [EditorController::class, 'parecer']);
Route::get('/avaliativa', [EditorController::class, 'avaliativa']);
Route::get('/planoaula', [EditorController::class, 'planoaula']);
Route::get('/login', [EditorController::class, 'login']);
Route::get('/portfolio', [EditorController::class, 'portfolio']);
Route::get('/cadernoregistro', [EditorController::class, 'cadernoregistro']);
