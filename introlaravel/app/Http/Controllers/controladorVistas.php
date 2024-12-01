<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class controladorVistas extends Controller
{

    public function formularios()
    {
 

    }
    public function consulta()
    {
        

    }

    public function procesarCliente(ValidadorCliente $request)
    {
        $usuario = $request->input('txtnombre');
    
        session()->flash('exito', 'Se guardó el usuario: ' . $usuario);
    
        return to_route('rutaformulario');
    }

}

