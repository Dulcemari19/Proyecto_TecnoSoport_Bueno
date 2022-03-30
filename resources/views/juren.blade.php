<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Productos</title>
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

          <li><a href="{{ route('mostrar') }}">Administrador de Usuarios</a></li>

          <li><a href="{{ route('mostrar2') }}">Administradores</a></li>
          <li><a>|</a>
          <li><a href="{{ route('logoutad') }}"><img src="{{ asset('assets/img/c1.png ') }}" alt="" width="30" height="30" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-left"></a></li>

        </ul>
      </nav><!-- .nav-menu -->
  </header><!-- End Header -->


  <!-- Testimonios -->
  <section class="testimonios">
    <div class="testimonios-title">
      <h2>Productos  <img src="{{ asset('assets/img/ti1.png') }}" alt="" width="80" height="80"></h2>
      <a href="{{ route('pdf')}}"><img src="{{ asset('assets/img/pdf.png') }}" alt="" width="30" height="30" class="bi bi-box-arrow-left"></a>

    </div>

    <center><button type="button"><a href="{{ route('agregar3') }}"><img src="{{ asset('assets/img/agregar-usuario.png') }}" alt="" width="60" height="60" class="bi bi-box-arrow-left"></a></td></button></center>
    <h1>
      <!--a href="{{ route('agregar3') }}"></a--->
    </h1>
    <br>
    <center>
      <table class="table">
        <thead>
          <tr>
            <th>
              <h4> ID</h4>
            </th>
            <th scope="col">
              <h4>Imagen</h4>
            </th>
            <th scope="col">
              <h4>Nombre</h4>
            </th>
            <th scope="col">
              <h4>Descripción</h4>
            </th>
            <th scope="col">
              <h4>Precio</h4>
            </th>
            <th scope="col">
              <h4>Tipo</h4>
            </th>
            <th scope="col">
              <h4>Marca</h4>
            </th>
            <th scope="col">
              <h4>Categoria</h4>
            </th>
            <th scope="col">
              <h4>Editar</h4>
            </th>
            <th scope="col">
              <h4>Borrar</h4>
            </th>
          </tr>

          <tr>
            @foreach($juguetes as $juguete)
            <td>{{ $juguete->id_juguete }}</td>
            <td><img src="{{ asset('img/'.$juguete->img) }}" alt="{{$juguete->img}}" width="80" height="70"></td>
            <td>{{ $juguete->nombre  }}</td>
            <td>{{ $juguete->des }}</td>
            <td>$ {{ $juguete->pre }} MXN </td>
            <td>{{ $juguete->tipo }}</td>
            <td>{{ $juguete->marca }}</td>
            <td>{{ $juguete->categoria }}</td>
            <td><a href="{{ route('editar3', ['id' => $juguete->id_juguete]) }}"><img src="{{ asset('assets/img/boton-editar.png') }}" alt="" width="60" height="60" class="bi bi-box-arrow-left"></a></td>
            
            <td>
              <form action="{{ route('borrar3', ['id' => $juguete->id_juguete]) }}" method="POST" name="borrar">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input type="submit" value="Borrar">
              </form>
            </td>
          </tr>
          @endforeach
      </table>
    </center>




</body>

</html>