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
    return view('welcome');
});

Route::get('/env', function(){
    // (Dump and Die). Permet d'afficher le contenu d'une variable à l'écran et de terminer l'exécution du programme.
   dd(env('DB_DATABASE'));
});
