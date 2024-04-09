<?php

// serve per non dover ogni volta inserire i percorsi degli eventuali altri elementi che vorremmo importare qui dentro
namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    // creo una funzione *pubblica* chiamata index() in cui ci inserisco la logica che voglio eseguire
    public function index() {
        return view('home');
    }



    public function showMovie() {
        return view('film');
    }

}
