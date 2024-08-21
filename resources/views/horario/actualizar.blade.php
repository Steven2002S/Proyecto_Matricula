@extends('layout.base')
@section('titulo', 'Actualizar Horario')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-12 mt-5">
            <h1 class="mt-5">
                Actualizar Horario
            </h1>
            <hr>
            <form action="{{ route('horario.update', $horario->id) }}" method="POST">
                @csrf
                {{-- @method('PUT') --}}

                <div class="mb-3">
                    <label class="form-label">Día de la Semana:</label><br>
                    @foreach(['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'] as $dia)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="{{ strtolower($dia) }}" name="dia_semana[]" value="{{ $dia }}" {{ in_array($dia, $diasSeleccionados) ? 'checked' : '' }}>
                            <label class="form-check-label" for="{{ strtolower($dia) }}">{{ $dia }}</label>
                        </div>
                    @endforeach
                </div>

                <div class="mb-3">
                    <label for="hora_inicio" class="form-label">Hora de Inicio</label>
                    <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" value="{{ $horario->hora_inicio }}" required>
                </div>

                <div class="mb-3">
                    <label for="hora_fin" class="form-label">Hora de Fin</label>
                    <input type="time" class="form-control" id="hora_fin" name="hora_fin" value="{{ $horario->hora_fin }}" required>
                </div>

                <div class="mb-3">
                    <label for="materia_id" class="form-label">Materia</label>
                    <select class="form-select" id="materia_id" name="materia_id" required>
                        <option value="" disabled>Selecciona una materia</option>
                        @if($materias)
                            @foreach($materias as $materiaItem)
                                <option value="{{ $materiaItem->id }}" {{ $materiaItem->id == $horario->materia_id ? 'selected' : '' }}>{{ $materiaItem->nombre }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                
                

                <div class="mb-3">
                    <label for="docente_id" class="form-label">Docente</label>
                    <select class="form-select" id="docente_id" name="docente_id" required>
                        <option value="" disabled>Selecciona un docente</option>
                        @foreach($docentes as $docente)
                            <option value="{{ $docente->id }}" {{ $docente->id == $horario->docente_id ? 'selected' : '' }}>{{ $docente->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection
