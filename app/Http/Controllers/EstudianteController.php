<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Estudiante::all();
        return view('estudiante/inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiante/agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->fecha_nacimiento = $request->fecha_nacimiento;
        $estudiante->direccion = $request->direccion;
        $estudiante->save();
        return redirect()->route('estudiante.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiante/actualizar', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudiante $estudiante, $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->fecha_nacimiento = $request->fecha_nacimiento;
        $estudiante->direccion = $request->direccion;
        $estudiante->save();
        return redirect()->route('estudiante.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante, $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return redirect()->route('estudiante.index');
    }
}
