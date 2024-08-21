<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use App\Models\Estado;
use App\Models\Estudiante;
use App\Models\Materia;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Estado::with('matricula')->get();
        return view('estado/inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matriculas = Matricula::all();
        return view('estado/agregar', compact('matriculas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estado = new Estado();
        $estado->nombre = $request->nombre;

        // Encuentra la matricula por ID
        $matricula = Matricula::find($request->matricula_id);

        // Asocia la matricula con el estado
        $estado->matricula()->associate($matricula);

        // Guarda el estado
        $estado->save();
        return redirect()->route('estado.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estado $estado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estado = Estado::find($id);
        $matriculas = Matricula::all();
        return view('estado/actualizar', compact('estado', 'matriculas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estado $estado, $id)
    {
        $estado = Estado::find($id);
        $estado->nombre = $request->nombre;

        // Encuentra la matricula por ID
        $matricula = Matricula::find($request->matricula_id);

        // Asocia la matricula con el estado
        $estado->matricula()->associate($matricula);

        // Guarda el estado
        $estado->save();
        return redirect()->route('estado.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estado $estado, $id)
    {
        $estado = Estado::find($id);
        $estado->delete();
        return redirect()->route('estado.index');
    }
}
