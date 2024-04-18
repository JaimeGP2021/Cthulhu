<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLibroRequest;
use App\Http\Requests\UpdateLibroRequest;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::all();

        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $libro = New Libro();
        $libro->titulo = $request->titulo;
        $libro->idioma = $request->idioma;
        $libro->descripcion = $request->descripcion;
        $libro->coste_cordura = $request->coste_cordura;
        $libro->coste_tiempo = $request->coste_tiempo;

        $libro->save();

        return redirect()-> route('libros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {

        return view('libros.show', ['libro'=> $libro]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        return view('libros.edit', ['libro'=>$libro]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        $libro->titulo = $request->titulo;
        $libro->idioma = $request->idioma;
        $libro->descripcion = $request->descripcion;
        $libro->coste_cordura = $request->coste_cordura;
        $libro->coste_tiempo = $request->coste_tiempo;

        $libro->save();

        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();

        return redirect()->route('libros.index');
    }
}
