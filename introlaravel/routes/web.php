<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
// rutas para trabajar con controlador
Route::get('/',[controladorVistas::class,'home'])->name('rutainicio');
Route::get('/formulario',[controladorVistas::class,'formularios'])->name('rutaformularios');
Route::get('/clientes',[controladorVistas::class,'consulta'])->name('rutaclientes');
Route::post('/enviar',[controladorVistas::class,'procesarCliente'])->name('procesar');

// Route::get('/', function () {
//     return view('welcome');
// });


// route::view('/','inicio')->name('rutainicio');
// route::view('/formulario', 'formularios')->name('rutaformularios');
// route::view('/clientes','clientes')->name('rutaclientes');
route::view('/componentes','componentes')->name('rutacomponentes');

