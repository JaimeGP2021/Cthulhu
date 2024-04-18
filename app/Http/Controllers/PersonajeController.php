<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personajes = Personaje::all();

        return view('personajes.index', compact('personajes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personajes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $personaje = New Personaje();
        $personaje->user_id = $request->user_id;
        $personaje->nombre = $request->nombre;
        $personaje->profesion = $request->profesion;
        $personaje->edad = $request->edad;
        $personaje->nacionalidad = $request->nacionalidad;
        $personaje->estudios = $request->estudios;
        $personaje->fue = $request->fue;
        $personaje->con = $request->con;
        $personaje->des = $request->des;
        $personaje->tam = $request->tam;
        $personaje->apa = $request->apa;
        $personaje->int = $request->int;
        $personaje->pod = $request->pod;
        $personaje->edu = $request->edu;
        $personaje->cor = $request->cor;
        $personaje->cordura = $request->cordura;
        $personaje->ingresos = $request->ingresos;
        $personaje->ahorros = $request->ahorros;
        $personaje->efectivo = $request->efectivo;

        $personaje->save();

        return redirect()-> route('personajes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personaje $personaje)
    {
        $usuario = Auth::User();
        $habilidades = $usuario->habilidades;
        return view('personajes.show', ['habilidades'=> $habilidades, 'personaje' => $personaje]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personaje $personaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personaje $personaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personaje $personaje)
    {
        $personaje->delete();

        return redirect()->route('personajes.index');
    }
}
