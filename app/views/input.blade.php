<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Input to landing</title>
	{{ HTML::style('assets/css/bootstrap.min.css') }}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<style>
		.caja {
			display: inline-block;
			text-align: center;
			margin: 50px 20%;
			width: 50%;
			border-radius: 15px;
			background-color: #E0E0E0;
			padding: 5%;
		}
	</style>
</head>
<body>

	<div class="caja">
		{{ Form::open(array('url' => 'input/nuevo','class' => 'form-horizontal')) }}
			<div class="form-group">
				{{ Form::label('texto', 'Texto', array('class' => 'col-sm-2 control-label')) }}
				<div class="col-sm-10">
					{{ Form::text('texto', null, array('class' => 'form-control')) }}
				</div>
			</div>
			<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-ok"></span> Go</button>
		{{ Form::close() }}
	</div>


	{{ HTML::script('assets/js/jquery-2.1.3.min.js') }}
	{{ HTML::script('assets/js/bootstrap.min.js') }}
</body>
</html>