@extends('layout.base')
@section('titulo', 'Actualizar Docente')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-12 mt-5">
            <h1 class="mt-5">
                Actualizar Docente
            </h1>
            <hr>

            <form action="{{ route('docente.update', $docente->id) }}" method="POST">
                @csrf
                {{-- @method('PUT') <!-- Asegúrate de incluir el método PUT en el formulario --> --}}
                
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" maxlength="50" class="form-control" id="nombre" name="nombre" value="{{ $docente->nombre }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $docente->apellido }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="celular" class="form-label">Celular</label>
                    <input type="number" maxlength="10" class="form-control" id="celular" name="celular" value="{{ $docente->celular }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="cedula" class="form-label">Cédula</label>
                    <input type="number" maxlength="10" class="form-control" id="cedula" name="cedula" value="{{ $docente->cedula }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" maxlength="50" class="form-control" id="correo" name="correo" value="{{ $docente->correo }}" required>
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

        //Valicación de nombre y apellido
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
