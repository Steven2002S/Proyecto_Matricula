<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Materia::all();
        return view('materia/inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materia/agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $materia = new Materia();
        $materia->nombre = $request->nombre;
        $materia->descripcion = $request->descripcion;
        $materia->creditos = $request->creditos;
        $materia->save();
        return redirect()->route('materia.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $materia = Materia::find($id);
        return view('materia/actualizar', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia, $id)
    {
        $materia = Materia::find($id);
        $materia->nombre = $request->nombre;
        $materia->descripcion = $request->descripcion;
        $materia->creditos = $request->creditos;
        $materia->save();

        return redirect()->route('materia.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia, $id)
    {
        $materia = Materia::find($id);
        $materia->delete();
        return redirect()->route('materia.index');
    }
}
