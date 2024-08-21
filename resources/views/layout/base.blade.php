<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- yield('title') -->
    <title>@yield('title')</title>
    <!-- CDN BS5-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <!-- Agrega la biblioteca jQuery -->
    <!--CDN de Font Awensome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<style>
    /* Color of the links BEFORE scroll */
.navbar-scroll .nav-link,
.navbar-scroll .fa-bars,
.navbar-scroll .navar-brand {
  color: #4f4f4f;
}

.navbar-scroll .nav-link:hover {
  color: #1266f1;
}

/* Color of the links AFTER scroll */
.navbar-scrolled .nav-link,
.navbar-scrolled .fa-bars,
.navbar-scrolled .navar-brand {
  color: #4f4f4f;
}

/* Color of the navbar AFTER scroll */
.navbar-scroll,
.navbar-scrolled {
  background-color: #fff;
}

/* An optional height of the navbar AFTER scroll */
.navbar.navbar-scroll.navbar-scrolled {
  padding-top: 5px;
  padding-bottom: 5px;
}

body {
  background-color: #eee;
}

/* Estilo para el texto en negrita */
.font-weight-bold {
            font-weight: bold;
        }
</style>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-scroll">
        <div class="container">
          <img src="{{ asset('img/Logo.png') }}" height="70" alt=""
            loading="lazy" />
          <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon d-flex justify-content-start align-items-center">
              <i class="fas fa-bars"></i>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
         
                <a class="nav-link @if(request()->routeIs('materia.index')) font-weight-bold @endif" aria-current="page" href="{{ route('materia.index') }}">Materia</a>
            
              </li>
              
              <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('estudiante.index')) font-weight-bold @endif" aria-current="page" href="{{ route('estudiante.index') }}">Estudiante</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('matricula.index')) font-weight-bold @endif" aria-current="page" href="{{ route('matricula.index') }}">Matrículas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('estado.index')) font-weight-bold @endif" aria-current="page" href="{{ route('estado.index') }}">Estado</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('docente.index')) font-weight-bold @endif" aria-current="page" href="{{ route('docente.index') }}">Docente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('horario.index')) font-weight-bold @endif" aria-current="page" href="{{ route('horario.index') }}">Horario</a>
              </li>
              
              <li class="nav-item">
                @if(session()->has('usuario'))
                <li class="nav-item">
                  <a class="nav-link @if(request()->routeIs('usuario.index')) font-weight-bold @endif" aria-current="page" href="{{ route('usuario.index') }}">Usuarios</a>
                </li>
                    <span class="nav-link text-primary">Bienvenido, {{ session('usuario') }}</span>
                @else
                <form action="/" method="get" class="d-inline">
                  @csrf
                  <button type="submit" class="nav-link" style="background: none; border: none">
                    <i class="fas fa-sign-in-alt" style="color: #272626;"></i>
                </button>
                
                              </form>
              
              @endif
            </li>
            @if(session()->has('usuario'))
            <li class="nav-item">
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="nav-link" style="background: none; border: none; color: #007bff; cursor: pointer;">
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </form>
            
            </li>
        @endif
        
            </ul>
      
            <ul class="navbar-nav flex-row">
              <li class="nav-item">
                <a class="nav-link px-2" href="https://www.facebook.com/ESPE.U/?locale=es_LA" target="_blank">
                  <i class="fab fa-facebook-square"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-2" href="https://www.youtube.com/channel/UC90HH_DeXCoNQ2bH3Lm9MdQ" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link ps-2" href="https://www.instagram.com/p/CuvT_phg2NI/" target="_blank">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
    
    <!-- Remove the container if you want to extend the Footer to full width. -->

    <footer class="text-white text-center text-lg-start mt-5" style="background-color: #23242a;">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">Sobre Nosotros</h5>
  
            <p>
              ¡Bienvenidos a nuestra comunidad educativa en la ESPE! 
              facilitamos un proceso de matrícula transparente y sencillo. 
            </p>
            <p>
              ¡Únete a nosotros y descubre un entorno donde la excelencia se fusiona con las oportunidades 
              infinitas!
            </p>
  
          
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4 pb-1">Nuestro sistema es super increible y muy eficaz</h5>
  
            <div class="form-outline form-white mb-4">
              
            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 48.8px;"></div><div class="form-notch-trailing"></div></div></div>
  
            <ul class="fa-ul" style="margin-left: 1.65em;">
              <li class="mb-3">
                <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Vía Santo Domingo - Via Quevedo Km. 24 Hda. Zoila Luz Avenida Quevedo 3-703-914, Santo Domingo </span>
              </li>
              <li class="mb-3">
                <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">santodomingo@.espe.edu.ec</span>
              </li>
              <li class="mb-3">
                <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2"> (02) 272-2246</span>
              </li>
              <li class="mb-3">
                <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">(593) 2-2722-246</span>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">Horario de atención</h5>
  
            <table class="table text-center text-white">
              <tbody class="font-weight-normal">
                <tr>
                  <td>Lunes - Miércoles:</td>
                  <td>7:00am - 3:30pm</td>
                </tr>
                <tr>
                  <td>Jueves - Viernes:</td>
                  <td>7:00am - 3:30pm</td>
                </tr>
                <tr>
                  <td>Sábado - Domingo:</td>
                  <td>Cerrado</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">Dev Group E</a>
      </div>
      <!-- Copyright -->
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    
    <!-- Agrega la biblioteca DataTables y su extensión Bootstrap 5 -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <!-- End of .container -->

  <script>
    $(document).ready(function () {
        $('#example').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json"
            },

        });
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<!-- Idioma en Español del data -->

</body>
</html>