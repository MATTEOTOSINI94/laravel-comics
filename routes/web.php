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

Route::get('/caracheters', function () {
    $filmDati = config("comics");
    return view('homepage',["film"=>$filmDati]);
})->name("caracheters");


Route::get('/comics', function () {
    return view('comicpage');
})->name("comics");