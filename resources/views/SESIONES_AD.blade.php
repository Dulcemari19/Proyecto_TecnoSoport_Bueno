<?php
  session_start();

  require 'BASEDEDATOS_AD.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="inicio/assets/css/SESIONES2.css">
  </head>
  <body>
    

  <?php if(!empty($user)): ?>
      <div class="formulario">
      <div class="contenedor">
      <h1>Hola!! </h1> 
      <div class="button">
      <?= $user['email']; ?>
      <p>puedes
      <a class="link" href="DESLOGUEO_AD.php">
        cerrar sesión
      </a></p>
    <?php else: ?>
      
      <div class="formulario">
      <div class="contenedor">
      <p algin="right"><a href="Juguettoys.php"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.646 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
          </svg></a></p>
      <h1>Bienvenido</h1>
      <div class="button">
      <a class="link" href="INICIASESION_AD.php">Inicia sesión</a> o
      <a class="link" href="REGISTRO_AD.php">Regístrate</a>
    <?php endif; ?>
  </body>
</html>
