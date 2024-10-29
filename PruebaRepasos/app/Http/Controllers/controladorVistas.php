<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function welcome()
    {
        return view('welcome');    
    }
    public function repaso1(Request $request)
    {
        $resultado = '';

        if ($request->isMethod('post')) {
            $input = $request->input('valor');  
            $Conversion = $request->input('conversion');

            if ($Conversion == 'mb_a_gb') {
                $resultado = $input . ' MB = ' . ($input / 1024) . ' GB';
            } elseif ($Conversion == 'gb_a_mb') {
                $resultado = $input . ' GB = ' . ($input * 1024) . ' MB';
            } elseif ($Conversion == 'gb_a_tb') {
                $resultado = $input . ' GB = ' . ($input / 1024) . ' TB';
            } elseif ($Conversion == 'tb_a_gb') {
                $resultado = $input . ' TB = ' . ($input * 1024) . ' GB';
            } else {
                $resultado = 'pide conversión válida';
            }
        }

        return view('repaso1', compact('resultado'));
    }
}
