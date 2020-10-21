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

// home page
Route::get('/', function () {
    return view('home');
})->name("home");

// prodotti
Route::get('/prodotti', function () {
    // link al db paste
    $data = config('paste');

    // genero array per richiamare i tipi di paste
    $paste = [];
    foreach ($data as $key => $prodotto) {
      $prodotto["id"] = $key;
      $paste[$prodotto["tipo"]][] = $prodotto;
    }

    // link alla pag prodotti con link al db paste
    return view('prodotti', ["paste" => $paste]);
})->name("prodotti");

// prodotto singolo
Route::get('/prodotti/show/{id}', function ($id) {

  $prodotto = config("pasta.$id");

  return view('prodotto-singolo', ["data" => $prodotto]);
})->where('id', '[0-9]+')-> name("dettaglio-prodotto");

// news
Route::get('/news', function () {
    return view('news');
})->name("news");
