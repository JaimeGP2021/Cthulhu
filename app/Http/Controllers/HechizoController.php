<?php

namespace App\Http\Controllers;

use App\Models\Hechizo;
use Illuminate\Http\Request;

class HechizoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hechizos = Hechizo::all();
        return view('hechizos.index', compact('hechizos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hechizos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hechizo = New Hechizo();
        $hechizo->nombre = $request->nombre;
        $hechizo->tipo = $request->tipo;
        $hechizo->efecto = $request->efecto;
        $hechizo->turnos = $request->turnos;
        $hechizo->coste_mp = $request->coste_mp;
        $hechizo->coste_cordura = $request->coste_cordura;
        $hechizo->procedencia = $request->procedencia;
        $hechizo->save();

        return redirect()-> route('hechizos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hechizo $hechizo)
    {
        return view('hechizos.show', ['hechizo'=> $hechizo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hechizo $hechizo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hechizo $hechizo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hechizo $hechizo)
    {
        $hechizo->delete();

        return redirect()->route('hechizos.index');
    }
}
