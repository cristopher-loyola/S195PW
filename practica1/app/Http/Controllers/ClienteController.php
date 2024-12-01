<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $consulta=cliente::all();
        return view('clientes',compact('consulta'));
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
    public function store(Request $request)
    {
        $addCliente= new cliente();
        $addCliente->nombre= $request->input('txtnombre');
        $addCliente->apellido= $request->input('txtapellido');
        $addCliente->correo= $request->input('txtcorreo');
        $addCliente->telefono= $request->input('txttelefono');


        $addCliente->save();
        $msj= $request->input('txtnombre');
        session()->flash('exito, se guardo el cliente'.$msj);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $validatedData = $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtcorreo' => 'required|email|max:255',
            'txttelefono' => 'required|string|max:20',
        ]);
    
        $cliente->update([
            'nombre' => $validatedData['txtnombre'],
            'apellido' => $validatedData['txtapellido'],
            'correo' => $validatedData['txtcorreo'],
            'telefono' => $validatedData['txttelefono'],
        ]);
    
        return redirect()->route('cliente.index')->with('exito', 'Cliente actualizado correctamente.');
    }
    
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {

        $cliente->delete();
    
        return redirect()->route('cliente.index')->with('exito', 'Cliente eliminado correctamente.');
    }
    
}
