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

Route::prefix('admin')->group(function () {
    Route::get('users', function() {
        return response("Hello World", 200);
    });
    Route::get('articles', function() {
        return redirect('/admin/categories', 302);
    });
    Route::get('categories', function() {
        return response() -> json([
            'name'=> 'Eddy',
            'age'=> 32
        ]);
    });
});
