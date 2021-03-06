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

      <h1 class="logo"><img src="assets/img/logo.png" alt="" width="48" height="48"></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
          <li><a href="{{ route('login') }}">Iniciar sesi??n </a></li>
          <li><a href="{{ route('loginad') }}"> <img src="assets/img/pencil2.png" alt="" width="40" height="40"> </a></li>
 
          

        </ul>
      </nav><!-- .nav-menu -->
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1><span>PAPELITOS <img src="assets/img/paper.png"  width="55" height="55" ></h1>
          <br>
          <h2 style="text-align:center"><FONT SIZE=50><span>"</span>Tus elementos esenciales del d??a a d??a.<span>"</span></FONT></h2>
          <br>
          <h3><FONT SIZE=6> Papelitos...Pide lo que quieras <img src="assets/img/pencil1.png"  width="55" height="55" ></FONT></h3>
        </div>
      </div>

</section><!-- End Hero -->

  <main id="main">

      
    <!-- ======= Clients Section ======= -->
     <!-- ======= Services Section ======= -->
     <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Papeleria Papelitos</h2>
          <hr size="50px" style="width: 20%" style="border-color:purplue;">
          <p>Marcas</p>
        </div>

    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">
        <div class="owl-carousel clients-carousel">
          <img src="assets/img/marcas/1.png" alt="">
          <img src="assets/img/marcas/2.png" alt="">
          <img src="assets/img/marcas/3.png" alt="">
          <img src="assets/img/marcas/4.png" alt="">
          <img src="assets/img/marcas/5.jpg" alt="">
          <img src="assets/img/marcas/6.png" alt="">
          <img src="assets/img/marcas/7.png" alt="">
          <img src="assets/img/marcas/8.jpg" alt="">
          <img src="assets/img/marcas/9.png" alt="">
        </div>

      </div>
    </section><!-- End Clients Section -->

  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Papelitos</h2>
          <p>??Encuentranos!</p>
        </div>

        <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.337606536032!2d-99.61884940272282!3d19.35452909485245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDIxJzE3LjYiTiA5OcKwMzcnMDAuMiJX!5e0!3m2!1ses!2smx!4v1606250905695!5m2!1ses!2smx" frameborder="0" allowfullscreen></iframe>
         </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Ubicaci??n:</h4>
                <p> Av. Miguel Hidalgo Poniente N?? 9 Col. La Mota Lerma</p>
              </div>
      
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Correo:</h4>
                <p>Papelitos@gmail.com</p>
              </div>
      
              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Tel??fono:</h4>
                <p>+52 72 75 62 89 06</p>
              </div>
      
            </div>
      
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <center><img src="assets/img/logo-1.jpeg" alt=""></div></center>
              
              <div class="form-group">
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Papelitos<span>.</span></h3>
              <p>
              Av. Miguel Hidalgo Poniente N?? 9 Col. La Mota Lerma<br><br>
                <strong>Tel??fono:</strong> +52 72 75 62 89 06<br>
                <strong>Correo:</strong>  Papelitos@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/Tecnosoportsda-101451932004112" class="facebook"><img src="assets/img/facebook.png" class="img-fluid" width="40px" alt="facebook TecnosoportSDA"></a>
                <a href="https://www.instagram.com/tecnosoportsda/" class="instagram"><img src="assets/img/instagram.png" class="img-fluid" width="40px" alt="TecnosoportSDA"></a>
               
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4></h4>
            <ul>
              <li></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4></h4>
            <ul>
              <li></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Formas de pago </h4>
            <p>Pago 100% seguro</p>
            <div class="social-links mt-3">
              
              <a href="#" class="paypal"><i class="bx bxl-paypal"></i></a>
              <a href="#" class="visa"><i class="bx bxl-visa"></i></a>
              <a href="#" class="mastercard"><i class="bx bxl-mastercard"></i></a>
              
            <form action="" method="post">
              
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
       Todos los derechos reservados Papeleria Papelitos
      </div>
      <div class="credits">
      <h1>PAPELITOS</h1>
        <br>
           <img src="assets/img/logo.png" alt="" width="150" height="150"></h1>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>