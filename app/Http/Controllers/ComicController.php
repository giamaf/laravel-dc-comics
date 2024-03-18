<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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

        // Effettuo la validazione dei valori arrivati dal form
        $request->validate([
            'title' => 'required|string|unique:comics',
            'series' => 'string',
            'description' => 'string|unique:comics',
            'thumb' => 'nullable|url:http,https',
            'price' => 'required|numeric|min:1|max:1000',
            'type' => 'string',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string',
        ]);

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
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // Effettuo la validazione dei valori arrivati dal form
        $request->validate([
            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'series' => 'string',
            'description' => ['string', Rule::unique('comics')->ignore($comic->id)],
            'thumb' => 'nullable|url:http,https',
            'price' => 'required|numeric|min:1|max:1000',
            'type' => 'string',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string',
        ],
        [
            'title.required' => 'ATTENTION! Required field',
            'title.unique' => "The '$request->title' already exist",
        ]);
        
        // Prendo i dati del form
        $data = $request->all();
        
        //! Due strade:

        //todo EVENTUALI MODIFICHE
        //# 1) Popolo il db e salvo in due passaggi
        //# $comic->fill();
        //# $comic->save();

        //# 1) Popolo il db e salvo in un colpo solo
        $comic->update($data);


        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //! Opzione 1 con solo l'id come parametro della funzione (scrivo di più)
        // $team = Team::findOrFail($id);
        // $team->delete();

        //! Opzione 2 con il fumetto come parametro della funzione
        $comic->delete();

        // Reindirizzo alla pagina index
        // Con ->with passiamo un flash message in una station bag
        return to_route('comics.index')
        ->with('message', "$comic->title delete successful")
        ->with('type', 'success');
    }
}