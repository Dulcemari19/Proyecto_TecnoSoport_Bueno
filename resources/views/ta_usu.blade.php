<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Usuarios</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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

      <h1 class="logo"><a href=" {{ route ('validar' ) }}"><img src="assets/img/logo.png" alt="" width="60" height="60"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ route('admi') }}">inicio | </a></li>
          <li><a href="{{ route('cono') }}">¿Quienes somos? |</a></li>
          <li><a href="{{ route('mostrar2') }}">Administradores |</a></li>
          <li><a href="{{ route('mostrar3') }}">Productos </a></li>
          <li><a href="{{ route('mostrar') }}">Clientes |</a>
          </li>
          <li><a>|</a>
          <li><a href="{{ route('logoutad') }}"><img src="{{ asset('assets/img/c1.png ') }}" alt="" width="30" height="30" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-left"></a></li>

        </ul>
      </nav><!-- .nav-menu -->
  </header><!-- End Header -->


  <!-- Testimonios -->
  <section class="testimonios">
    <div class="testimonios-title">
      <h3>Administrador de Usuarios</h3>
    </div>
    <br>
    <center><button type="button"><a href="{{ route('agregar') }}"><img src="{{ asset('assets/img/agregar-usuario.png') }}" alt="" width="60" height="60" class="bi bi-box-arrow-left"></a></td></button></center>
    <br>
    <br>
    <center>

      <table class="table">
        <thead>
          <tr>
            <th>
              <h4> ID</h4>
            </th>
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
            <th scope="col">
              <h4>Editar</h4>
            </th>
            <th scope="col">
              <h4>Borrar</h4< /th>
          </tr>
          <tr>
            @foreach ($usuarios as $usu)
            <td>&nbsp;&nbsp;<h5>{{ $usu->id_usuario }}</h5>
            </td>
            <td>&nbsp;&nbsp;<h5>{{ $usu->nombre }}</h5>
            </td>
            <td>&nbsp;&nbsp;<h5>{{ $usu->apellidos }}</h5>
            </td>
            <td>&nbsp;&nbsp;<h5>{{ $usu->direc }}</h5>
            </td>
            <td>&nbsp;&nbsp;<h5>{{ $usu->tel }}</h5>
            </td>
            <td>&nbsp;&nbsp;<h5>{{ $usu->email }}</h5>
            </td>
            <td>&nbsp;&nbsp;<h5>{{ $usu->pass }}</h5>
            </td>


            <td style="text-align:center;"><a href="{{ route('editar', ['id' => $usu->id_usuario]) }}"><img src="{{ asset('assets/img/boton-editar.png') }}" alt="" width="60" height="60" class="bi bi-box-arrow-left"></a></td>
            <td style="text-align:center;">
              <a href="{{ route('borrar', ['id' => $usu->id_usuario]) }}" method="POST" name="borrar">
                <form action="{{ asset('assets/img/eliminar.png') }}" alt="" width="45" height="45" class="bi bi-box-arrow-left">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                  <input type="submit" value="Borrar">
            </td>
          </tr>
          @endforeach
      </table>
    </center>




</body>

</html>