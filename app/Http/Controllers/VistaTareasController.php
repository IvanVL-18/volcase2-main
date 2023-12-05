<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendario;


class VistaTareasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();  // Obtener el usuario autenticado
        $calendarios = $user->calendarios;  // Obtener los registros de calendario asociados al usuario

        // Verificar si $calendarios es null antes de pasar a la vista
        return view('trabajador.index', compact('calendarios'))->with('calendarios', $calendarios ?: []);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
