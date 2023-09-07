<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Tarea;

class TareaController extends Controller
{


/*
    public function create()
    {
        return view('nuevatarea'); // Muestra el formulario de creación
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'asignado_a' => 'required|string|max:255',
        ]);
    
        Tarea::create([
            'nombre' => $request->input('nombre'),
            'fecha_inicio' => $request->input('fecha_inicio'),
            'fecha_fin' => $request->input('fecha_fin'),
            'asignado_a' => $request->input('asignado_a'),
        ]);
    
        return redirect()->route('tareas');
    }
}


public function index()
{
    $tareas = Tarea::all(); // Obtén todas las tareas desde la base de datos
    return view('tareas', compact('tareas'));
}
*/


   
public function añadirTareas(Request $request) { 
    //Validación 
    $request->validate
    ([ 'nombre' => 'required|string', 'fecha_inicio' => 'required|date', 'fecha_fin' => 'required|date|after_or_equal:fecha_inicio', 'asignado_a' => 'required|string', ]); 

    $tarea = new Tarea(); $tarea->nombre = $request->nombre; 
    $tarea->fecha_inicio = $request->fecha_inicio; 
    $tarea->fecha_fin = $request->fecha_fin; $tarea->asignado_a = $request->asignado_a; 
    $tarea->save(); return redirect()->route('tareas')->with('success', 'Tarea añadida exitosamente.'); }
}


