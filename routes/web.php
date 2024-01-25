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
// sitodiluca/
Route::get('/', function () {
    return view('home', ['titolo' => 'Presto.it']);
}) -> name('home');

// sitodiluca/articoli
Route::get('/articoli', function () {
    $arrayProdotti = [['title' => 'Prodotto 1', 'category' => 'Jewelery', 'description' => 'Descrizione 1'], 
    ['title' => 'Prodotto 2', 'category' => 'Electronics', 'description' => 'Descrizione 2'], 
    ['title' => 'Prodotto 3', 'category' => 'Clothes', 'description' => 'Descrizione 3']];


    return view('articoli', ['titolo' => 'Articoli', "arrayProdotti" => $arrayProdotti, "Errore" => "Nessun articolo disponibile"]);
})-> name('articoli');


// sitodiluca/articoli/articolo_dettaglio
Route::get('/articoli/{id}', function ($id) {
    $arrayProdotti = [['title' => 'Prodotto 1', 'category' => 'Jewelery', 'description' => 'Descrizione 1'], 
    ['title' => 'Prodotto 2', 'category' => 'Electronics', 'description' => 'Descrizione 2'], 
    ['title' => 'Prodotto 3', 'category' => 'Clothes', 'description' => 'Descrizione 3']];

    return view('articoli_dettaglio', ['titolo' => 'Articolo Dettaglio', "arrayProdotti" => $arrayProdotti[$id]]);
})-> name('articoli.dettaglio');







// sitodiluca/chiSono
route::get('/chiSono', function () {
    return view('chi_sono', ['descrizione' => "Luca è un programmatore full stack con competenze avanzate sia nel frontend che nel backend. La sua esperienza pluriennale lo ha reso esperto nell'utilizzo di diversi linguaggi di programmazione e strumenti moderni. La sua dedizione all'innovazione e la capacità di gestire progetti complessi lo distinguono come professionista versatile e appassionato nel mondo dello sviluppo software."]);
})->name('chiSono');

