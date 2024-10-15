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
    public function procesarCliente(Request $peticion)
    {
        //return'Llego tu formulario al controlador';


        //imprimimos todo lo que vienen en la peticion
        // return $peticion->all();

        // return $peticion->path();

        //imprime la url completa de la peticion
        //return$peticion->url();

        return $peticion->ip();
    }
}
