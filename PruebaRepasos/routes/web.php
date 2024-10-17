<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/',[controladorVistas::class,'welcome'])->name('rutainicio');
Route::get('/repaso1',[controladorVistas::class,'repaso1'])->name('rutaRepaso1');


// Route::get('/', function () {
//     return view('welcome');
// });


