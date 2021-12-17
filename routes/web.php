<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UniqueActionController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;
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
    return view('base');
});

Route::get('/test', [MainController::class, 'index']);

Route::get('/unique', UniqueActionController::class);

Route::resource('articles', ArticleController::class);
