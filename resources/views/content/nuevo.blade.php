<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTRATE</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link rel="stylesheet" href="inicio/assets/css/est.css">
  </head>
  <body>

  <div class="formulario">
   
   <div class="contenedor">
   <p algin="right"><a href="{{ route('index') }}"><img src="assets/img/usuario.png" alt="" width="70" height="70"></a></p>
    <h1>Regístrate</h1>


        <form name="nuevo" action="{{ route('guardar') }}" method="POST">
              {{ csrf_field() }}
              
              @if(count($errors) > 0)
                  @foreach($errors->all() as $error)
                          {{ $errors }}<br>
                  @endforeach
              @endif

        <input type='text' name='nombre' placeholder="Nombre" value="{{ old ('nombre') }}">
        <input type='text' name='apellidos' placeholder="Apellidos" value="{{ old ('apellidos') }}">
        <input type='text' name='direc' placeholder="Dirrección" value="{{ old ('direc') }}">
        <input type='text' name='tel' placeholder="Teléfono" value="{{ old ('tel') }}">
        <input type='text' name='email' placeholder="Ingresa tu correo" value="{{ old ('email') }}">
        <input type='password' name='pass' placeholder="Ingresa tu contraseña" value="{{ old ('pass') }}">
        <input type='submit' value="Regístrar"><br>
        </form>
    </div>
    </div>
    <div class="button">
         <p>¿Ya tienes una cuenta?<a class="link" href="{{ route('login') }}">Iniciar Sesión</a></p>
  </body>
</html>