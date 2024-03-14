<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    // QUI SI INSERISCONO GLI ELEMENTI CHE VOGLIO CONTROLLARE
    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'type', 'artists', 'writers'];

    //! QUI SI INSERISCONO GLI ELEMENTI CHE NON VOGLIO CONTROLLARE (es: array vuoto non controllo nulla)
    protected $guarded = ['_token'];
}