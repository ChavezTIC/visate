@extends('layoutindex')
@section('contents')
<!--........................................  Contacto  .....................................-->
<!--.........................................................................................-->

<div class="espacio_negro"></div>

	<section class="sign-up section-padding text-center" id="download">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h3>¿Tienes alguna duda?</h3>
					<p>Compártenos cualquier inquietud que tengas</p>
					{{ Form::open(array('url' => 'preguntas','class' => 'signup-form')) }}
						<div class="form-input-group">
							<i class="fa fa-envelope"></i>{{ Form::text('email', null, array('placeholder'=>'Ingresa tu E-mail','required' => 'required')) }}
						</div>
						<div class="form-input-group textarea-form">
							<i class="fa fa-pencil-square-o"></i>{{ Form::textarea('texto', null, array('placeholder'=>'¿Qué dudas tienes?','required' => 'required')) }}
						</div>
						<button type="submit" class="btn-fill sign-up-btn">Enviar</button>		
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</section>

@stop