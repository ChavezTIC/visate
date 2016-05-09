<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Administrador VISATE</title>
  <link rel="shortcut icon" type="image/png" href="http://awsd4bb9323.bitnamiapp.com/visate/public/assets/images/favicon.png"/>
  {{ HTML::style('assets/css/bootstrap.min.css') }}
  {{ HTML::style('assets/css/estilo.css') }}
</head>
<body>
	<a class="btn btn-default" role="button" href="{{ URL::to('logout') }}" onclick="return confirm('¿Desea cerrar sesión?')">Cerrar sesión <span class="glyphicon glyphicon-log-out"></span></a>
  	
  	@if (Session::has('message'))
  	<div class="alert alert-success mensajeUsuarios">
  		{{ Session::get('message') }}
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times;</span>
  		</button>
  	</div>
  	@endif

<table class="table table-bordered table-hover">
	<thead class="headtable">
		<tr>
			<th>Código</th>
			<th>Nombre del solicitante</th>
			<th>Pasaporte</th>
			<th>Opciones</th>
			<th>Fecha</th>
		</tr>
	</thead>
	<tbody>
		@foreach($solicitudes as $solicitud)
		<tr>
			<td>{{$solicitud->codigo_formulario}}</td>
			<td>{{$solicitud->nombre.' '.$solicitud->apellidos}}</td>
			<td>{{$solicitud->numero_pasaporte}}</td>
			<td>
				<a class="btn btn-default" role="button" href="{{ URL::to('admin/'. $solicitud->codigo_formulario ) }}">Datos de la solicitud <span class="glyphicon glyphicon-new-window"></span></a>
				{{ Form::open(array('url' => 'admin/delete/' . $solicitud->id,'onsubmit'=>"return confirm('¿Está seguro que desea eliminar esta solicitud?');")) }}
				{{ Form::hidden('_method', 'DELETE') }}
				<span data-toggle="tooltip" data-placement="top" title="Eliminar solicitud"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></span>
				<a class="btn btn-default" role="button" href="{{ URL::to('solicitud/'. $solicitud->codigo_formulario ) }}"><span class="glyphicon glyphicon-edit"></span></a>
				{{ Form::close() }}
			</td>
			<td>{{$solicitud->created_at}}</td>
		</tr>
		@endforeach
	</tbody>
</table>

    {{ HTML::script('assets/js/jquery-2.1.3.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}

</body>
</html>