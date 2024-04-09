<?php

use App\Http\Controllers\Guest\PageController;
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

// lanciare la funzione index del pagecontroller quando visitiamo l'homepage
Route::get('/', [PageController::class, 'index'])->name('home');


// rotta per seconda pagina
Route::get('/film', [PageController::class, 'showMovie']);
