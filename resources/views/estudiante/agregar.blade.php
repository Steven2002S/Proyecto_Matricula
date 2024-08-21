@extends('layout.base')
@section('titulo', 'Agregar Estudiante')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-12 mt-5">
            <h1 class="mt-5">
                Agregar Estudiante
            </h1>
            <hr>

            <form action="{{ route('estudiante.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                </div>
                <div class="mb-3">
                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <textarea class="form-control" id="direccion" name="direccion" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

    <script>
    window.onload = function() {
        var inputNombre = document.getElementById('nombre');
        var inputApellido = document.getElementById('apellido');

        var validar = function (e) {
            var value = e.target.value;
            if (!/^[A-Z][a-z]*$/.test(value)) {
                alert('Por favor, introduce solo letras y comienza con una mayúscula');
                e.target.value = '';
            }
        };

        if(inputNombre) {
            inputNombre.addEventListener('input', validar);
        } else {
            console.error('No se encontró el elemento con id "nombre".');
        }

        if(inputApellido) {
            inputApellido.addEventListener('input', validar);
        } else {
            console.error('No se encontró el elemento con id "apellido".');
        }
    }
</script>
@endsection
