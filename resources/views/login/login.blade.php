<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicia sesión</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="{{ asset('assets/img/img-7.jpg') }}" rel="icon">//cambio de imagen para icono vista hasta arriba
    <link rel="stylesheet" href="{{ asset('inicio/assets/css/est.css') }}">
  </head>
  <body>

  <div class="contenedor">
    <div class="formulario">
    <p algin="right"><a href="{{ route('loginad') }}"><img src="assets/img/usuario.png" alt="" width="75" height="75"></a></p>

    <h1>Inicia sesión</h1>

  <form name="nuevo" action="{{ route('validar') }}" method="POST">
        {{ csrf_field() }}

        <input type='text' name='correo' placeholder="Ingresa tu correo" value="{{ old ('correo') }}">
        <input type='password' name='pass' placeholder="Ingresa tu contraseña" value="{{ old ('pass') }}">
        <input type='submit' value="Ingresar"><br>
        <br><br>
    </form>
   
    </div>
    
    <div class="button">
    <p>Al regístrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link"  href="{{ route('nuevo') }}">Regístrate </a></p>

  </body>
</html>





