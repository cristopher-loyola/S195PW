<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


route::view('/','inicio')->name('rutainicio');
route::view('/formulario', 'formularios')->name('rutaformularios');
route::view('/clientes','clientes')->name('rutaclientes');
