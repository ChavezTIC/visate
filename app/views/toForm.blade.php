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

	<a class="btn btn-default" role="button" href="{{ URL::to('solicitud') }}">Nueva Solicitud <span class="fa fa-file-text"></span></a>

		{{ HTML::script('assets/js/jquery-2.1.3.min.js') }}
		{{ HTML::script('assets/js/bootstrap.min.js') }}


		<div class="jumbotron">
			@if (Session::has('message'))
			<div class="alert alert-danger mensaje">
				{{ Session::get('message') }}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			@endif

			{{ Form::open(array('url' => 'solicitud/editar','class' => 'form-horizontal')) }}
				<div class="form-group">
					{{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) }}
					<div class="col-sm-5">
						{{ Form::text('email', null, array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('pasaporte', 'Número de pasaporte', array('class' => 'col-sm-2 control-label')) }}
					<div class="col-sm-5">
						{{ Form::text('pasaporte', null, array('class' => 'form-control')) }}
					</div>
				</div>
				<button type="submit" id="botonToForm" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span> Ir al formulario</button>
			{{ Form::close() }}
		</div>
</body>
</html>