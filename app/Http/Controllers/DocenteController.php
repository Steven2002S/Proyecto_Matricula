<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Docente::all();
        return view('docente/inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('docente/agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $docente = new Docente();
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->celular = $request->celular;
        $docente->cedula = $request->cedula;
        $docente->correo = $request->correo;
        $docente->save();
        return redirect()->route('docente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Docente $docente)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $docente = Docente::find($id);
        return view('docente/actualizar', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docente $docente, $id)
    {
        $docente = Docente::find($id);
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->celular = $request->celular;
        $docente->cedula = $request->cedula;
        $docente->correo = $request->correo;
        $docente->save();
        return redirect()->route('docente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docente $docente, $id)
    {
        $docente = Docente::find($id);
        $docente->delete();
        return redirect()->route('docente.index');
    }
}
