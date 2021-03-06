<?php

use App\Http\Controllers\ArticleControler;
use App\Http\Controllers\Auth\GithubController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home'])->name('home');;
Route::get('/articles', [MainController::class, 'index'])->name('articles');
Route::get('/articles/{article:slug}', [MainController::class, 'show'])->name('article');

Auth::routes();

//Route::prefix('admin')->middleware('admin')->group(function () {
//    Route::resource('articles', ArticleControler::class)->except([
//        'show'
//    ]);
//});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/auth/github', [ GithubController::class, 'auth' ])->name('github.auth');
Route::get('/auth/github/redirect', [ GithubController::class, 'redirect' ])->name('github.redirect');
