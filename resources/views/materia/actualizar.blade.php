@extends('layout.base')
@section('titulo', 'Actualizar Materia')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-12 mt-5">
            <h1 class="mt-5">
                Actualizar Materia
            </h1>
            <hr>
            <form action="{{ route('materia.update', $materia->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" maxlength="50" value="{{$materia->nombre}}"
                    class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control"
                     maxlength="50" value="{{$materia->descripcion}}"
                     id="descripcion" name="descripcion" required>
                </div>
                <div class="mb-3">
                    <label for="creditos" class="form-label">Créditos</label>
                    <select class="form-select" id="creditos" name="creditos" required>
                        <option value="" disabled>Escoja una opción</option>
                        <option value="3" {{ $materia->creditos == 3 ? 'selected' : '' }}>3 créditos</option>
                        <option value="6" {{ $materia->creditos == 6 ? 'selected' : '' }}>6 créditos</option>
                        <option value="9" {{ $materia->creditos == 9 ? 'selected' : '' }}>9 créditos</option>
                        <option value="12" {{ $materia->creditos == 12 ? 'selected' : '' }}>12 créditos</option>
                    </select>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection