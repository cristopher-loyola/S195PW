@extends('layouts.plantilla1')
@section('titulo','Componentes Blade')

@section('contenido')

<x-card encabezado="hola s195" titulo="titulo1" textoBoton="guardar"> prueba slot 1</x-card>

<x-card encabezado="hola" titulo="titulo2" textoBoton="no guardar">prueba slot 2</x-card>

<x-alert tipo="success"> alert verde</x-alert>
<x-alert tipo="danger"> alert negro</x-alert>

@endsection