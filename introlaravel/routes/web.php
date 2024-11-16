<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteControler;

// rutas para trabajar con controlador






//Rutas de clienteController
Route::get('/create',[clienteControler::class,'create'])->name('rutaformulario');

Route::post('/cliente',[clienteControler::class,'store'])->name('procesar');

Route::get('/cliente',[clienteControler::class,'index'])->name('rutaclientes');

Route::get('/',[controladorVistas::class,'home'])->name('rutainicio');



// Route::get('/', function () {
//     return view('welcome');
// });


// route::view('/','inicio')->name('rutainicio');
// route::view('/formulario', 'formularios')->name('rutaformularios');
// route::view('/clientes','clientes')->name('rutaclientes');
route::view('/componentes','componentes')->name('rutacomponentes');

