<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;
use Illuminate\support\Facades\DB;
use Carbon\Carbon;

class clienteControler extends Controller
{
    public function home()
    {
        return view('inicio');    
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaClientes= DB::table('clientes')->get();
        return view('clientes', compact('consultaClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formularios');
    }

    /** 
     * Store a newly created resource in storage.
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            'nombre'=> $request ->input('txtnombre'),
            'apellido'=> $request ->input('txtapellido'),
            'correo'=> $request ->input('txtcorreo'),
            'telefono'=> $request ->input('txttelefono'),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),

            
            
        ]);

        $usuario = $request->input('txtnombre');
        
        session()->flash('exito', 'Se guardo el usuario: ' .$usuario);
        
        return to_route('rutaformulario');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */ 
    public function edit(string $id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();
        return view('editar', compact('cliente'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtcorreo' => 'required|email|max:255',
            'txttelefono' => 'required|string|max:15',
        ]);
    
        DB::table('clientes')->where('id', $id)->update([
            'nombre' => $validated['txtnombre'],
            'apellido' => $validated['txtapellido'],
            'correo' => $validated['txtcorreo'],
            'telefono' => $validated['txttelefono'],
            'updated_at' => Carbon::now(),
        ]);
    
        session()->flash('exito', 'Cliente actualizado correctamente.');
        return redirect()->route('rutaclientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $cliente = DB::table('clientes')->where('id', $id)->first();

    DB::table('clientes')->where('id', $id)->delete();

    session()->flash('exito', 'El cliente ha sido eliminado correctamente.');
    return redirect()->route('rutaclientes');
    }
}
