@extends('layout.base')

@section('title', 'Inicio')

@section('content')
<br>
<br>
<br>
    <div class="container mt-4">
            <div class="row text-center">
              <div class="col-lg-12">
                <h2>Bienvenido al Sistema de Matrícula de Estudiantes</h2>
                <p>Ingrese al sistema para realizar la matrícula de estudiantes.</p>
                <!-- Formulario de inicio de sesión -->
                <form method="POST" action="{{ route('login') }}">
                  @csrf
              
                  <div class="mb-3">
                      <label for="usuario" class="form-label">Usuario</label>
                      <input type="text" class="form-control" id="usuario" name="usuario" required>
                  </div>
                  <div class="mb-3">
                      <label for="contrasena" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                  </div>
                  @error('usuario')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
              </form>
              </div>
            </div>
    </div>    

@endsection