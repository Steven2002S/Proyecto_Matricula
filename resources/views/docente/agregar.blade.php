@extends('layout.base')
@section('titulo', 'Agregar Docente')
@section('content')
<script src="{{ asset('js/app.js') }}" defer></script>
    <div class="row mt-5">
        <div class="col-sm-12 mt-5">
            <h1 class="mt-5">
                Agregar Docente
            </h1>
            <hr>

            <form action="{{ route('docente.store') }}" method="POST">
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
                    <label for="celular" class="form-label">Celular</label>
                    <input type="number" maxlength="10" class="form-control" id="celular" name="celular" required>
                </div>

                <div class="mb-3">
                    <label for="cedula" class="form-label">Cédula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" required>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
    
    <script>
        window.onload = function() {
            var inputCelular = document.getElementById('celular');
            if(inputCelular) {
                inputCelular.addEventListener('input', function (e) {
                    var value = e.target.value;
                    if (value.length > 10) {
                        alert('Por favor, introduce un máximo de 10 dígitos');
                        e.target.value = '';
                    }
                });
            } else {
                console.error('No se encontró el elemento con id "celular".');
            }
        }

    </script>
@endsection
