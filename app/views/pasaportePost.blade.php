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
	@if(isset($mensaje))
	<h3>{{$mensaje}}</h3>
	@endif
	<h2>Confirmación de pasaporte</h2>
	<p>Por favor, ingrese el número de pasaporte que ingresó en el formulario de la solicitud</p>
	{{ Form::open(array('action' => 'SolicitudController@pasaportePostSolicitudValidacion')) }}
		<input type="hidden" name='codigo_solicitud' value="{{$solicitud->codigo_formulario}}">
		<div class="form-group">
			{{ Form::label('pasaporte', 'Pasaporte', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-5">
				{{ Form::text('pasaporte', null, array('class' => 'form-control')) }}
			</div>
		</div>
		<button type="submit" id="botonToForm" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span> Validar</button>
	{{ Form::close() }}

	{{ HTML::script('assets/js/jquery-2.1.3.min.js') }}
	{{ HTML::script('assets/js/bootstrap.min.js') }}

</body>
</html>