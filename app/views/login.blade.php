<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>VISATE ADMIN</title>
  {{ HTML::style('assets/css/bootstrap.min.css') }}
  {{ HTML::style('assets/css/estilo.css') }}
</head>
<body>
  <h4 class="tituloLogin">Acceso</h4>

  <div class="erroresLogin">
    {{ HTML::ul($errors->all() )}}
  </div>

  @if (Session::has('message'))
  <div class="alert alert-warning">
    {{ Session::get('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

  {{ Form::open(array('url' => 'login')) }}
  {{ Form::text('email', Input::old('email'), array('class' => 'form-control camposLogin', 'placeholder' => 'correo')) }}
  <br>
  <input type="password" name="password" class="form-control camposLogin" placeholder="contraseña" />
  <br>
  <div class="wrapperLogin">
    <button type="submit" class="btn btn-info">Entrar  <span class="glyphicon glyphicon-log-in"></span></button>
  </div>
  {{ Form::close() }}

    {{ HTML::script('assets/js/jquery-2.1.3.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}

 </body>
</html>