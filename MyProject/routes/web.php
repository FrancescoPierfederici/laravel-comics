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
    return view('welcome',["listacomics"=>config("comics")]);
})->name('serie in corso');

Route::get('/info/{id}', function ($id) {
    $comics = config("comics");

    if (!is_numeric($id) || $id < 0 || $id > count($comics) - 1) {
        abort(404);
    }

    $selected = $comics[$id];

    return view("info", ["comic" => $selected]);
})->name('info');


Route::get('/characters', function () {
return view('characters');
})->name('characters');

Route::get('/comics', function () {
return "";
})->name('comics');

Route::get('/movies', function () {
return "";
})->name('movies');

Route::get('/tv', function () {
return "";
})->name('tv');

Route::get('/games', function () {
return "";
})->name('games');

Route::get('/collectibles', function () {
return "";
})->name('collectibles');

Route::get('/video', function () {
return "";
})->name('video');

Route::get('/fans', function () {
return "";
})->name('fans');

Route::get('/news', function () {
return "";
})->name('news');

Route::get('/shop', function () {
return "";
})->name('shop');