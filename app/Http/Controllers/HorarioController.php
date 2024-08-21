<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use App\Models\Estudiante;
use App\Models\Docente;
use App\Models\Horario;
use App\Models\Materia;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     * $datos = Estado::with('matricula')->get();
     *   return view('estado/inicio', compact('datos'));
     * 
     */
    public function index()
    {
        $datos = Horario::with(['materia', 'docente'])->get();
        return view('horario/inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $materias = Materia::all();
        $docentes = Docente::all();
        return view('horario/agregar', compact('materias', 'docentes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $horario = new Horario();
        $horario->dia_semana = implode(', ', $request->dia_semana);
        $horario->hora_inicio = $request->hora_inicio;
        $horario->hora_fin = $request->hora_fin;
        
        // Encuentra la materia y el docente por ID
        $materia = Materia::find($request->materia_id);
        $docente = Docente::find($request->docente_id);
        
        // Asocia la materia y el docente con el horario
        $horario->materia()->associate($materia);
        $horario->docente()->associate($docente);
        
        // Guarda el horario
        $horario->save();

        return redirect()->route('horario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Horario $horario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $horario = Horario::find($id);
        $materias = Materia::all();
        $docentes = Docente::all();
        $diasSeleccionados = explode(', ', $horario->dia_semana);

        return view('horario/actualizar', compact('horario', 'materias', 'docentes', 'diasSeleccionados'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Horario $horario, $id)
    {
        $horario = Horario::find($id);
        $horario->dia_semana = implode(', ', $request->dia_semana);
        $horario->hora_inicio = $request->hora_inicio;
        
        // Encuentra la materia y el docente por ID
        $materia = Materia::find($request->materia_id);
        $docente = Docente::find($request->docente_id);

        // Asocia la materia y el docente con el horario
        $horario->materia()->associate($materia);
        $horario->docente()->associate($docente);

        // Guarda el horario
        $horario->save();

        return redirect()->route('horario.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horario $horario, $id)
    {
        $horario = Horario::find($id);
        $horario->delete();
        return redirect()->route('horario.index');
    }
}
