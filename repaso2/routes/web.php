<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/',[controladorVistas::class,'welcome'])->name('rutainicio');
Route::get('/registro',[controladorVistas::class,'registro'])->name('rutaregistro');
Route::post('/enviar',[controladorVistas::class,'procesarLibro'])->name('procesar');
