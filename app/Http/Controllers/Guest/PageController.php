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

        // preleviamo solo un film specifico dal DB
        // il metodo ->first() ci preleva il primo elemento risultante dalla query
        // $movie = Movie::where('id', 4)->first();

        $movies = Movie::where('id', '>', 1)->orderBy('title')->get();


        // dd($movie);
        return view('home', compact('movies'));
    }



    public function showMovie() {

        // preleviamo tutti i film dalla tabella movies

        // il metodo all() ci restituisce tutte le righe della tabella collegata al Model
        $movies = Movie::all();

        // dd($movies);

        return view('allFilms', compact('movies'));
    }


    public function addMovie() {
        // codice per aggiungere un libro

        // creiamo un nuovo film
        $movie = new Movie();
        $movie->title = "Parasite";
        $movie->description = "Una famiglia coreana cerca rivalsa tramite imbroglio";
        
        $movie->save();

        return "pagina per aggiugnere libro";
    }

}
