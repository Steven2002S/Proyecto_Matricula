@extends('layout.base')
@section('titulo', 'Agregar Matrícula')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-12 mt-5">
            <h1 class="mt-5">
                Agregar Matrícula
            </h1>
            <hr>
            <form action="{{ route('matricula.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="mb-3">
                    <label for="fecha_matricula" class="form-label">Fecha de Matrícula</label>
                    <input type="date" class="form-control" id="fecha_matricula" name="fecha_matricula" required>
                </div>

                <div class="mb-3">
                    <label for="materia_id" class="form-label">Materia</label>
                    <select class="form-select" id="materia_id" name="materia_id" required>
                        <option value="" disabled selected>Selecciona una materia</option>
                        @foreach($materias as $materia)
                            <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="estudiante_id" class="form-label">Estudiante</label>
                    <select class="form-select" id="estudiante_id" name="estudiante_id" required>
                        <option value="" disabled selected>Selecciona un estudiante</option>
                        @foreach($estudiantes as $estudiante)
                            <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

    
@endsection
