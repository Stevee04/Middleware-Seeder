<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // Muestra la lista de tareas
    }
    
    public function create()
    {
        // Muestra el formulario para crear una nueva tarea
        return view('tasks.create');
    }
    
    public function store(Request $request)
    {
        // Almacena una nueva tarea en la base de datos
          // Validación de datos
          $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable',
        ]);

        // Crear una nueva instancia de Tarea con los datos del formulario
        $tarea = new Task([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        // Guardar la tarea en la base de datos
        $tarea->save();

        // Redirigir a la lista de tareas con un mensaje
        //return redirect()->route('tareas.index')->with('success', 'Tarea creada correctamente');
    }

    
    public function show($id)
    {
        // Muestra los detalles de una tarea específica
    }
    
    public function edit($id)
    {
        // Muestra el formulario para editar una tarea específica
    }
    
    public function update(Request $request, $id)
    {
        // Actualiza una tarea en la base de datos
    }
    
    public function destroy($id)
    {
        // Elimina una tarea de la base de datos
    }
}
