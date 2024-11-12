<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorFrituras;

 Route::get('/', function () {
    return view('formFrituras');
});

Route::post('/enviar',[controladorFrituras::class,'procesarFritura'])->name('procesar');