@extends('layout/plantilla')

@section('title','Crear usuario')

@section('contenido')
    
    <h2>Agregar nuevo</h2>
    <form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <label for="imagen" class="col-md-4 col-form-label text-md-end">Foto de perfil</label>
            <div class="col-md-6">
                <input id="imagen" type="file" class="form-control" name="imagen">
            </div>
        </div>
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
        </div>
        <div class="mb-3">
            <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="fecha_nac" name="fecha_nac"
                placeholder="Fecha de nacimiento" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
        </div>
        <div class="mb-3">
            <label for="contraseña" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        
    </form>

@endsection
