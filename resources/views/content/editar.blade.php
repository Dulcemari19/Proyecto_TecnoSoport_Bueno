<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Editar</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v2.1.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><img src="{{ asset('assets/img/logo.png') }}" alt="" width="60" height="60"></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav class="nav-menu d-none d-lg-block">
        <ul>

          <li><a href="{{ route('mostrar2') }}">Administradores</a></li>

          <li><a href="{{ route('mostrar3') }}">Productos | Herramientas | Servicios </a></li>

          <li><a>|</a>
          <li><a href="{{ route('logoutad') }}"><img src="{{ asset('assets/img/c1.png ') }}" alt="" width="30" height="30" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-left"></a></li>

        </ul>
           </nav><!-- .nav-menu -->
    </header><!-- End Header -->

 
  <!-- Testimonios -->
  <section class="testimonios">
    <div class="testimonios-title">
     <h2>Editar</h2>
    </div>
    <br>
     <br>

<center>
    <form name="nuevo" action="{{ route('salvar', ['id' => $usu->id_usuario]) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <table class="table">
        <thead>
          <tr>
            <th scope="col">
              <h4>Nombre</h4>
            </th>
            <th scope="col">
              <h4>Apellidos</h4>
            </th>
            <th scope="col">
              <h4>Direccion</h4>
            </th>
            <th scope="col">
              <h4>Telefono</h4>
            </th>
            <th scope="col">
              <h4>Email</h4>
            </th>
            <th scope="col">
              <h4>Contraseña</h4>
            </th>
            <tr>
            </td>
            <td><input type='text' name='nombre' placeholder="Nombre" value="{{ $usu->nombre }}"></h5>
            </td>
            <td> <input type='text' name='apellidos' placeholder="Apellidos" value="{{ $usu->apellidos }}"></h5>
            </td>
            <td><input type='text' name='direc' placeholder="Dirrección" value="{{ $usu->direc }}"></h5>
            </td>
            <td><input type='text' name='tel' placeholder="Teléfono" value="{{ $usu->tel }}"></h5>
            </td>
            <td><input type='text' name='email' placeholder="Ingresa tu correo" value="{{ $usu->email }}"></h5>
            </td>
            <td><input type='text' name='pass' placeholder="Ingresa tu contraseña" value="{{ $usu->pass }}"></h5>
            </td>
            <input type='submit' value="Guardar"><br>
    </form>
</center>


</body>

</html>

      
      