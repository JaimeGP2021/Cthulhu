<?php

namespace App\Http\Controllers;

use App\Models\Objeto;
use Illuminate\Http\Request;

class ObjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objetos = Objeto::all();
        return view('objetos.index', compact('objetos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('objetos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $objeto = New Objeto();
        $objeto->nombre = $request->nombre;
        $objeto->descripcion = $request->descripcion;
        $objeto->precio = $request->precio;
        $objeto->epoca = $request->epoca;

        $objeto->save();

        return redirect()-> route('objetos.index');
    }

    /**w
     * Display the specified resource.
     */
    public function show(Objeto $objeto)
    {
        return view('objetos.show', ['objeto'=>$objeto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Objeto $objeto)
    {
        return view('objetos.edit', ['objeto'=>$objeto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Objeto $objeto)
    {
        $objeto->nombre = $request->nombre;
        $objeto->descripcion = $request->descripcion;
        $objeto->precio = $request->precio;
        $objeto->epoca = $request->epoca;

        $objeto->save();

        return redirect()->route('objetos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Objeto $objeto)
    {
        $objeto->delete();

        return redirect()->route('objetos.index');
    }
}
