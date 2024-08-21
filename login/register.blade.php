<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add Google Icons link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 400px;
            margin: 50px auto 0;
            /* Ajusta el valor del margin-top para controlar la separación desde arriba */
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Registro de Usuario</h3>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('login.register') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="usuario">usuario:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="material-icons">person</i></span>
                    </div>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="material-icons">person</i></span>
                    </div>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="material-icons">person</i></span>
                    </div>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                </div>
            </div>

            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="material-icons">phone</i></span>
                    </div>
                    <input type="number" class="form-control" id="telefono" name="telefono" required maxlength="10"
                        minlength="10">
                </div>
            </div>


            <div class="form-group">
    <label for="fecha_nac">Fecha de Nacimiento:</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="material-icons">event</i></span>
        </div>
        <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" required>
    </div>
</div>


            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="material-icons">image</i></span>
                    </div>
                    <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*" required>
                </div>
            </div>


            <div class="form-group">
                <label for="clave">Contraseña:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="material-icons">lock</i></span>
                    </div>
                    <input type="password" class="form-control" id="clave" name="clave" required>
                </div>
            </div>




            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
        </form>
    </div>

    <!-- Add Bootstrap JavaScript and jQuery dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>