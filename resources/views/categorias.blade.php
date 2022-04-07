<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Categorías | Inicio</title>
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

  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><img src="assets/img/logo.png" alt="" width="60" height="60"></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ route('categorias') }}">Categorias |</a></li>
          <li><a href="{{ route('cono') }}">¿Quienes somos? |</a></li>
          <li><a href="{{ route('cero') }}">Productos |</a></li>

          <li><a> Bienvenido(a)</a>
          <li><a href="{{ route('logout') }}"> <img src="{{ asset('assets/img/c1.png ') }}" alt="" width="30" height="30" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-left"></a></li>


        </ul>
      </nav><!-- .nav-menu -->
  </header><!-- End Header -->


  <!-- catego-pag -->
  <section class="catego-pag">

    <div class="skew-arriba"></div>
    <div class="deg-background"></div>

    <div class="ejeZproject">
      <div class="container-project">

        <div class="project-title">
          <h2>Categorías</h2>
          <hr>
          <h3>Productos</h3>
        </div>
        <br>
        <br>

        <div class="contenedor-imagenes">

          <div class="imagen">
            <img src="assets/img/cate/libretas.jpg" alt="">
            <div class="overlay">
              <a href="{{ route('decoracion') }}">
                <p>Agendas y Calendarios</p>
              </a>

            </div>
          </div>

          <div class="imagen">
            <img src="assets/img/cate/pintura.jpg" alt="">
            <div class="overlay">
            <a href="{{ route('pinturas') }}">
                <p>Decoracion , Arte y Pintura</p>
              </a>
            </div>
          </div>

          <div class="imagen">
            <img src="assets/img/cate/bolografos.jpg" alt="">
            <div class="overlay">
            <a href="{{ route('plumones') }}">
                <p>Plumones , Boligrafos y Correctores </p>
              </a>
            </div>
          </div>

          <div class="imagen">
            <img src="assets/img/cate/calculadoras.jpg" alt="">
            <div class="overlay">
               <a href="{{ route('calculadoras') }}">
                <p>Calculadoras y Oficina</p>
              </a>
            </div>
          </div>

          <div class="imagen">
            <img src="assets/img/cate/colores1.jpg" alt="">
            <div class="overlay">
              <a href="{{ route('colores') }}">
                <p>Colores, Crayones y Plumones</p>
              </a>
            </div>
          </div>

          <div class="imagen">
            <img src="assets/img/cate/carpeta.jpg" alt="">
            <div class="overlay">
                <a href="{{ route('libreta') }}">
                <p>Cuadernos y Carpetas</p>
              </a>
            </div>
          </div>


          <div class="imagen">
            <img src="assets/img/cate/folders.webp" width="30">
            <div class="overlay">
            <a href="{{ route('sobres') }}">
                <p>Folders, Sobres y Archiveros</p>
              </a>
            </div>
          </div>
          <br><br>
          <br>


  </section>
</body>

</html>