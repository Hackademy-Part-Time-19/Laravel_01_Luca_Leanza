<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        $titolo = 'Presto.it';
        
        return view('home', compact('titolo'));
    }

    public function chiSono(){
        return view('chi_sono', ['descrizione' => "Luca è un programmatore full stack con competenze avanzate sia nel frontend che nel backend. La sua esperienza pluriennale lo ha reso esperto nell'utilizzo di diversi linguaggi di programmazione e strumenti moderni. La sua dedizione all'innovazione e la capacità di gestire progetti complessi lo distinguono come professionista versatile e appassionato nel mondo dello sviluppo software."]);
    }
    
}
