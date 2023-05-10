<?php

use App\Http\Controllers\Professor\ProfessorController;
use App\Http\Controllers\Student\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// aprire un array, inserire la classe del controller come primo parametro (NomeController::class)
// ,
// nome della funzione da chiamare
Route::get('/', [ProfessorController::class, 'home'])->name('home');

Route::get('/professors', [ProfessorController::class, 'index'])->name('index');

Route::get('/singleProfessor', [ProfessorController::class, 'show'])->name('show');

Route::get('/students', [StudentController::class, 'index'])->name('student.index');

Route::get('/createStudent', [StudentController::class, 'create'])->name('student.create');

