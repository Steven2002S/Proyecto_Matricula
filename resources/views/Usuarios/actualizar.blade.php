@extends('layout.base')

@section('title', 'Actualizar usuario')

@section('content')
    <br>
    <hr>
    <br>
    <h2>Actualizar usuario</h2>
    <form action="{{ route('usuario.update', $usuario->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <div class="text-center">
                        <label for="imagen" class="form-label">Foto de perfil</label>
                        <br>
                        @if ($usuario->imagen)
                        <img src="{{ asset('storage/' . $usuario->imagen) }}" alt="Imagen Actual" class="img-thumbnail m-2" style="max-width: 200px;">
                    @endif
                    </div>
                    <br>
                    <label for="imagen">Cambiar Foto:</label>
                    <input type="file" name="imagen" id="imagen" class="form-control m-2" accept="image/*">
                    <style>
                        #imagen-preview {
                            display: none;
                        }
                    </style>
                    <div class="text-center">
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
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" value="{{ $usuario->usuario }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $usuario->nombre }}" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $usuario->apellido }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" value="{{ $usuario->fecha_nac }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $usuario->telefono }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="contraseña" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña">
                </div>
            </div>
        </div>

        

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
