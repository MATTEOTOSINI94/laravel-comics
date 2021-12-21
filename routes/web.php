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
    $filmDati = config("comics");
    return view('homepage',["film"=>$filmDati]);
})->name("home");

Route::get('/fumetti/{id?}', function ($id) {
    $filmDati = config("comics");
    if (is_numeric($id) && $id < count($filmDati) ) {
        $fumetto=$filmDati[$id];
        return view('fumetti',["fumetti"=>$fumetto]);
    }
    else(abort("404"));
  
})->name("fumetti");

Route::get('/comics', function () {
    return view('comicpage');
})->name("comics");

Route::get('/movie', function () {
    return view('movie');
})->name("movies");

Route::get('/tv', function () {
    return view('tvpage');
})->name("tv");

Route::get('/game', function () {
    return view('game');
})->name("games");

Route::get('/collectible', function () {
    return view('collectibles');
})->name("collectibles");

Route::get('/video', function () {
    return view('videopage');
})->name("video");


Route::get('/fans-page', function () {
    return view('fans');
})->name("fans");


Route::get('/news-page', function () {
    return view('newspage');
})->name("news");


Route::get('/shop', function () {
    return view('shoppage');
})->name("shop");




