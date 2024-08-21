<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use App\Models\Estudiante;
use App\Models\Materia;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Matricula::with(['materia', 'estudiante'])->get();
        return view('matricula/inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $materias = Materia::all();
        $estudiantes = Estudiante::all();
        return view('matricula/agregar', compact('materias', 'estudiantes'));
    }

    /**
     * Store a newly created resource in storage.
     * $table->string('nombre', 50);
      ** $table->unsignedBigInteger('materia_id'); 
       *$table->unsignedBigInteger('estudiante_id'); 
       *$table->date('fecha_matricula');
     */
    public function store(Request $request)
    {
        $matricula = new Matricula();
        $matricula->nombre = $request->nombre;
        $matricula->fecha_matricula = $request->fecha_matricula;
        
        // Encuentra la materia y el estudiante por ID
        $materia = Materia::find($request->materia_id);
        $estudiante = Estudiante::find($request->estudiante_id);
        
        // Asocia la materia y el estudiante con la matrícula
        $matricula->materia()->associate($materia);
        $matricula->estudiante()->associate($estudiante);
        
        // Guarda la matrícula
        $matricula->save();

        return redirect()->route('matricula.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matricula $matricula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $matricula = Matricula::find($id);
        $materias = Materia::all();
        $estudiantes = Estudiante::all();
        return view('matricula/actualizar', compact('matricula', 'materias', 'estudiantes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matricula $matricula, $id)
    {
        $matricula = Matricula::find($id);
        $matricula->nombre = $request->nombre;
        $matricula->fecha_matricula = $request->fecha_matricula;
        
        // Encuentra la materia y el estudiante por ID
        $materia = Materia::find($request->materia_id);
        $estudiante = Estudiante::find($request->estudiante_id);
        
        // Asocia la materia y el estudiante con la matrícula
        $matricula->materia()->associate($materia);
        $matricula->estudiante()->associate($estudiante);
        
        // Guarda la matrícula
        $matricula->save();

        return redirect()->route('matricula.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matricula $matricula, $id)
    {
        $matricula = Matricula::find($id);
        $matricula->delete();
        return redirect()->route('matricula.index');
    }
}
