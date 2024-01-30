<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller{
    private $arrayProdotti = [
    ['title' => 'Bracciale', 'category' => 'Jewelery', 'description' => 'Descrizione 1'], 
    ['title' => 'Pc portatile', 'category' => 'Electronics', 'description' => 'Descrizione 2'], 
    ['title' => 'Pantaloni', 'category' => 'Clothes', 'description' => 'Descrizione 3'],
    ['title' => 'Maglietta', 'category' => 'Clothes', 'description' => 'Descrizione 4']
    ];

    private $arrayCategorie = ["Jewelery", "Electronics", "Clothes"];



    public function index(){
        return view('articoli', ['titolo' => 'Articoli', "arrayProdotti" => $this->arrayProdotti, "Errore" => "Nessun articolo disponibile", "arrayCategorie" => $this->arrayCategorie]);
    }

    public function show($id){
        return view('articoli_dettaglio', ['titolo' => 'Articolo Dettaglio', "arrayProdotti" => $this->arrayProdotti[$id]]);
    }

    public function byCategory ($category){
        $articoliFiltrati = [];
        foreach($this->arrayProdotti as $articolo){
            if($articolo['category'] == $category){
                $articoliFiltrati[] = $articolo;
            }
        }
        return view("articoli-byCategory", ["arrayProdotti" => $articoliFiltrati]);
    }
    

}

