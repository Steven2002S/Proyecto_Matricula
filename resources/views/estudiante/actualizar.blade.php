@extends('layout.base')
@section('titulo', 'Actualizar Estudiante')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-12 mt-5">
            <h1 class="mt-5">
                Actualizar Estudiante
            </h1>
            <hr>

            <form action="{{ route('estudiante.update', $estudiante->id) }}" method="POST">
                @csrf
                {{-- @method('PUT') <!-- Asegúrate de incluir el método PUT en el formulario --> --}}
                
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $estudiante->nombre }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $estudiante->apellido }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $estudiante->fecha_nacimiento }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <textarea class="form-control" id="direccion" name="direccion" required>{{ $estudiante->direccion }}</textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
