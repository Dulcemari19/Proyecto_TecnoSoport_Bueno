<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: secunda.php');
  }
  require 'BASEDEDATOS.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header('Location: secunda.php');
    } else {
      $message = 'Lo sentimos, esas contraseñas no coinciden';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicia sesión</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="inicio/assets/css/est.css">
  </head>
  <body>
    

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <div class="contenedor">
    <div class="formulario">
    <p algin="right"><a href="SESIONES.php"><img src="assets/img/usuario.png" alt="" width="70" height="70"></a></p>
    <h1>Inicia sesión</h1>
    
    <form action="INICIASESION.php" method="POST">
      <input name="email" type="text" placeholder="Ingresa tu correo">
      <input name="password" type="password" placeholder="Ingresa tu contraseña">
      <input type="submit" value="Iniciar sesión">
    </form>
    </div>
    
    <div class="button">
    <p>Al regístrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link"  href="REGISTRO.php">Regístrate </a></p>

  </body>
</html>
