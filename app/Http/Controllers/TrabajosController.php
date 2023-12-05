<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trabajo;


//tenemos que hacer que se actualice el trabajo en el apartado de comentario y status
class TrabajosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        // Obtener los trabajos asignados al usuario
        $trabajosAsignados = $user->trabajos;

        // Pasar los trabajos a la vista
        return view('trabajador.index', compact('trabajosAsignados'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)//mostrar la tarea en específico
    {
        // Obtener el trabajo específico por su ID
        $trabajo = Trabajo::findOrFail($id);

        // Pasar el trabajo a la vista
        return view('trabajador.show', compact('trabajo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    //mandamos al form de actualización que debe actualizar solo el comentario y el status
    public function edit(string $id)
    {
        $trabajo = Trabajo::find($id);

        return view('trabajador.edit', compact('trabajo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validación de datos
        $request->validate([
            'comentario' => 'required|string',
            'status' => 'required|in:Asignada,Completada',
        ]);

        // Obtener el trabajo por ID
        $trabajo = Trabajo::findOrFail($id);

        // Actualizar campos
        $trabajo->comentario = $request->input('comentario');
        $trabajo->status = $request->input('status');

        // Guardar los cambios
        $trabajo->save();

        // Redirigir con un mensaje
        return redirect()->route('trabajador.index');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
