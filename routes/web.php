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
});

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