<?php

use App\Http\Controllers\Guest\MainController;
use Illuminate\Support\Facades\Route;

 


Route::get('/', function () {
    $firstName = 'Gino';
   


    return view('welcome', compact('firstName'));
})->name('home');

Route::get('/trains', [MainController::class, 'index'])->name('train.index');

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
