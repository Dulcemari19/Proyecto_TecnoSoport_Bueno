<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Papelitos</title>
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

      <h1 class="logo"><img src="assets/img/logo.png" alt="" width="120" height="80"></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
          
        <ul>
          <li><a href="{{ route('cono') }}">¿Quienes somos?</a></li>
          <li><a>Bienvenido(a)</a>
          <li><a href="{{ route('paypal') }}">Pagar</a>
          <li><a href="{{ route('logout') }}">
                <img src="assets/img/c1.png" alt="" width="30" height="30" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-left">
              </svg></a></li>

        </ul>
      </nav><!-- .nav-menu -->
    </header><!-- End Header -->

 
  <!-- Testimonios -->
  <section class="testimonios">
    <div class="testimonios-title">
     <h2>Producto <img src="assets/img/ti2.png" alt="" width="60" height="60" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-left"></h2>
    </div>
    <br>
    <center>
    <h4><a href="{{ $articulos->previousPageUrl() }}"> </a>
    <img src="assets/img/f3.png" alt="" width="70" height="70" class="bi bi-box-arrow-left">

    # {{ $articulos->currentPage() }} Producto
    <a href="{{ $articulos->nextPageUrl() }}"><img src="assets/img/f4.png" alt="" width="70" height="70" class="bi bi-box-arrow-left"> </a></h4>
    </center>
    <br>
  
         <!-- ======= tabla de precios ======= -->
           
@foreach($articulos as $articulo) 

<div style="text-align:center;" style="margin-top: 50px;">
      <table class="table">
        <thead>
          <th>
            <h3> Imagen</h3>
          </th>
          <th>
            <h3>Precio</h3>
          </th>
          <tr></tr>
          <th scope="row"><img src="{{ asset('img/'.$articulo->img) }}" alt="{{$articulo->img}}" width="150" height="150"></th>
          </th>
          <th>
            <h1>$ {{ $articulo->pre }} MXN </h1>

            </tr>
          <th>
            <h3>Nombre<h3> {{ $articulo->nombre }}</h1>
                </h2>
          </th>
          <th>
            <div class="precio-col-comprar">
              <a href="{{ route('carrito', ['id' => $articulo->id_articulo]) }}"><img src="assets/img/co1.png" alt="" width="60" height="60" class="bi bi-box-arrow-left"> Comprar</a>
            </div>
            <h3>
          </th>
        </thead>
        <tbody>
      </table>
    </div>
@endforeach

  
    
    
            
       
    </body>
    </html>