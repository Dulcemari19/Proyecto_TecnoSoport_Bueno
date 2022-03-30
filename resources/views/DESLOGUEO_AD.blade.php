<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /p/Gp/SESIONES_AD.php');
?>
