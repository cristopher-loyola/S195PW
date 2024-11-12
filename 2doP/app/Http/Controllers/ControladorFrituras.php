<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ControladorFrituras extends Controller

{
public function abrirFormulario()
{

    return view('formFrituras');
}

public function procesarFritura(Request $peticion)
{       
    $validacion = $peticion->validate([
        
        'nombre' => 'required|min:4|max:255',
        'sabor' => 'required',
        'peso' => 'required',
    ]);
    
    $usuario = $peticion->input('nombre');
    
    session()->flash('exito', 'Se guardo el usuario: ' .$usuario);
    
    return view('formfrituras');
}
}
