<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //! Recupero il file data_card per renderizzare le cards
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Prendo i dati del form
        $data = $request->all();

        // Istanzio un nuovo Comic
        $comic = new Comic();

        //todo ----------------------------------------------------------
        //todo ...quando le chiavi del db e del frontend sono uguali
        //todo fillo tutto in un colpo
        //! PER FILLARE TUTTO IN UN COLPO BISOGNA INSERIRE NEL MODEL COMIC LA PROPRIETA' fillable()
        $comic->fill($data);

        //todo ...quando le chiavi del db e del frontend sono diverse
        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->type = $data['type'];
        // $comic->artists = $data['artists'];
        // $comic->writers = $data['writers'];
        //todo ----------------------------------------------------------

        $comic->save();

        return to_route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}