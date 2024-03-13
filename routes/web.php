<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dccomics/home', HomeController::class)->name('home');

Route::get('/dccomics/comics', function () {
    //! Recupero il file data_card per renderizzare le cards
    $items = config('card_data');
    return view('comics', compact('items'));
})->name('comics');


//#-------------------- Rotta dinamica --------------------------

  Route::get('/dccomics/comics/card/{index}', function ($index) {
       $items = config('card_data');

       return view('cards.card', ['items' => $items[$index]]);
  })->name('card');

//#--------------------------------------------------------------


//*--------------------- Rotte statiche -------------------------

Route::get('/dccomics/characters', [RouteController::class, 'characters'])->name('characters');
Route::get('/dccomics/movies', [RouteController::class, 'movie'])->name('movies');
Route::get('/dccomics/tv', [RouteController::class, 'tv'])->name('tv');
Route::get('/dccomics/games', [RouteController::class, 'games'])->name('games');
Route::get('/dccomics/collectibles', [RouteController::class, 'collectibles'])->name('collectibles');
Route::get('/dccomics/videos', [RouteController::class, 'videos'])->name('videos');
Route::get('/dccomics/fans', [RouteController::class, 'fans'])->name('fans');
Route::get('/dccomics/news', [RouteController::class, 'news'])->name('news');
Route::get('/dccomics/shop', [RouteController::class, 'shop'])->name('shop');

//*--------------------------------------------------------------