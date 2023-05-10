<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    // creiamo le funzioni che richiameremo dalle rotte
    // così non abbiamo codice di recupero dati e logica dentro le rotte
    public function home() {
        // passare i link della navbar
        $data = config('db');

        return view('home', compact('data'));
    }

    public function index() {
        // questa funzione visualizzerà tutti i professori
        $data = config('db');

        // qui farò l'accesso al db
        $teachers  = Teacher::where('office_number', 101)->get();

        return view('professor/index', compact('data', 'teachers'));
    }


    public function show() {
        // professore singolo
        $data = config('db');

        return view('professor/show', compact('data'));
    }
}
