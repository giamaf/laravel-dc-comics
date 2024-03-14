<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ComicController;

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

//todo Rotta per la home
Route::get('/home', HomeController::class)->name('home');

//todo Rotta per la lista dei comics
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

//todo Rotta per la creazione di un nuovo comic
//! ATTENZIONE: le rotte statiche con lo stesso metodo (es: GET) devono stare sopra alle rotte dinamiche altrimenti non ci entrerò mai 
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

//# Rotta dinamica per i singoli comics
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');


//*--------------------- Rotte statiche -------------------------

Route::get('/characters', [RouteController::class, 'characters'])->name('characters');
Route::get('/movies', [RouteController::class, 'movie'])->name('movies');
Route::get('/tv', [RouteController::class, 'tv'])->name('tv');
Route::get('/games', [RouteController::class, 'games'])->name('games');
Route::get('/collectibles', [RouteController::class, 'collectibles'])->name('collectibles');
Route::get('/videos', [RouteController::class, 'videos'])->name('videos');
Route::get('/fans', [RouteController::class, 'fans'])->name('fans');
Route::get('/news', [RouteController::class, 'news'])->name('news');
Route::get('/shop', [RouteController::class, 'shop'])->name('shop');

//*--------------------------------------------------------------