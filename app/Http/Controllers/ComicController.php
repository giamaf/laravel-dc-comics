<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    // Funzione per mostrare la lista delle squadre
    public function index()
    {    
    //! Recupero il file data_card per renderizzare le cards
    $comics = Comic::all();
    return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic){
    
    return view('comics.show', compact('comic'));
    }
}