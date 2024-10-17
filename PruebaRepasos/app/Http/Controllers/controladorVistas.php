<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function welcome()
    {
        return view('welcome');    
    }
    public function repaso1()
    {
        return view('repaso1');

    }
}
