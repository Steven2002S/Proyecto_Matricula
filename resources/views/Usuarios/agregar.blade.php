@extends('layout.base')

@section('title', 'Crear usuario')

@section('content')
    <br>
    <hr>
    <br>
    <h2>Registrar Usuario</h2>
    <form action="{{ route('usuario.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="imagen" class="form-label">Foto de perfil</label>
                    <input id="imagen" type="file" class="form-control" name="imagen">
                    <style>
                        #imagen-preview {
                            display: none;
                        }
                    </style>
                    <div class="text-center ">
                        <img id="imagen-preview" src="" alt="Vista previa de la imagen" class="img-thumbnail m-2" style="max-width: 200px;">
                        </div>   
                    <script>
                        document.getElementById('imagen').addEventListener('change', function (event) {
                            var input = event.target;
                            var preview = document.getElementById('imagen-preview');
                    
                            // Si se selecciona un archivo, muestra la imagen de vista previa
                            if (input.files.length > 0) {
                                var reader = new FileReader();
                    
                                reader.onload = function () {
                                    preview.src = reader.result;
                                }
                    
                                reader.readAsDataURL(input.files[0]);
                    
                                // Muestra la imagen de vista previa
                                preview.style.display = 'block';
                            } else {
                                // Si no se selecciona un archivo, oculta la imagen de vista previa
                                preview.style.display = 'none';
                            }
                        });
                    </script>
                </div>

            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="Fecha de nacimiento" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="contraseña" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña" required>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
