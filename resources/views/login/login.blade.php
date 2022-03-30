<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio de sesión</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('inicio/assets/css/est.css') }}">
  </head>
  <body>

  <div class="contenedor">
    <div class="formulario">
    <p algin="right"><a href="{{ route('index') }}"><img src="assets/img/usuario.png" alt="" width="70" height="70"></a></p>

    <h1>Inicio de sesión</h1>

  <form name="nuevo" action="{{ route('validar') }}" method="POST">
        {{ csrf_field() }}

        <input type='text' name='correo' placeholder="Ingresa tu correo" value="{{ old ('correo') }}">
        <input type='password' name='pass' placeholder="Ingresa tu contraseña" value="{{ old ('pass') }}">
        <input type='submit' value="Ingresar"><br>
        <br><br>
    </form>
   
    </div>
    
    <div class="button">
  <p>¿No tienes una cuenta? <a class="link"  href="{{ route('nuevo') }}">Regístrate </a></p>

  </body>
</html>




