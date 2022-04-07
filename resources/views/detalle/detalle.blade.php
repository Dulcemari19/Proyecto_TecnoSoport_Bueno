<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Producto</title>
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
  * Template Name: Gp - vh3.1.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>


<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><img src="{{ asset ('assets/img/logo.png')}}" alt="" width="40" height="40" style="background-color:white;"><a>Papelitos</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>


        <li><a href="{{ route('cero') }}">Productos | </a></li>
          <li><a>Bienvenido</a>
          <li><a>|</a>
          <li><a href="{{ route('logout') }}"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <img src="{{ asset('assets/img/c1.png ') }}" alt="" width="30" height="30" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-left">
              </svg></a></li>


        </ul>
      </nav><!-- .nav-menu -->
  </header><!-- End Header -->



  <!-- Testimonios -->

  <section class="testimonios">
    <div class="testimonios-title">
      <h1><a style="background-color:#9ede73 ;">Nombre Producto: </a></h1>
    </div>
    <br>
    <br>

    <center>
      <h4></h4><br>

      <table class="table">
        <thead>
          <tr>
            <th>
              <h3> Imagen</h3>
            </th>
            <th scope="col">
              <h3>Descripcion</h3>
            </th>
            <th scope="col">
              <h3>Categoria </h3>
            </th>
            <th scope="col">
              <h3>Tipo</h3>
            </th>
            <th scope="col">
             
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
            
            <td>
                <a href="{{route('paypal')}}"><img src="{{ asset('assets/img/co1.png') }}" alt="" width="60" height="60" class="bi bi-box-arrow-left">
                 
                </a>
            </td>
          </tr>
      </table>
    </center>



</body>

</html>