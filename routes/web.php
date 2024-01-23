<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', ['titolo' => 'Presto.it']);
});

// sitodiluca/

Route::get('/articoli', function () {
    return view('articoli', ['titolo' => 'Articoli']);
});
// sitodiluca/articoli
route::get('/chiSono', function () {
    return view('chi_sono', ['descrizione' => "Luca è un programmatore full stack con competenze avanzate sia nel frontend che nel backend. La sua esperienza pluriennale lo ha reso esperto nell'utilizzo di diversi linguaggi di programmazione e strumenti moderni. La sua dedizione all'innovazione e la capacità di gestire progetti complessi lo distinguono come professionista versatile e appassionato nel mondo dello sviluppo software."]);
});
// sitodiluca/chiSono