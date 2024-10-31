<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    
        public function welcome()
        {
            return view('welcome');    
        }
    
        public function registro()
        {
            return view('registro');
    
        }
        public function procesarCliente()
        {
            $validacion = $peticion->validate([
                'txtnombre' => 'required|min:3|max:255',
                'txtapellido' => 'required|min:3|max:255',
                'txtcorreo' => 'required|email:rfc,dns',
                'txttelefono' => 'required|min:3|max:255'
            ]);
        }
}
