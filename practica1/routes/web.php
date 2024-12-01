<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

route::view('/', 'inicio')->name('rutaInicio');
route::resource('cliente',ClienteController::class);
Route::put('/cliente/{cliente}', [ClienteController::class, 'update'])->name('cliente.update');




