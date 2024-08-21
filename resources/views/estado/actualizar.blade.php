@extends('layout.base')
@section('titulo', 'Actualizar Estado de Matrícula')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-12 mt-5">
            <h1 class="mt-5">
                Actualizar Estado de Matrícula
            </h1>
            <hr>
            <form action="{{ route('estado.update', $estado->id) }}" method="POST">
                @csrf
                {{-- @method('PUT') <!-- Asegúrate de incluir el método PUT en el formulario --> --}}

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $estado->nombre }}" required>
                </div>

                <div class="mb-3">
                    <label for="matricula_id" class="form-label">Matrícula</label>
                    <select class="form-select" id="matricula_id" name="matricula_id" required>
                        <option value="" disabled selected>Selecciona una matrícula</option>
                        @foreach($matriculas as $matricula)
                            <option value="{{ $matricula->id }}" {{ $estado->matricula_id == $matricula->id ? 'selected' : '' }}>
                                {{ $matricula->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection
