<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home()
    {
        return view('inicio');    
    }

    public function formularios()
    {
        return view('formularios');

    }
    public function consulta()
    {
        return view('clientes');

    }
}
