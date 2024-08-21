@extends('layout.base')
@section('titulo', 'Agregar Horario')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-12 mt-5">
            <h1 class="mt-5">
                Agregar Horario
            </h1>
            <hr>
            <form action="{{ route('horario.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Día de la Semana:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="lunes" name="dia_semana[]" value="Lunes">
                        <label class="form-check-label" for="lunes">Lunes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="martes" name="dia_semana[]" value="Martes">
                        <label class="form-check-label" for="martes">Martes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="miercoles" name="dia_semana[]" value="Miércoles">
                        <label class="form-check-label" for="miercoles">Miércoles</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="jueves" name="dia_semana[]" value="Jueves">
                        <label class="form-check-label" for="jueves">Jueves</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="viernes" name="dia_semana[]" value="Viernes">
                        <label class="form-check-label" for="viernes">Viernes</label>
                    </div>
                </div>
                
                

                <div class="mb-3">
                    <label for="hora_inicio" class="form-label">Hora de Inicio</label>
                    <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" required>
                </div>

                <div class="mb-3">
                    <label for="hora_fin" class="form-label">Hora de Fin</label>
                    <input type="time" class="form-control" id="hora_fin" name="hora_fin" required>
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
                    <label for="docente_id" class="form-label">Docente</label>
                    <select class="form-select" id="docente_id" name="docente_id" required>
                        <option value="" disabled selected>Selecciona un docente</option>
                        @foreach($docentes as $docente)
                            <option value="{{ $docente->id }}">{{ $docente->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
