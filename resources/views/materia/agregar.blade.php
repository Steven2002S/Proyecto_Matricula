@extends('layout.base')
@section('titulo', 'Agregar Materia')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-12 mt-5">
            <h1 class="mt-5">
                Agregar Materia
            </h1>
            <hr>
            <form action="{{route('materia.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" maxlength="50" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" maxlength="100" class="form-control" id="descripcion" name="descripcion" required>
                </div>
                <div class="mb-3">
                    <label for="creditos" class="form-label">Créditos</label>
                    <select class="form-select" id="creditos" name="creditos" required>
                        <option value="" disabled selected>Escoja una opción</option>
                        <option value="3">3 créditos</option>
                        <option value="6">6 créditos</option>
                        <option value="9">9 créditos</option>
                        <option value="12">12 créditos</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

   
    <script>
         //Validacion de nombre y descripcion
        window.onload = function() {
        var inputNombre = document.getElementById('nombre');
    
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
    }
    </script>
@endsection