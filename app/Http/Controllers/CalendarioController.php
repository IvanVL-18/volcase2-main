<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use Illuminate\Http\Request;

/**
 * Class CalendarioController
 * @package App\Http\Controllers
 */
class CalendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendarios = Calendario::paginate();

        return view('calendario.index', compact('calendarios'))
            ->with('i', (request()->input('page', 1) - 1) * $calendarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $calendario = new Calendario();
        return view('calendario.create', compact('calendario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Calendario::$rules);

        $calendario = Calendario::create($request->all());

        return redirect()->route('calendarios.index')
            ->with('success', 'Calendario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calendario = Calendario::find($id);

        return view('calendario.show', compact('calendario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calendario = Calendario::find($id);

        return view('calendario.edit', compact('calendario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Calendario $calendario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calendario $calendario)
    {
        request()->validate(Calendario::$rules);

        $calendario->update($request->all());

        return redirect()->route('calendarios.index')
            ->with('success', 'Calendario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $calendario = Calendario::find($id)->delete();

        return redirect()->route('calendarios.index')
            ->with('success', 'Calendario deleted successfully');
    }
}
