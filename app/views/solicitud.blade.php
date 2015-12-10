@extends('layout')
@section('content')
<div class="container">
	<div class="page-header">
		<figure>{{ HTML::image('assets/img/visate-horizontal.png') }}</figure><h1>Solicitud de Visa<span class="pull-right label label-default">ID = {{$solicitud->codigo_formulario}} </span></h1>
	</div>
	<div class="row">
		<div class="col-md-11">
			<div class="panel with-nav-tabs panel-primary">
				<div class="panel-heading">
					<ul class="nav nav-tabs id="sampleTabs"">
						<li class="active"><a href="#tab1primary" data-toggle="tab" class="tab1 moverTab">Principal</a></li>
						<li class="disabled"><a href="#tab2primary" class="tab2 moverTab">Datos de contacto</a></li>
						<li class="disabled"><a href="#tab3primary" class="tab3 moverTab">Pasaporte</a></li>
						<li class="disabled"><a href="#tab4primary" class="tab4 moverTab">Financiamiento</a></li>
						<li class="disabled"><a href="#tab5primary" class="tab5 moverTab">Última visita</a></li>
						<li class="disabled"><a href="#tab6primary" class="tab6 moverTab">Visita</a></li>
						<li class="disabled"><a href="#tab7primary" class="tab7 moverTab">Familia</a></li>
						<li class="disabled"><a href="#tab8primary" class="tab8 moverTab">Ocupación</a></li>
						<li class="disabled"><a href="#tab9primary" class="tab9 moverTab">Seguridad</a></li>
					</ul>
				</div>
				<div class="panel-body">
					<div id="myTabContent" class="tab-content">


						<div class="tab-pane fade in active" id="tab1primary">
							<p style="display: none">1</p>

							{{ Form::model($solicitud, ['method' => 'POST','id' => 'formulario_1', 'files' => true]) }}

							{{ Form::hidden('id_solicitud', $solicitud->id) }}

							<div class="form-group row">
								{{ Form::label('consulado', 'Consulado donde desea realizar su cita', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::select('consulado', array(
									'Monterrey, Nuevo León' => 'Monterrey, Nuevo León',
									'Cd. Juárez, Chihuahua' => 'Cd. Juárez, Chihuahua',
									'Guadalajara, Jalisco' => 'Guadalajara, Jalisco',
									'Cd. de México' => 'Cd. de México',
									'Hermosillo, Sonora' => 'Hermosillo, Sonora',
									'Matomoros, Tamaulipas' => 'Matomoros, Tamaulipas',
									'Mérida, Yucatán' => 'Mérida, Yucatán',
									'Nogales, Sonora' => 'Nogales, Sonora'
									),
									$solicitud->consulado, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('fecha_consulado_1', 'Rango de fechas cuando desea ir al consulado', array('class' => 'col-md-10 control-label')) }}
								<div class="col-md-3 col-xs-6 fecha">
									{{ Form::text('fecha_consulado_1', $solicitud->fecha_consulado_1, array('class' => 'form-control fecha')) }}
								</div>
								<div class="col-md-3 col-xs-6 fecha">
									{{ Form::text('fecha_consulado_2', $solicitud->fecha_consulado_2, array('class' => 'form-control fecha')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('apellidos', 'Apellidos del solicitante', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('apellidos', $solicitud->apellidos, array('class' => 'form-control', 'required')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('nombre', 'Nombre del solicitante', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('nombre', $solicitud->nombre, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('genero', 'Género', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::select('genero', array(
									'Masculino' => 'Masculino',
									'Femenino' => 'Femenino'
									),
									$solicitud->genero, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('estado_civil', 'Estado Civil', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::select('estado_civil', array(
									'Soltero(a)' => 'Soltero(a)',
									'Casado(a)' => 'Casado(a)',
									'Viudo(a)' => 'Viudo(a)',
									'Divorciado(a)' => 'Divorciado(a)'
									),
									$solicitud->estado_civil, array('class' => 'form-control', 'id' => 'estado_civil')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('fecha_nacimiento', 'Fecha de nacimiento', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6 fecha">
									{{ Form::text('fecha_nacimiento', $solicitud->fecha_nacimiento, array('class' => 'form-control fecha')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ciudad_nacimiento', 'Ciudad de nacimiento', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('ciudad_nacimiento', $solicitud->ciudad_nacimiento, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('estado_nacimiento', 'Estado de nacimiento', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('estado_nacimiento', $solicitud->estado_nacimiento, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('pais_nacimiento', 'País de nacimiento', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('pais_nacimiento', $solicitud->pais_nacimiento, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('nacionalidad', 'Nacionalidad', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('nacionalidad', $Nacionalidad, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="informacion_pareja">
								<br>
								<h2>Información de la pareja</h2>

								<div class="form-group row">
									{{ Form::label('pareja_apellidos', 'Apellidos', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('pareja_apellidos', $solicitud->pareja_apellidos, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pareja_nombre', 'Nombre(s)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('pareja_nombre', $solicitud->pareja_nombre, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pareja_nacimiento', 'Fecha de nacimiento', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('pareja_nacimiento', $solicitud->pareja_nacimiento, array('class' => 'form-control fecha')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pareja_nacionalidad', 'Nacionalidad', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('pareja_nacionalidad', $solicitud->pareja_nacionalidad, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="casado">
									<br>

									<div class="form-group row">
										{{ Form::label('casado_fecha', 'Fecha de inicio de matrimonio', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('casado_fecha', $solicitud->casado_fecha, array('class' => 'form-control fecha')) }}
										</div>
									</div>
								</div>

								<div class="divorciado">
									<br>

									<div class="form-group row">
										{{ Form::label('divorciado_matrimonio_fecha', 'Fecha de matrimonio', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('divorciado_matrimonio_fecha', $solicitud->divorciado_matrimonio_fecha, array('class' => 'form-control fecha')) }}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('divorciado_fecha', 'Fecha de divorcio', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('divorciado_fecha', $solicitud->divorciado_fecha, array('class' => 'form-control fecha')) }}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('divorciado_motivo', 'Motivo del divorcio', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::textarea('divorciado_motivo', $solicitud->divorciado_motivo, array('class' => 'form-control')) }}
										</div>
									</div>
								</div>

								<div class="viudo">
									<br>

									<div class="form-group row">
										{{ Form::label('viudo_fecha', 'Fecha en que enviudó', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('viudo_fecha', $solicitud->viudo_fecha, array('class' => 'form-control fecha')) }}
										</div>
									</div>
								</div>

							</div>

							<button type="button" class="btn btn-primary boton-siguiente">Guardar</button>
							{{ Form::close() }}
						</div>

						<div class="tab-pane fade" id="tab2primary">
							<p style="display: none">2</p>

							{{ Form::model($solicitud, ['method' => 'POST','id' => 'formulario_2', 'files' => true]) }}

							{{ Form::hidden('id_solicitud', $solicitud->id) }}

							<div class="form-group row">
								{{ Form::label('direccion', 'Direción', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('direccion', $solicitud->direccion, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('codigo_postal', 'Código Postal', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('codigo_postal', $solicitud->codigo_postal, array('class' => 'form-control numero', 'maxlength'=>'5')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('estado', 'Estado', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('estado', $solicitud->estado, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ciudad', 'Ciudad', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('ciudad', $solicitud->ciudad, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('pais', 'País', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('pais', $solicitud->pais, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('email', 'Correo electrónico', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::email('email', $solicitud->email, array('class' => 'form-control email')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('celular', 'Teléfono celular', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('celular', $solicitud->celular, array('class' => 'form-control numero', 'maxlength'=>'10')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('telefono', 'Teléfono de casa', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('telefono', $solicitud->telefono, array('class' => 'form-control numero', 'maxlength'=>'10')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('oficina', 'Teléfono oficina', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('oficina', $solicitud->oficina, array('class' => 'form-control numero', 'maxlength'=>'10')) }}
								</div>
							</div>

							<button type="button" class="btn btn-primary boton-siguiente boton-siguiente">Guardar</button>

							{{ Form::close() }}

						</div>



						<div class="tab-pane fade" id="tab3primary">
							<p style="display: none">3</p>

							{{ Form::model($solicitud, ['method' => 'POST','id' => 'formulario_3', 'files' => true]) }}

							{{ Form::hidden('id_solicitud', $solicitud->id) }}

							<div class="form-group row">
								{{ Form::label('pasaporte_tiene', '¿Cuenta con pasaporte?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::select('pasaporte_tiene', array(
									'No, quiero tramitarlo' => 'No, quiero tramitarlo',
									'Sí' => 'Sí'
									),
									$solicitud->pasaporte_tiene, array('class' => 'form-control', 'id' => 'pasaporte_tiene')) }}
								</div>
							</div>

							<div class="pasaporte_no_tiene">
								<div class="form-group row">
									{{ Form::label('curp', 'CURP', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('curp', $solicitud->curp, array('class' => 'form-control')) }}
									</div>
								</div>
							</div>

							<div class="pasaporte_tiene">

								<div class="form-group row">
									{{ Form::label('numero_pasaporte', 'Número de pasaporte', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('numero_pasaporte', $solicitud->numero_pasaporte, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pais_pasaporte', 'País donde se expidió el pasaporte', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('pais_pasaporte', $solicitud->pais_pasaporte, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('estado_pasaporte', 'Estado donde se expidió el pasaporte', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('estado_pasaporte', $solicitud->estado_pasaporte, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ciudad_pasaporte', 'Ciudad donde se expidió el pasaporte', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('ciudad_pasaporte', $solicitud->ciudad_pasaporte, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('fecha_expedicion', 'Fecha de emisión', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('fecha_expedicion', $solicitud->fecha_expedicion, array('class' => 'form-control fecha')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('fecha_vencimiento', 'Fecha de vencimiento', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('fecha_vencimiento', $solicitud->fecha_vencimiento, array('class' => 'form-control fecha')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pasaporte_perdido', '¿Ha perdido alguna vez su pasaporte?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('pasaporte_perdido', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->pasaporte_perdido, array('class' => 'form-control', 'id' => 'pasaporte_perdido')) }}
									</div>
								</div>
								<div class="pasaporte_perdido">
									<div class="form-group row">
										{{ Form::label('pasaporte_perdido_razon', 'Describa brevemente cómo lo perdió', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::textarea('pasaporte_perdido_razon', $solicitud->pasaporte_perdido_razon, array('class' => 'form-control','placeholder'=>'Si es así describa brevemente cómo lo perdió')) }}
										</div>
									</div>
								</div>

							</div>

							<button type="button" class="btn btn-primary boton-siguiente">Guardar</button>

							{{ Form::close() }}
						</div>



						<div class="tab-pane fade" id="tab4primary"> 
							<p style="display: none">4</p>

							{{ Form::model($solicitud, ['method' => 'POST','id' => 'formulario_4', 'files' => true]) }}

							{{ Form::hidden('id_solicitud', $solicitud->id) }}

							<div class="form-group row">
								{{ Form::label('financiamiento_persona', 'Persona que financía el viaje', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::select('financiamiento_persona', array(
									'Yo mismo' => 'Yo mismo',
									'Alguien más' => 'Alguien más'
									),
									$solicitud->financiamiento_persona, array('class' => 'form-control', 'id' => 'financiamiento_persona')) }}
								</div>
							</div>

							<div class="financiamiento_alguien_mas">
								<br>
								<h3>Datos de la persona que financía el viaje</h3>

								<div class="form-group row">
									{{ Form::label('financiamiento_apellidos', 'Apellidos', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('financiamiento_apellidos', $solicitud->financiamiento_apellidos, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('financiamiento_nombre', 'Nombre(s)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('financiamiento_nombre', $solicitud->financiamiento_nombre, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('financiamiento_telefono', 'Teléfono', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('financiamiento_telefono', $solicitud->financiamiento_telefono, array('class' => 'form-control numero', 'maxlength'=>'10')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('financiamiento_email', 'Correo electrónico', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::email('financiamiento_email', $solicitud->financiamiento_email, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('financiamiento_parentesco', 'Parentesco', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('financiamiento_parentesco', array(
										'Padre/Madre' => 'Padre/Madre',
										'Hijo(a)' => 'Hijo(a)',
										'Esposo(a)' => 'Esposo(a)',
										'Relativo(a)' => 'Relativo(a)',
										'Amigo(a)' => 'Amigo(a)',
										'Otro' => 'Otro'
										),
										$solicitud->financiamiento_parentesco, array('class' => 'form-control', 'id' => 'financiamiento_parentesco')) }}
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								{{ Form::label('financiamiento_pago', '¿Cómo realizará el pago de su visa?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::select('financiamiento_pago', array(
									'Efectivo' => 'Efectivo',
									'Transferencia' => 'Transferencia',
									'Crédito' => 'Crédito',
									),
									$solicitud->financiamiento_pago, array('class' => 'form-control', 'id' => 'financiamiento_pago')) }}
								</div>
							</div>
							<button type="button" class="btn btn-primary boton-siguiente">Guardar</button>
							{{ Form::close() }}
						</div>


						<div class="tab-pane fade" id="tab5primary"> 
							<p style="display: none">5</p>

							{{ Form::model($solicitud, ['method' => 'POST','id' => 'formulario_5', 'files' => true]) }}

							{{ Form::hidden('id_solicitud', $solicitud->id) }}

							<div class="form-group row">
								{{ Form::label('visitado', '¿Ha estado en Estado Unidos?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::select('visitado', array(
									'No' => 'No',
									'Sí' => 'Sí'
									),
									$solicitud->visitado, array('class' => 'form-control', 'id' => 'visitado')) }}
								</div>
							</div>

							<div class="visitado">
								<br>
								<h3>Última visita</h3>

								<div class="form-group row">
									{{ Form::label('visitado_fecha', 'Fecha de la última visita', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('visitado_fecha', $solicitud->visitado_fecha, array('class' => 'form-control fecha'))}}
									</div>
								</div>


								<div class="form-group row">
									{{ Form::label('visitado_tiempo', 'Duración de la última visita a Estados Unidos', array('class' => 'col-md-7 control-label')) }}
								</div>

								<div class="form-group row" name="visitado_tiempo">
									{{ Form::label('visitado_tiempo_1', 'Número', array('class' => 'col-sm-1 control-label')) }}
									<div class="col-sm-2">
										{{ Form::text('visitado_tiempo_1', $solicitud->visitado_tiempo_1, array('class' => 'form-control numero'))}}
									</div>
									<div class="col-sm-2">
										{{ Form::select('visitado_tiempo_2', array(
										'Días' => 'Días',
										'Meses' => 'Meses',
										'Años' => 'Años',
										),
										$solicitud->visitado_tiempo_2, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visitado_licencia', '¿Ha tenido licencia de conducir expedida en Estado Unidos?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('visitado_licencia', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->visitado_licencia, array('class' => 'form-control')) }}
									</div>
								</div>
							</div>

							<br>
							<br>
							<div class="form-group row">
								{{ Form::label('entrada_rechazada', '¿Alguna vez le han rechazado la entrada a Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::select('entrada_rechazada', array(
									'No' => 'No',
									'Sí' => 'Sí'
									),
									$solicitud->entrada_rechazada, array('class' => 'form-control', 'id' => 'entrada_rechazada')) }}
								</div>
							</div>

							<div class="entrada_rechazada">
								<div class="form-group row">
									{{ Form::label('entrada_rechazada_razon', '¿Cuál fue la razón por la que le negaron la entrada?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::textarea('entrada_rechazada_razon', $solicitud->entrada_rechazada_razon, array('class' => 'form-control', 'placeholder'=>'Explique brevemente cómo ocurrió')) }}
									</div>
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('visa_anterior', '¿Ha tenido visa anteriormente?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::select('visa_anterior', array(
									'No' => 'No',
									'Sí' => 'Sí'
									),
									$solicitud->visa_anterior, array('class' => 'form-control', 'id' => 'visa_anterior')) }}
								</div>
							</div>

							<div class="visa_anterior">
								<br>
								<h3>Última visa</h3>

								<div class="form-group row">
									{{ Form::label('visa_emision', 'Fecha de emisión de la última visa', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('visa_emision', $solicitud->visa_emision, array('class' => 'form-control fecha'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_expiracion', 'Fecha de expiración de la última visa', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('visa_expiracion', $solicitud->visa_expiracion, array('class' => 'form-control fecha'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_consulado', 'Consulado donde tramitó su visa anterior', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('visa_consulado', array(
										'Monterrey, Nuevo León' => 'Monterrey, Nuevo León',
										'Cd. Juárez, Chihuahua' => 'Cd. Juárez, Chihuahua',
										'Guadalajara, Jalisco' => 'Guadalajara, Jalisco',
										'Cd. de México' => 'Cd. de México',
										'Hermosillo, Sonora' => 'Hermosillo, Sonora',
										'Matomoros, Tamaulipas' => 'Matomoros, Tamaulipas',
										'Mérida, Yucatán' => 'Mérida, Yucatán',
										'Nogales, Sonora' => 'Nogales, Sonora'
										),
										$solicitud->visa_consulado, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_mismo_tipo', '¿Está aplicando para el mismo tipo de Visa?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('visa_mismo_tipo', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->visa_mismo_tipo, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_mismo_pais', '¿Está aplicando en el mismo país que la visa anterior y este es su país de residencia?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('visa_mismo_pais', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->visa_mismo_pais, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_huellas', '¿Le han tomado huella de los 10 dedos?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('visa_huellas', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->visa_huellas, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_perdida', '¿Alguna vez ha extraviado su Visa?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('visa_perdida', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->visa_perdida, array('class' => 'form-control', 'id' => 'visa_perdida')) }}
									</div>
								</div>

								<div class="visa_perdida">
									<div class="form-group row">
										{{ Form::label('visa_perdida_fecha', '¿En qué año perdió su Visa?', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('visa_perdida_fecha', $solicitud->visa_perdida_fecha, array('class' => 'form-control')) }}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('visa_perdida_razon', '¿Cómo perdió su Visa?', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::textarea('visa_perdida_razon', $solicitud->visa_perdida_razon, array('class' => 'form-control')) }}
										</div>
									</div>
								</div>

							</div>
							<button type="button" class="btn btn-primary boton-siguiente">Guardar</button>
							{{ Form::close() }}
						</div>


						<div class="tab-pane fade" id="tab6primary"> 
							<p style="display: none">6</p>

							{{ Form::model($solicitud, ['method' => 'POST','id' => 'formulario_6', 'files' => true]) }}

							{{ Form::hidden('id_solicitud', $solicitud->id) }}

								<div class="form-group row">
									{{ Form::label('itinerario_viaje', '¿Cuenta con un itinerario para su viaje?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('itinerario_viaje', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->itinerario_viaje, array('class' => 'form-control', 'id' => 'itinerario_viaje')) }}
									</div>

								</div>

								<div class="form-group row">
									{{ Form::label('estadia_eu', 'Una vez que esté en EU, ¿En dónde será su estadía?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('estadia_eu', array(
										'Hotel' => 'Hotel',
										'Domicilio particular' => 'Domicilio particular',
										'Otro' => 'Otro'
										),
										$solicitud->estadia_eu, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="estadia_eu">
									<div class="form-group row">
										{{ Form::label('estadia_hotel_estado', 'Estado donde se encuentra el hotel donde se hospedará', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('estadia_hotel_estado', $solicitud->estadia_hotel_estado, array('class' => 'form-control'))}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('estadia_hotel_ciudad', 'Ciudad donde se encuentra el hotel donde se hospedará', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('estadia_hotel_ciudad', $solicitud->estadia_hotel_ciudad, array('class' => 'form-control'))}}
										</div>
									</div>
								</div>

								<div class="itinerario_viaje">
									<div class="form-group row">
										{{ Form::label('estadia_domicilio', 'Domicilio del lugar al cual llegará', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('estadia_domicilio', $solicitud->estadia_domicilio, array('class' => 'form-control'))}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('estadia_telefono', 'Teléfono de contacto del lugar al cual llegará', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('estadia_telefono', $solicitud->estadia_telefono, array('class' => 'form-control numero', 'maxlength'=>'10'))}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('fecha_viaje', 'Fecha en la que desea realizar su próxima visita a Estados Unidos', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('fecha_viaje', $solicitud->fecha_viaje, array('class' => 'form-control fecha'))}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('estadia_tiempo_visita', '¿Cuánto tiempo planea estar de visita en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
									</div>

									<div class="form-group row" name="estadia_tiempo_visita">
										{{ Form::label('estadia_tiempo_dias', 'Número', array('class' => 'col-sm-1 control-label')) }}
										<div class="col-sm-2">
											{{ Form::text('estadia_tiempo_dias', $solicitud->estadia_tiempo_dias, array('class' => 'form-control numero'))}}
										</div>
										{{ Form::label('estadia_tiempo_meses', 'Something', array('class' => 'col-sm-1 control-label')) }}
										<div class="col-sm-2">
											{{ Form::select('estadia_tiempo_meses', array(
											'Días' => 'Días',
											'Meses' => 'Meses'
											),
											$solicitud->estadia_tiempo_meses, array('class' => 'form-control')) }}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('motivos_viaje', 'Motivos por los que desea realizar el viaje', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::textarea('motivos_viaje', $solicitud->motivos_viaje, array('class' => 'form-control'))}}
										</div>
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('compania', '¿Viajará alguien más con usted?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('compania', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->compania, array('class' => 'form-control', 'id'=>'compania')) }}
									</div>
								</div>

								<div class="compania">

									<div class="form-group row">
										{{ Form::label('compania_apellidos', 'Apellidos de la persona que viajará con usted', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('compania_apellidos', $solicitud->compania_apellidos, array('class' => 'form-control'))}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('compania_nombre', 'Nombre de la persona que viajará con usted', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('compania_nombre', $solicitud->compania_nombre, array('class' => 'form-control'))}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('compania_parentesco', 'Parentesco o relación con la persona que viajará con usted', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::select('compania_parentesco', array(
											'Padre/Madre' => 'Padre/Madre',
											'Hijo(a)' => 'Hijo(a)',
											'Amigo(a)' => 'Amigo(a)'
											),
											$solicitud->compania_parentesco, array('class' => 'form-control', 'id'=>'compania_parentesco')) }}
										</div>
									</div>
								</div>
								<br>

							<button type="button" class="btn btn-primary boton-siguiente">Guardar</button>
							{{ Form::close() }}

						</div>


						<div class="tab-pane fade" id="tab7primary"> 
							<p style="display: none">7</p>

							{{ Form::model($solicitud, ['method' => 'POST','id' => 'formulario_7', 'files' => true]) }}

							{{ Form::hidden('id_solicitud', $solicitud->id) }}

							<h3> Datos del Padre</h3>
							<br>

							<div class="form-group row">
								{{ Form::label('padre_apellidos', 'Apellidos del Padre', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('padre_apellidos', $solicitud->padre_apellidos, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('padre_nombre', 'Nombre(s) del Padre', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('padre_nombre', $solicitud->padre_nombre, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('padre_fecha_nacimiento', 'Fecha de nacimiento (opcional)', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('padre_fecha_nacimiento', $solicitud->padre_fecha_nacimiento, array('class' => 'form-control fecha'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('padre_encuentra_eu', '¿Se encuentra actualmente en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::select('padre_encuentra_eu', array(
									'No' => 'No',
									'Sí' => 'Sí'
									),
									$solicitud->padre_encuentra_eu, array('class' => 'form-control', 'id' => 'padre_encuentra_eu')) }}
								</div>
							</div>

							<div class="padre_estatus">
								<div class="form-group row">
									{{ Form::label('padre_estatus', '¿Cuál es su estatus?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('padre_estatus', array(
										'Ciudadano' => 'Ciudadano',
										'Residente' => 'Residente',
										'No migrate / Turista' => 'No migrate / Turista',
										'Otro' => 'Otro'
										),
										$solicitud->padre_estatus, array('class' => 'form-control')) }}
									</div>
								</div>
							</div>

							<br>
							<h3> Datos de la Madre</h3>
							<br>

							<div class="form-group row">
								{{ Form::label('madre_apellidos', 'Apellidos de la madre', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('madre_apellidos', $solicitud->madre_apellidos, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('madre_nombre', 'Nombre(s) de la madre', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('madre_nombre', $solicitud->madre_nombre, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('madre_fecha_nacimiento', 'Fecha de nacimiento (opcional)', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::text('madre_fecha_nacimiento', $solicitud->madre_fecha_nacimiento, array('class' => 'form-control fecha'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('madre_encuentra_eu', '¿Se encuentra actualmente en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::select('madre_encuentra_eu', array(
									'No' => 'No',
									'Sí' => 'Sí'
									),
									$solicitud->madre_encuentra_eu, array('class' => 'form-control', 'id' => 'madre_encuentra_eu')) }}
								</div>
							</div>

							<div class="madre_estatus">
								<div class="form-group row">
									{{ Form::label('madre_estatus', '¿Cuál es su estatus?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('madre_estatus', array(
										'Ciudadano' => 'Ciudadano',
										'Residente' => 'Residente',
										'No migrate / Turista' => 'No migrate / Turista',
										'Otro' => 'Otro'
										),
										$solicitud->madre_estatus, array('class' => 'form-control')) }}
									</div>
								</div>
							</div>

							<br>
							<br>

							<div class="form-group row">
								{{ Form::label('parientes_directos', '¿Tiene algún pariente directo en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::select('parientes_directos', array(
									'No' => 'No',
									'Sí' => 'Sí'
									),
									$solicitud->parientes_directos, array('class' => 'form-control', 'id' => 'parientes_directos')) }}
								</div>
							</div>

							<div class="pariente">
								<h3>Pariente</h3>
								<br>

								<div class="form-group row">
									{{ Form::label('pariente_apellidos', 'Apellidos', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('pariente_apellidos', $solicitud->pariente_apellidos, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pariente_nombre', 'Nombre(s)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('pariente_nombre', $solicitud->pariente_nombre, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pariente_relacion', 'Relación con usted', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('pariente_relacion', array(
										'Esposo(a)' => 'Esposo(a)',
										'Hijo(a)' => 'Hijo(a)',
										'Prometido(a)' => 'Prometido(a)',
										'Hermano(a)' => 'Hermano(a)'
										),
										$solicitud->pariente_relacion, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pariente_estatus', 'Estatus', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('pariente_estatus', array(
										'Ciudadano' => 'Ciudadano',
										'Residente' => 'Residente',
										'No migrante / Turista' => 'No migrante / Turista',
										'Otro' => 'Otro'
										),
										$solicitud->pariente_estatus, array('class' => 'form-control')) }}
									</div>
								</div>

							</div>

							<br>
							<div class="form-group row">
								{{ Form::label('parientes_no_directos', '¿Tiene parientes no directos en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::select('parientes_no_directos', array(
									'No' => 'No',
									'Sí' => 'Sí'
									),
									$solicitud->parientes_no_directos, array('class' => 'form-control')) }}
								</div>
							</div>

							<button type="button" class="btn btn-primary boton-siguiente">Guardar</button>
							{{ Form::close() }}
						</div>


						<div class="tab-pane fade" id="tab8primary"> 
							<p style="display: none">8</p>

							{{ Form::model($solicitud, ['method' => 'POST','id' => 'formulario_8', 'files' => true]) }}

							{{ Form::hidden('id_solicitud', $solicitud->id) }}

							<div class="form-group row">
								{{ Form::label('ocupacion', '¿Cuál es su ocupación?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{ Form::select('ocupacion', array(
									'Estudiante' => 'Estudiante',
									'Empleado (Empresa privada)' => 'Empleado (Empresa privada)',
									'Empleado (Gobierno)' => 'Empleado (Gobierno)',
									'Negocio propio' => 'Negocio propio',
									'Ama de casa' => 'Ama de casa',
									'Jubilado(a)' => 'Jubilado(a)',
									'Pensionado(a)' => 'Pensionado(a)',
									'Infante (Menor de 3 años)' => 'Infante (Menor de 3 años)'
									),
									$solicitud->ocupacion, array('class' => 'form-control', 'id'=>'ocupacion')) }}
								</div>
							</div>

							<div class="ocupacion">
								<div class="form-group row">
									{{ Form::label('ocupacion_nombre', 'Nombre de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('ocupacion_nombre', $solicitud->ocupacion_nombre, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_direccion', 'Dirección de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('ocupacion_direccion', $solicitud->ocupacion_direccion, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_codigo_postal', 'Código postal de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('ocupacion_codigo_postal', $solicitud->ocupacion_codigo_postal, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_estado', 'Estado donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('ocupacion_estado', $solicitud->ocupacion_estado, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_pais', 'País donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('ocupacion_pais', $solicitud->ocupacion_pais, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_telefono', 'Teléfono de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('ocupacion_telefono', $solicitud->ocupacion_telefono, array('class' => 'form-control numero', 'maxlength'=>'10'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_descripcion', '¿Qué hace en su ocupación?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::textarea('ocupacion_descripcion', $solicitud->ocupacion_descripcion, array('class' => 'form-control', 'placeholder'=>'Describa brevemente a qué se dedica')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ingreso_mensual', 'Ingreso mensual en moneda mexicana', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('ingreso_mensual', $solicitud->ingreso_mensual, array('class' => 'form-control'))}}
									</div>
								</div>

							</div>

							<br>
							<div class="no_infante">
								<h3>Ocupación anterior</h3>
								<div class="form-group row">
									{{ Form::label('ocupacion_anterior', 'Antes de su actual actividad ¿A qué se dedicaba?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('ocupacion_anterior', array(
										'Estudiante' => 'Estudiante',
										'Empleado (Empresa privada)' => 'Empleado (Empresa privada)',
										'Empleado (Gobierno)' => 'Empleado (Gobierno)',
										'Negocio propio' => 'Negocio propio',
										'Ama de casa' => 'Ama de casa'
										),
										$solicitud->ocupacion_anterior, array('class' => 'form-control', 'id' => 'ocupacion_anterior')) }}
									</div>
								</div>

								<div class="ocupacion_anterior">
									<div class="form-group row">
										{{ Form::label('ocupacion_anterior_nombre', 'Nombre de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('ocupacion_anterior_nombre', $solicitud->ocupacion_anterior_nombre, array('class' => 'form-control'))}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('ocupacion_anterior_direccion', 'Dirección de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('ocupacion_anterior_direccion', $solicitud->ocupacion_anterior_direccion, array('class' => 'form-control'))}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('ocupacion_anterior_codigo_postal', 'Código postal de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('ocupacion_anterior_codigo_postal', $solicitud->ocupacion_anterior_codigo_postal, array('class' => 'form-control'))}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('ocupacion_anterior_estado', 'Estado donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('ocupacion_anterior_estado', $solicitud->ocupacion_anterior_estado, array('class' => 'form-control'))}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('ocupacion_anterior_pais', 'País donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('ocupacion_anterior_pais', $solicitud->ocupacion_anterior_pais, array('class' => 'form-control'))}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('ocupacion_anterior_telefono', 'Teléfono de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('ocupacion_anterior_telefono', $solicitud->ocupacion_anterior_telefono, array('class' => 'form-control numero', 'maxlength'=>'10'))}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('ocupacion_anterior_periodo', '¿Durante qué periodo (años) estuve en esa ocupación?', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::text('ocupacion_anterior_periodo', $solicitud->ocupacion_anterior_periodo, array('class' => 'form-control'))}}
										</div>
									</div>
								</div>
							</div>

							<div class="ocupacion_anterior_nombre_escuela">
								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_nombre_escuela', 'Nombre completo de la institución educativa donde estudiaba antes de su ocupación anterior a la actual', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::text('ocupacion_anterior_nombre_escuela', $solicitud->ocupacion_anterior_nombre_escuela, array('class' => 'form-control'))}}
									</div>
								</div>
							</div>

							<button type="button" class="btn btn-primary boton-siguiente">Guardar</button>
							{{ Form::close() }}
						</div>


						<div class="tab-pane fade" id="tab9primary"> 
							<p style="display: none">9</p>

							{{ Form::model($solicitud, ['method' => 'POST','id' => 'formulario_9', 'files' => true]) }}

							{{ Form::hidden('id_solicitud', $solicitud->id) }}

								<div class="form-group row">
									{{ Form::label('arrestado', '¿Has sido arrestado por algún crimen o delito?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{ Form::select('arrestado', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->arrestado, array('class' => 'form-control', 'id'=>'arrestado')) }}
									</div>
								</div>

								<div class="arrestado">
									<div class="form-group row">
										{{ Form::label('arrestado_motivo', '¿Cuál fue el motivo de su arresto?', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{ Form::textarea('arrestado_motivo', $solicitud->arrestado_motivo, array('class' => 'form-control','placeholder'=>'Explique brevemente el porqué de su arresto'))}}
										</div>
									</div>
								</div>

							<button type="button" class="btn btn-primary boton-siguiente" id="guardarFinal">Guardar</button>

							{{ Form::close() }}
						</div>
					</div> <!-- Fin de tab-content -->
				</div> <!--Fin de panel-body -->
			</div>
		</div>
	</div> <!-- Fin de row -->
</div> <!-- Fin de container -->

<div class="modal fade" id="modalInicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"> Mensaje Inicial</h4>
			</div>
			<div class="modal-body">
				Mensaje Inicial
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalFinal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"> Mensaje Final</h4>
			</div>
			<div class="modal-body">
				Mensaje Final
			</div>
			<div class="modal-footer">
				{{ Form::open(array('action' => 'SolicitudController@postSolicitud')) }}
				<input type="hidden" name='email_final'>
				<button type="submit" class="btn btn-info"> Terminar</button>
				{{ Form::close() }}
				<button type="button" class="btn btn-default" data-dismiss="modal">Regresar</button>
			</div>
		</div>
	</div>
</div>
@include('solicitudjs')
@stop