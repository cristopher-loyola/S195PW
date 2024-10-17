<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

route::view('/','welcome')->name('rutainicio');
route::view('/repaso1','repaso1')->name('rutaRepaso1');
