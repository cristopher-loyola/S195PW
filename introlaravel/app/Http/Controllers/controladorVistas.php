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
    public function procesarCliente(Request $peticion)
    {       
        $validacion = $peticion->validate([
            'txtnombre' => 'required|min:3|max:255',
            'txtapellido' => 'required|min:3|max:255',
            'txtcorreo' => 'required|email:rfc,dns',
            'txttelefono' => 'required|min:3|max:255'
        ]);
        
        $usuario = $peticion->input('txtnombre');
        
        session()->flash('exito', 'Se guardo el usuario: ' .$usuario);
        
        return to_route('rutaformulario');
    }

}
