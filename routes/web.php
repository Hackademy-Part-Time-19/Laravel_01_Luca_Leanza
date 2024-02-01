<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
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
Route::get('/',[PageController::class, 'homepage'])->name('home'); 
 

// sitodiluca/articoli
Route::get('/articoli',[ArticleController::class, 'index'])-> name('articoli');


// sitodiluca/articoli/articolo_dettaglio
Route::get('/articoli/{id}', [ArticleController::class, 'show'])-> name('articoli.dettaglio');

// sitodiluca/chiSono
route::get('/chiSono',[PageController::class, "chiSono"])->name('chiSono');

// sitodiluca/chiSono metodo post

route::post("/'chiSono'/invio",[MailController::class, "sendContact"])->name('contact.send');

// sitodiluca/articoli/{category}

route::get('/articoli/category/{category}', [ArticleController::class, 'byCategory'])->name('articoli.category');

