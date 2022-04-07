<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicia sesion</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="{{ asset('assets/img/img-7.jpg') }}" rel="icon">
    <link rel="stylesheet" href="inicio/assets/css/esti.css">
  </head>
  <body>

  <div class="contenedor">
    <div class="formulario">
    <p algin="right"><a href="{{ route('index') }}"><img src="assets/img/admi.png" alt="" width="75" height="75"></a></p>
    <h1>Inicia sesión</h1>

  <form name="nuevo" action="{{ route('validarad') }}" method="POST">
        {{ csrf_field() }}

        <input type='text' name='correo' placeholder="Ingresa tu correo" value="{{ old ('correo') }}">
        <input type='password' name='pass' placeholder="Ingresa tu contraseña" value="{{ old ('pass') }}">
        <input type='submit' value="Ingresar"><br>
        <br><br>
    </form>
   
    </div>
    
    <div class="button">
    <p>¡¡ Solo personal autorizado !!</p>
         <p></p>

  </body>
</html>





