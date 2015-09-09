@extends('layout')
@section('content')
<link rel="shortcut icon" href="assets/images/favicon.ico?v=2" />
<div class="container">
	<div class="page-header">
		<h1>Hola Admin<span class="pull-right label label-default">ID = {{$solicitud->codigo_formulario}} </span></h1>
		<a class="btn btn-default" role="button" href="{{ URL::to('admin') }}">Regregar al panel <span class="glyphicon glyphicon-new-window"></span></a>
	</div>
	<div class="row">
		<div class="col-md-11">
			<div class="panel with-nav-tabs panel-primary">
				<div class="panel-heading">
					<ul class="nav nav-tabs id="sampleTabs"">
						<li class="active"><a href="#tab1primary" data-toggle="tab">Principal</a></li>
						<li><a href="#tab2primary" data-toggle="tab" onclick="sendToServer()">Datos de contacto</a></li>
						<li><a href="#tab3primary" data-toggle="tab" onclick="sendToServer()">Pasaporte</a></li>
						<li><a href="#tab4primary" data-toggle="tab" onclick="sendToServer()">Financiamiento</a></li>
						<li><a href="#tab5primary" data-toggle="tab" onclick="sendToServer()">Última visita</a></li>
						<li><a href="#tab6primary" data-toggle="tab" onclick="sendToServer()">Visita</a></li>
						<li><a href="#tab7primary" data-toggle="tab" onclick="sendToServer()">Familia</a></li>
						<li><a href="#tab8primary" data-toggle="tab" onclick="sendToServer()">Ocupación</a></li>
						<li><a href="#tab9primary" data-toggle="tab" onclick="sendToServer()">Acompañante</a></li>
						<li><a href="#tab10primary" data-toggle="tab" onclick="sendToServer()">Seguridad</a></li>
					</ul>
				</div>
				<div class="panel-body">
					<div id="myTabContent" class="tab-content">

						<!--{{ Form::open(array('id'=>'formulario_solicitud')) }}-->

						{{ Form::hidden('id_solicitud', $solicitud->id, array('id' => 'id_solicitud')) }}

						<div class="tab-pane fade in active" id="tab1primary">
							<p style="display: none">1</p>

							<div class="form-group row">
								{{ Form::label('consulado', 'Consulado donde desea realizar su cita', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->consulado}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('fecha_consulado_1', 'Rango de fechas cuando desea ir al consulado', array('class' => 'col-md-10 control-label')) }}
								<div class="col-md-3 col-xs-6 fecha">
									{{$solicitud->fecha_consulado_1}}
								</div>
								<div class="col-md-3 col-xs-6 fecha">
									{{$solicitud->fecha_consulado_2}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('apellidos', 'Apellidos del solicitante', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->apellidos}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('nombre', 'Nombre del solicitante', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->nombre}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('genero', 'Género', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->genero}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('estado_civil', 'Estado Civil', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->estado_civil}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('fecha_nacimiento', 'Fecha de nacimiento', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6 fecha">
									{{$solicitud->fecha_nacimiento}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ciudad_nacimiento', 'Ciudad de nacimiento', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->ciudad_nacimiento}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('estado_nacimiento', 'Estado de nacimiento', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->estado_nacimiento}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('pais_nacimiento', 'País de nacimiento', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->pais_nacimiento}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('nacionalidad', 'Nacionalidad', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->nacionalidad}}
								</div>
							</div>

							<div class="informacion_pareja">
								<br>
								<h2>Información de la pareja</h2>

								<div class="form-group row">
									{{ Form::label('pareja_apellidos', 'Apellidos', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->pareja_apellidos}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pareja_nombre', 'Nombre(s)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->pareja_nombre}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pareja_nacimiento', 'Fecha de nacimiento', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->pareja_nacimiento}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pareja_nacionalidad', 'Nacionalidad', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->pareja_nacionalidad}}
									</div>
								</div>

								<div class="casado">
									<br>

									<div class="form-group row">
										{{ Form::label('casado_fecha', 'Fecha de inicio de matrimonio', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{$solicitud->casado_fecha}}
										</div>
									</div>
								</div>

								<div class="divorciado">
									<br>

									<div class="form-group row">
										{{ Form::label('divorciado_matrimonio_fecha', 'Fecha de matrimonio', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{$solicitud->divorciado_matrimonio_fecha}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('divorciado_fecha', 'Fecha de divorcio', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{$solicitud->divorciado_fecha}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('divorciado_motivo', 'Motivo del divorcio', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{$solicitud->divorciado_motivo}}
										</div>
									</div>
								</div>

								<div class="viudo">
									<br>

									<div class="form-group row">
										{{ Form::label('viudo_fecha', 'Fecha en que enviudó', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{$solicitud->viudo_fecha}}
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="tab-pane fade" id="tab2primary">
							<p style="display: none">2</p>

							<div class="form-group row">
								{{ Form::label('direccion', 'Dirreción', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->direccion}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('codigo_postal', 'Código Postal', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->codigo_postal}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('estado', 'Estado', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->estado}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ciudad', 'Ciudad', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->ciudad}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('pais', 'País', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->pais}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('celular', 'Teléfono celular', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->celular}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('telefono', 'Teléfono de casa', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->telefono}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('oficina', 'Teléfono oficina', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->oficina}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('email', 'Correo electrónico', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->email}}
								</div>
							</div>
                        </div>



                        <div class="tab-pane fade" id="tab3primary">
                        	<p style="display: none">3</p>

							<div class="form-group row">
								{{ Form::label('pasaporte_tiene', '¿Cuenta con pasaporte?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->pasaporte_tiene}}
								</div>
							</div>

							<div class="pasaporte_no_tiene">
								<div class="form-group row">
									{{ Form::label('curp', 'CURP', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->curp}}
									</div>
								</div>
							</div>


							<div class="pasaporte_tiene">

								<div class="form-group row">
									{{ Form::label('numero_pasaporte', 'Número de pasaporte', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->numero_pasaporte}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pais_pasaporte', 'País donde se expidió el pasaporte', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->pais_pasaporte}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('estado_pasaporte', 'Estado donde se expidió el pasaporte', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->estado_pasaporte}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ciudad_pasaporte', 'Ciudad donde se expidió el pasaporte', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ciudad_pasaporte}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('fecha_expedicion', 'Fecha de expedición', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->fecha_expedicion}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('fecha_vencimiento', 'Fecha de vencimiento', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->fecha_vencimiento}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pasaporte_perdido', '¿Ha perdido alguna vez su pasaporte?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->pasaporte_perdido}}
									</div>
								</div>
								<div class="pasaporte_perdido">
									<div class="form-group row">
										{{ Form::label('pasaporte_perdido_razon', 'Describa brevemente cómo lo perdió', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{$solicitud->pasaporte_perdido_razon}}
										</div>
									</div>
								</div>

							</div>
						</div>



						<div class="tab-pane fade" id="tab4primary"> 
							<p style="display: none">4</p>

							<div class="form-group row">
								{{ Form::label('financiamiento_persona', 'Persona que financía el viaje', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->financiamiento_persona}}
								</div>
							</div>

							<div class="financiamiento_alguien_mas">
								<br>
								<h3>Datos de la persona que financía el viaje</h3>

								<div class="form-group row">
									{{ Form::label('financiamiento_apellidos', 'Apellidos', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->financiamiento_apellidos}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('financiamiento_nombre', 'Nombre(s)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->financiamiento_nombre}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('financiamiento_telefono', 'Teléfono', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->financiamiento_telefono}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('financiamiento_email', 'Correo electrónico', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->financiamiento_email}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('financiamiento_parentesco', 'Parentesco', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->financiamiento_parentesco}}
									</div>
								</div>
							</div>
						</div>


						<div class="tab-pane fade" id="tab5primary"> 
							<p style="display: none">5</p>

							<div class="form-group row">
								{{ Form::label('visitado', '¿Ha estado en Estado Unidos?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->visitado}}
								</div>
							</div>

							<div class="visitado">
								<br>
								<h3>Última visita</h3>

								<div class="form-group row">
									{{ Form::label('visitado_fecha', 'Fecha de la última visita', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->visitado_fecha}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visitado_tiempo', 'Tiempo pasado en la última visita a Estados Unidos', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->visitado_tiempo}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visitado_licencia', '¿Ha tenido licencia de conducir expedida en Estado Unidos?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->visitado_licencia}}
									</div>
								</div>
							</div>

							<br>
							<br>
							<div class="form-group row">
								{{ Form::label('entrada_rechazada', '¿Alguna vez le han rechazado la entrada a Estados Unidos estando en el puente?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->entrada_rechazada}}
								</div>
							</div>

							<div class="entrada_rechazada">
								<div class="form-group row">
									{{ Form::label('entrada_rechazada_razon', '¿Cuál fue la razón por la que le negaron la entrada?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->entrada_rechazada_razon}}
									</div>
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('visa_anterior', '¿Ha tenido visa anteriormente?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->visa_anterior}}
								</div>
							</div>

							<div class="visa_anterior">
								<br>
								<h3>Última visa</h3>

								<div class="form-group row">
									{{ Form::label('visa_emision', 'Fecha de emisión de la última visa', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->visa_emision}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_expiracion', 'Fecha de expiración de la última visa', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->visa_expiracion}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_consulado', 'Consulado donde tramitó su visa anterior', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->visa_consulado}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_mismo_tipo', '¿Está aplicando para el mismo tipo de Visa?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->visa_mismo_tipo}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_mismo_pais', '¿Está aplicando en el mismo país que la visa anterior y este es su país de residencia?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->visa_mismo_pais}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_huellas', '¿Le han tomado huella de los 10 dedos?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->visa_huellas}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_perdida', '¿Alguna vez ha extraviado su Visa?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->visa_perdida}}
									</div>
								</div>

								<div class="visa_perdida">
									<div class="form-group row">
										{{ Form::label('visa_perdida_fecha', '¿En qué año perdió su Visa?', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{$solicitud->visa_perdida_fecha}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('visa_perdida_razon', '¿Cómo perdió su Visa?', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{$solicitud->visa_perdida_razon}}
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="tab-pane fade" id="tab6primary"> 
							<p style="display: none">6</p>

								<div class="form-group row">
									{{ Form::label('motivos_viaje', 'Motivos por los que desea realizar el viaje', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->motivos_viaje}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('fecha_viaje', 'Fecha en la que desea realizar su próxima visita a Estados Unidos', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->fecha_viaje}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('estadia_eu', 'Una vez que esté en EU, ¿En dónde será su estadía?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->estadia_eu}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('estadia_domicilio', 'Domicilio del lugar al cual llegará', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->estadia_domicilio}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('estadia_telefono', 'Teléfono de contacto del lugar al cual llegará', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->estadia_telefono}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('estadia_tiempo_visita', '¿Cuánto tiempo planea estar de visita en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
								</div>
									<div class="col-md-6">
										Días {{$solicitud->estadia_tiempo_dias}}
										Meses {{$solicitud->estadia_tiempo_meses}}
									</div>
									</div>
								</div>
								<br>
						</div>


						<div class="tab-pane fade" id="tab7primary"> 
							<p style="display: none">7</p>

							<h3> Datos del Padre</h3>
							<br>

							<div class="form-group row">
								{{ Form::label('padre_apellidos', 'Apellidos del Padre', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->padre_apellidos}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('padre_nombre', 'Nombre(s) del Padre', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->padre_nombre}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('padre_fecha_nacimiento', 'Fecha de nacimiento (opcional)', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->padre_fecha_nacimiento}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('padre_encuentra_eu', '¿Se encuentra actualmente en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->padre_encuentra_eu}}
								</div>
							</div>

							<div class="padre_estatus">
								<div class="form-group row">
									{{ Form::label('padre_estatus', '¿Cuál es su estatus?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->padre_estatus}}
									</div>
								</div>
							</div>

							<br>
							<h3> Datos de la Madre</h3>
							<br>

							<div class="form-group row">
								{{ Form::label('madre_apellidos', 'Apellidos de la madre', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->madre_apellidos}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('madre_nombre', 'Nombre(s) de la madre', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->madre_nombre}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('madre_fecha_nacimiento', 'Fecha de nacimiento (opcional)', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->madre_fecha_nacimiento}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('madre_encuentra_eu', '¿Se encuentra actualmente en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->madre_encuentra_eu}}
								</div>
							</div>

							<div class="madre_estatus">
								<div class="form-group row">
									{{ Form::label('madre_estatus', '¿Cuál es su estatus?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->madre_estatus}}
									</div>
								</div>
							</div>

							<br>
							<br>

							<div class="form-group row">
								{{ Form::label('parientes_directos', '¿Tiene algún pariente directo en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->parientes_directos}}
								</div>
							</div>

							<div class="pariente">
								<h3>Pariente</h3>
								<br>

								<div class="form-group row">
									{{ Form::label('pariente_apellidos', 'Apellidos', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->pariente_apellidos}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pariente_nombre', 'Nombre(s)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->pariente_nombre}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pariente_relacion', 'Relación con usted', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->pariente_relacion}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pariente_estatus', 'Estatus', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->pariente_estatus}}
									</div>
								</div>

							</div>

							<br>
							<div class="form-group row">
								{{ Form::label('parientes_no_directos', '¿Tiene parientes no directos en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->parientes_no_directos}}
								</div>
							</div>
						</div>


						<div class="tab-pane fade" id="tab8primary"> 
							<p style="display: none">8</p>

							<div class="form-group row">
								{{ Form::label('ocupacion', '¿Cuál es su ocupación?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->ocupacion}}
								</div>
							</div>

							<div class="ocupacion">
								<div class="form-group row">
									{{ Form::label('ocupacion_nombre', 'Nombre de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ocupacion_nombre}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_direccion', 'Dirección de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ocupacion_direccion}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_codigo_postal', 'Código postal de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ocupacion_codigo_postal}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_estado', 'Estado donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ocupacion_estado}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_pais', 'País donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ocupacion_pais}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_telefono', 'Teléfono de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ocupacion_telefono}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_descripcion', '¿Qué hace en su ocupación?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ocupacion_descripcion}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ingreso_mensual', 'Ingreso mensual en moneda mexicana', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ingreso_mensual}}
									</div>
								</div>

							</div>

							<br>
							<h3>Ocupación anterior</h3>
							<div class="form-group row">
								{{ Form::label('ocupacion_anterior', 'Antes de su actual actividad ¿A qué se dedicaba?', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									{{$solicitud->ocupacion_anterior}}
								</div>
							</div>

							<div class="ocupacion_anterior">
								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_nombre', 'Nombre de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ocupacion_anterior_nombre}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_direccion', 'Dirección de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ocupacion_anterior_direccion}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_codigo_postal', 'Código postal de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ocupacion_anterior_codigo_postal}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_estado', 'Estado donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ocupacion_anterior_estado}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_pais', 'País donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ocupacion_anterior_pais}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_telefono', 'Teléfono de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->ocupacion_anterior_telefono}}
									</div>
								</div>
							</div>
						</div>


						<div class="tab-pane fade" id="tab9primary"> 
							<p style="display: none">9</p>

								<div class="form-group row">
									{{ Form::label('compania', '¿Viajará alguien más con usted?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->compania}}
									</div>
								</div>

								<div class="compania">

									<div class="form-group row">
										{{ Form::label('compania_apellidos', 'Apellidos de la persona que viajará con usted', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{$solicitud->compania_apellidos}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('compania_nombre', 'Nombre de la persona que viajará con usted', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{$solicitud->compania_nombre}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('compania_parentesco', 'Parentesco o relación con la persona que viajará con usted', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{$solicitud->compania_parentesco}}
										</div>
									</div>
								</div>
						</div>

						<div class="tab-pane fade" id="tab10primary"> 
							<p style="display: none">10</p>

								<div class="form-group row">
									{{ Form::label('arrestado', '¿Has sido arrestado por algún crimen o delito?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										{{$solicitud->arrestado}}
									</div>
								</div>

								<div class="arrestado">
									<div class="form-group row">
										{{ Form::label('arrestado_motivo', '¿Cuál fue el motivo de su arresto?', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											{{$solicitud->arrestado_motivo}}
										</div>
									</div>
								</div>
						</div>
					<!--{{ Form::close() }}-->
					</div> <!-- Fin de tab-content -->
				</div> <!--Fin de panel-body -->
			</div>
		</div>
	</div> <!-- Fin de row -->
</div> <!-- Fin de container -->

@stop