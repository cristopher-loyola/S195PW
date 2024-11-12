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
        public function procesarLibro(Request $peticion)
        {
            $validacion = $peticion->validate([
                'txtisbn' => 'required|min:3|max:255',
                'txttitulo' => 'required|min:3|max:255',
                'txtautor' => 'required|min:3|max:255',
                'txtpaginas' => 'required|min:1|max:255',
                'txtanio' => 'required|min:4|max:255',
                'txteditorial' => 'required|min:3|max:255',
                'txtemail' => 'required|email',
            ]);

            $libro = $peticion->input('txttitulo');
        
            session()->flash('exito', 'Todo correcto: ' . $libro . ' Libro guardado');


            
            return to_route('rutaregistro');
        }
}
