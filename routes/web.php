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

//* GET
Route::get('/home', HomeController::class)->name('other_route.home'); //todo Rotta per la home
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index'); //todo Rotta per la lista dei comics
//! ATTENZIONE: le rotte statiche con lo stesso metodo (es: GET) devono stare sopra alle rotte dinamiche altrimenti non ci entrerò mai 
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create'); //todo Rotta per la creazione di un nuovo comic
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show'); //# Rotta dinamica per i singoli comics
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit'); //# Rotta dinamica per la modifica di un comic

//* POST
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store'); //todo Rotta per il salvataggio di un comic






//*--------------------- Rotte statiche -------------------------

Route::get('/characters', [RouteController::class, 'characters'])->name('other_route.characters');
Route::get('/movies', [RouteController::class, 'movie'])->name('other_route.movies');
Route::get('/tv', [RouteController::class, 'tv'])->name('other_route.tv');
Route::get('/games', [RouteController::class, 'games'])->name('other_route.games');
Route::get('/collectibles', [RouteController::class, 'collectibles'])->name('other_route.collectibles');
Route::get('/videos', [RouteController::class, 'videos'])->name('other_route.videos');
Route::get('/fans', [RouteController::class, 'fans'])->name('other_route.fans');
Route::get('/news', [RouteController::class, 'news'])->name('other_route.news');
Route::get('/shop', [RouteController::class, 'shop'])->name('other_route.shop');

//*--------------------------------------------------------------