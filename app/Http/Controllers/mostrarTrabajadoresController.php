<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class mostrarTrabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();

        // Pasar los usuarios a la vista
        return view('admin1.index', compact('usuarios'));
    }

    
}