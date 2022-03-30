<?php

  require 'BASEDEDATOS_AD.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado con éxito';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGíSTRATE</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="inicio/assets/css/esti.css">
  </head>
  <body>

    

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <div class="formulario">
   
    <div class="contenedor">
    <p algin="right"><a href="SESIONES_AD.php"><img src="assets/img/usuario.png" alt="" width="70" height="70"></a></p>
    <h1>Regístrate</h1>
    <form action="REGISTRO_AD.php" method="POST">
      <input name="email" type="text" placeholder="Ingresa tu correo">
      <input name="password" type="password" placeholder="Ingresa tu contraseña">
      <input name="confirm_password" type="password" placeholder="Confirma tu contraseña">
      <input type="submit" value="Regístrar">
    </form>
    </div>
    </div>
    <div class="button">
         <p>¿Ya tienes una cuenta?<a class="link" href="INICIASESION_AD.php">Iniciar Sesión</a></p>

  </body>
</html>