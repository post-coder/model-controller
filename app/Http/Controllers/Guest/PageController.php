<?php

// serve per non dover ogni volta inserire i percorsi degli eventuali altri elementi che vorremmo importare qui dentro
namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    // creo una funzione *pubblica* chiamata index() in cui ci inserisco la logica che voglio eseguire
    public function index() {
        return view('home');
    }



    public function showMovie() {

        // preleviamo tutti i film dalla tabella movies

        // il metodo all() ci restituisce tutte le righe della tabella collegata al Model
        $movies = Movie::all();

        // dd($movies);

        return view('film', compact('movies'));
    }

}
