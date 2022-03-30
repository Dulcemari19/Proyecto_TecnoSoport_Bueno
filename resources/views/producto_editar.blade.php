<?php
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: productos_formulario.php?info=Selecciona un equipo a editar');
    exit;
}
require_once 'conexion.php';
$sql = <<<fin
'SELECT  name, description, price
FROM products 
where id = :id'
fin;

$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':noserie_equipo' => $_GET['noserie_equipo']]);
$marca = $sentencia->fetch(PDO::FETCH_ASSOC);
if (false === $marca) {
    header('Location: formulario_producto.php?info=No se encontró la marca');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Administrador</title>
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

      <h1 class="logo"><a href="#"><img src="assets/img/logo.png" alt="" width="120" height="80"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
      

             

          
        </ul>
      </nav><!-- .nav-menu -->
    </header><!-- End Header -->

 
  <!-- Testimonios -->
  <section class="testimonios">
    <div class="testimonios-title">
     
    </div>
    <br>
     <br>
     <body>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <a href="jugue.php" class="btn btn-light btn-sm float-right"><i class="fa fa-chevron-circle-left"></i> Regresar</a>
                <i class="fa fa-car"></i> Editar equipo de computo
            </div>
            <div class="card-body">
                <form action="producto_actualiza.php" method="post">
                    <div class="form-group">
                        <label for="marca">Equipo de computo</label>
                        <input type="text" class="form-control form-control-sm" id="noserie_equipo" name="noserie_equipo" aria-describedby="noserie_equipoHelp" required value="<?php echo htmlentities($equipo_de_computo['equipo_de_computo']);?>">
                        <small id="marcaHelp" class="form-text text-muted">Escribe las caracterisitcas del equipo.</small>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> guardar</button>
                    <input type="hidden" name="noserie_equipo" value="<?php echo $equipos_de_computo['noserie_equipo'];?>">
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>