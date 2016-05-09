<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>To Form</title>
	{{ HTML::style('assets/css/bootstrap.min.css') }}
	{{ HTML::style('assets/css/estilo.css') }}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

	Formulario Recibido
	<br>
	Nombre: {{$solicitud->nombre.' '.$solicitud->apellidos}}
	<br>
	Email: {{$solicitud->email}}
	<br>

	{{ Form::open(array('action' => 'SolicitudController@nuevoForm')) }}
	<input type="hidden" name='id_solicitud' value="{{$solicitud->codigo_formulario}}">
	<button type="submit" class="btn btn-info">Llenar formulario de un familiar</button>
	{{ Form::close() }}

	{{ HTML::script('assets/js/jquery-2.1.3.min.js') }}
	{{ HTML::script('assets/js/bootstrap.min.js') }}

</body>
</html>