@extends('layout')
@section('content')
<link rel="shortcut icon" href="assets/images/favicon.ico?v=2" />
<div class="container">
	<div class="page-header">
		<h1>Solicitud de Visa <span class="pull-right label label-default">ID = {{$solicitud->id}} </span></h1>
	</div>
	<div class="row">
		<div class="col-md-11">
			<div class="panel with-nav-tabs panel-primary">
				<div class="panel-heading">
					<ul class="nav nav-tabs id="sampleTabs"">
						<li class="active"><a href="#tab1primary" data-toggle="tab" onclick="sendToServer()">Principal</a></li>
						<li><a href="#tab2primary" data-toggle="tab" onclick="sendToServer()">Datos de contacto</a></li>
						<li><a href="#tab3primary" data-toggle="tab" onclick="sendToServer()">Pasaporte</a></li>
						<li><a href="#tab4primary" data-toggle="tab" onclick="sendToServer()">Financiamiento</a></li>
						<li><a href="#tab5primary" data-toggle="tab" onclick="sendToServer()">Última visita</a></li>
						<li><a href="#tab6primary" data-toggle="tab" onclick="sendToServer()">Familia</a></li>
						<li><a href="#tab7primary" data-toggle="tab" onclick="sendToServer()">Ocupación</a></li>
						<li><a href="#tab8primary" data-toggle="tab" onclick="sendToServer()">Información</a></li>
						<li><a href="#tab9primary" data-toggle="tab" onclick="sendToServer()">Acompañante</a></li>
					</ul>
				</div>
				<div class="panel-body">
					<div id="myTabContent" class="tab-content">


						<div class="tab-pane fade in active" id="tab1primary">
							<p style="display: none">1</p>

							<div class="form-group row">
								{{ Form::label('consulado', 'Consulado donde desea realizar su cita', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::select('consulado', array(
									'Monterrey, Nuevo León' => 'Monterrey, Nuevo León',
									'Cd. Juárez, Chihuahua' => 'Cd. Juárez, Chihuahua',
									'Guadalajara, Jalisco' => 'Guadalajara, Jalisco',
									'Cd. de México' => 'Cd. de México',
									),
									$solicitud->consulado, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('nombre', 'Nombre del solicitante', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('nombre', $solicitud->nombre, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('apellidos', 'Apellidos del solicitante', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('apellidos', $solicitud->apellidos, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('genero', 'Género', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::select('genero', array(
									'Masculino' => 'Masculino',
									'Femenino' => 'Femenino'
									),
									$solicitud->genero, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('estado_civil', 'Estado Civil', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
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
								{{ Form::label('fecha_nacimiento', 'Fecha de nacimiento', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6 fecha">
									{{ Form::text('fecha_nacimiento', $solicitud->fecha_nacimiento, array('class' => 'form-control fecha')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ciudad_nacimiento', 'Ciudad de nacimiento', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('ciudad_nacimiento', $solicitud->ciudad_nacimiento, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('estado_nacimiento', 'Estado de nacimiento', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('estado_nacimiento', $solicitud->estado_nacimiento, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('pais_nacimiento', 'País de nacimiento', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('pais_nacimiento', $solicitud->pais_nacimiento, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('nacionalidad', 'Nacionalidad', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('nacionalidad', $solicitud->nacionalidad, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="informacion_pareja">
								<br>
								<h2>Información de la pareja</h2>

								<div class="form-group row">
									{{ Form::label('pareja_nombre', 'Nombre(s)', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('pareja_nombre', $solicitud->pareja_nombre, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pareja_apellidos', 'Apellidos', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('pareja_apellidos', $solicitud->pareja_apellidos, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pareja_nacimiento', 'Fecha de nacimiento', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('pareja_nacimiento', $solicitud->pareja_nacimiento, array('class' => 'form-control fecha')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pareja_nacionalidad', 'Nacionalidad', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('pareja_nacionalidad', $solicitud->pareja_nacionalidad, array('class' => 'form-control')) }}
									</div>
								</div>
							</div>

							<button onclick="sendToServer(),alerta()" class="btn btn-primary">Guardar</button>
						</div>




						<div class="tab-pane fade" id="tab2primary">
							<p style="display: none">2</p>

							<div class="form-group row">
								{{ Form::label('calle', 'Calle', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('calle', $solicitud->calle, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('numero_vivienda', 'Número', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('numero_vivienda', $solicitud->numero_vivienda, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('colonia', 'Colonia/Fraccionamiento', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('colonia', $solicitud->colonia, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('codigo_postal', 'Código Postal', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('codigo_postal', $solicitud->codigo_postal, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('estado', 'Estado', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('estado', $solicitud->estado, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ciudad', 'Ciudad', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('ciudad', $solicitud->ciudad, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('pais', 'País', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('pais', $solicitud->pais, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('telefono', 'Teléfono de casa', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('telefono', $solicitud->telefono, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('celular', 'Teléfono celular', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('celular', $solicitud->celular, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('oficina', 'Teléfono oficina', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('oficina', $solicitud->oficina, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('email', 'Correo electrónico', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('email', $solicitud->email, array('class' => 'form-control')) }}
								</div>
							</div>
							<button onclick="sendToServer(),alerta()" class="btn btn-primary">Guardar</button>
                        </div>



                        <div class="tab-pane fade" id="tab3primary">
                        	<p style="display: none">3</p>

							<div class="form-group row">
								{{ Form::label('numero_pasaporte', 'Número de pasaporte', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('numero_pasaporte', $solicitud->numero_pasaporte, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('pais_pasaporte', 'País donde se expidió el pasaporte', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('pais_pasaporte', $solicitud->pais_pasaporte, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('estado_pasaporte', 'Estado donde se expidió el pasaporte', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('estado_pasaporte', $solicitud->estado_pasaporte, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ciudad_pasaporte', 'Ciudad donde se expidió el pasaporte', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('ciudad_pasaporte', $solicitud->ciudad_pasaporte, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('fecha_expedicion', 'Fecha de expedición', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('fecha_expedicion', $solicitud->fecha_expedicion, array('class' => 'form-control fecha')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('fecha_vencimiento', 'Fecha de vencimiento', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('fecha_vencimiento', $solicitud->fecha_vencimiento, array('class' => 'form-control fecha')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('pasaporte_perdido', '¿Alguna vez se te ha perdido el pasaporte?', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::textarea('pasaporte_perdido', $solicitud->pasaporte_perdido, array('class' => 'form-control')) }}
								</div>
							</div>

							<button onclick="sendToServer(),alerta()" class="btn btn-primary">Guardar</button>
						</div>



						<div class="tab-pane fade" id="tab4primary"> 
							<p style="display: none">4</p>

							<div class="form-group row">
								{{ Form::label('financiamiento_persona', 'Persona que financía el viaje', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
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
									{{ Form::label('financiamiento_nombre', 'Nombre(s)', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('financiamiento_nombre', $solicitud->financiamiento_nombre, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('financiamiento_apellidos', 'Apellidos', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('financiamiento_apellidos', $solicitud->financiamiento_apellidos, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('financiamiento_telefono', 'Teléfono', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('financiamiento_telefono', $solicitud->financiamiento_telefono, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('financiamiento_email', 'Correo electrónico', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('financiamiento_email', $solicitud->financiamiento_email, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('financiamiento_parentesco', 'Parentesco', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
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

							<button onclick="sendToServer(),alerta()" class="btn btn-primary">Guardar</button>
						</div>


						<div class="tab-pane fade" id="tab5primary"> 
							<p style="display: none">5</p>

							<div class="form-group row">
								{{ Form::label('visitado', '¿Ha estado en Estado Unidos?', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
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
									{{ Form::label('visitado_fecha', 'Fecha de la última visita', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('visitado_fecha', $solicitud->visitado_fecha, array('class' => 'form-control fecha'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visitado_tiempo', 'Tiempo pasado en la última visita a Estados Unidos', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('visitado_tiempo', $solicitud->visitado_tiempo, array('class' => 'form-control', 'placeholder'=>'Días/Meses/Años ')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visitado_licencia', '¿Ha tenido licencia de conducir expedida en Estado Unidos?', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
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
								{{ Form::label('entrada_rechazada', '¿Alguna vez le han rechazado la entrada a Estados Unidos estando en el puente?', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::textarea('entrada_rechazada', $solicitud->entrada_rechazada, array('class' => 'form-control', 'placeholder'=>'De ser así explique brevemente cómo ocurrió')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('visa_anterior', '¿Ha tenido visa anteriormente?', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
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
									{{ Form::label('visa_fecha', 'Fecha de expedición de la última visa', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('visa_fecha', $solicitud->visa_fecha, array('class' => 'form-control fecha'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_numero', 'Número de Visa', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('visa_numero', $solicitud->visa_numero, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_mismo_tipo', '¿Está aplicando para el mismo tipo de Visa?', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::select('visa_mismo_tipo', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->visa_mismo_tipo, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_mismo_pais', '¿Está aplicando en el mismo país que la visa anterior y este es su país de residencia?', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::select('visa_mismo_pais', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->visa_mismo_pais, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_huellas', '¿Le han tomado huella de los 10 dedos?', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::select('visa_huellas', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->visa_huellas, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('visa_perdida', '¿Alguna vez se le te ha perdido la Visa?', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::select('visa_perdida', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->visa_perdida, array('class' => 'form-control', 'id' => 'visa_perdida')) }}
									</div>
								</div>

								<div class="visa_perdida">
									<div class="form-group row">
										{{ Form::label('visa_perdida_fecha', '¿En qué año perdió su Visa?', array('class' => 'col-sm-10 control-label')) }}
										<div class="col-sm-6">
											{{ Form::text('visa_perdida_fecha', $solicitud->visa_perdida_fecha, array('class' => 'form-control')) }}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('visa_perdida_razon', '¿Cómo perdió su Visa?', array('class' => 'col-sm-10 control-label')) }}
										<div class="col-sm-6">
											{{ Form::textarea('visa_perdida_razon', $solicitud->visa_perdida_razon, array('class' => 'form-control')) }}
										</div>
									</div>
								</div>

							</div>
							<button onclick="sendToServer(),alerta()" class="btn btn-primary">Guardar</button>
						</div>


						<div class="tab-pane fade" id="tab6primary"> 
							<p style="display: none">6</p>

							<h3> Datos del Padre</h3>
							<br>
							<div class="form-group row">
								{{ Form::label('padre_nombre', 'Nombre(s) del Padre', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('padre_nombre', $solicitud->padre_nombre, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('padre_apellidos', 'Apellidos del Padre', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('padre_apellidos', $solicitud->padre_apellidos, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('padre_fecha_nacimiento', 'Fecha de nacimiento', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('padre_fecha_nacimiento', $solicitud->padre_fecha_nacimiento, array('class' => 'form-control fecha'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('padre_encuentra_eu', '¿Se encuentra actualmente en Estados Unidos?', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::select('padre_encuentra_eu', array(
									'No' => 'No',
									'Sí' => 'Sí'
									),
									$solicitud->padre_encuentra_eu, array('class' => 'form-control', 'id' => 'padre_encuentra_eu')) }}
								</div>
							</div>

							<div class="padre_estatus">
								<div class="form-group row">
									{{ Form::label('padre_estatus', '¿Cuál es su estatus?', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
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
								{{ Form::label('madre_nombre', 'Nombre(s) de la madre', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('madre_nombre', $solicitud->madre_nombre, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('madre_apellidos', 'Apellidos de la madre', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('madre_apellidos', $solicitud->madre_apellidos, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('madre_fecha_nacimiento', 'Fecha de nacimiento', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('madre_fecha_nacimiento', $solicitud->madre_fecha_nacimiento, array('class' => 'form-control fecha'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('madre_encuentra_eu', '¿Se encuentra actualmente en Estados Unidos?', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::select('madre_encuentra_eu', array(
									'No' => 'No',
									'Sí' => 'Sí'
									),
									$solicitud->madre_encuentra_eu, array('class' => 'form-control', 'id' => 'madre_encuentra_eu')) }}
								</div>
							</div>

							<div class="madre_estatus">
								<div class="form-group row">
									{{ Form::label('madre_estatus', '¿Cuál es su estatus?', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
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
								{{ Form::label('parientes_no_directos', '¿Tiene parientes no directos en Estados Unidos?', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::select('parientes_no_directos', array(
									'No' => 'No',
									'Sí' => 'Sí'
									),
									$solicitud->parientes_no_directos, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('parientes_directos', '¿Tiene otro parientes directo en Estados Unidos?', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::select('parientes_directos', array(
									'No' => 'No',
									'Sí' => 'Sí'
									),
									$solicitud->parientes_directos, array('class' => 'form-control', 'id' => 'parientes_directos')) }}
								</div>
							</div>

							<div class="pariente">
								<br>
								<h3>Pariente</h3>
								<br>
								<div class="form-group row">
									{{ Form::label('pariente_nombre', 'Nombre(s)', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('pariente_nombre', $solicitud->pariente_nombre, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pariente_apellidos', 'Apellidos', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('pariente_apellidos', $solicitud->pariente_apellidos, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('pariente_relacion', 'Relación con usted', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
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
									{{ Form::label('pariente_estatus', 'Estatus', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
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

							<button onclick="sendToServer(),alerta()" class="btn btn-primary">Guardar</button>
						</div>


						<div class="tab-pane fade" id="tab7primary"> 
							<p style="display: none">7</p>

							<div class="form-group row">
								{{ Form::label('ocupacion', '¿Cuál es su ocupación?', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::select('ocupacion', array(
									'Estudiante' => 'Estudiante',
									'Empleado' => 'Empleado',
									'Negocio propio' => 'Negocio propio'
									),
									$solicitud->ocupacion, array('class' => 'form-control')) }}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ocupacion_nombre', 'Nombre de la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('ocupacion_nombre', $solicitud->ocupacion_nombre, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ocupacion_calle', 'Calle donde se encuentra la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('ocupacion_calle', $solicitud->ocupacion_calle, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ocupacion_numero_exterior', 'Número exterior de la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('ocupacion_numero_exterior', $solicitud->ocupacion_numero_exterior, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ocupacion_numero_interior', 'Número interior de la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('ocupacion_numero_interior', $solicitud->ocupacion_numero_interior, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ocupacion_colonia', 'Colonia donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('ocupacion_colonia', $solicitud->ocupacion_colonia, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ocupacion_codigo_postal', 'Código postal de la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('ocupacion_codigo_postal', $solicitud->ocupacion_codigo_postal, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ocupacion_estado', 'Estado donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('ocupacion_estado', $solicitud->ocupacion_estado, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ocupacion_pais', 'País donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('ocupacion_pais', $solicitud->ocupacion_pais, array('class' => 'form-control'))}}
								</div>
							</div>

							<div class="form-group row">
								{{ Form::label('ocupacion_telefono', 'Teléfono de la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::text('ocupacion_telefono', $solicitud->ocupacion_telefono, array('class' => 'form-control'))}}
								</div>
							</div>

							<br>
							<h3>Ocupación anterior</h3>
							<div class="form-group row">
								{{ Form::label('ocupacion_anterior', 'Antes de su actual actividad productiva ¿A qué se dedicaba?', array('class' => 'col-sm-10 control-label')) }}
								<div class="col-sm-6">
									{{ Form::select('ocupacion_anterior', array(
									'Estudiante' => 'Estudiante',
									'Empleado' => 'Empleado',
									'Negocio propio' => 'Negocio propio'
									),
									$solicitud->ocupacion_anterior, array('class' => 'form-control', 'id' => 'ocupacion_anterior')) }}
								</div>
							</div>

							<div class="ocupacion_anterior">
								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_nombre', 'Nombre de la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('ocupacion_anterior_nombre', $solicitud->ocupacion_anterior_nombre, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_calle', 'Calle donde se encuentra la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('ocupacion_anterior_calle', $solicitud->ocupacion_anterior_calle, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_numero_exterior', 'Número exterior de la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('ocupacion_anterior_numero_exterior', $solicitud->ocupacion_anterior_numero_exterior, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_numero_interior', 'Número interior de la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('ocupacion_anterior_numero_interior', $solicitud->ocupacion_anterior_numero_interior, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_colonia', 'Colonia donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('ocupacion_anterior_colonia', $solicitud->ocupacion_anterior_colonia, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_codigo_postal', 'Código postal de la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('ocupacion_anterior_codigo_postal', $solicitud->ocupacion_anterior_codigo_postal, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_estado', 'Estado donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('ocupacion_anterior_estado', $solicitud->ocupacion_anterior_estado, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_pais', 'País donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('ocupacion_anterior_pais', $solicitud->ocupacion_anterior_pais, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('ocupacion_anterior_telefono', 'Teléfono de la institución (Escuela/Empresa)', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('ocupacion_anterior_telefono', $solicitud->ocupacion_anterior_telefono, array('class' => 'form-control'))}}
									</div>
								</div>
							</div>


							<button onclick="sendToServer(),alerta()" class="btn btn-primary">Guardar</button>
						</div>


						<div class="tab-pane fade" id="tab8primary"> 
							<p style="display: none">8</p>

								<div class="form-group row">
									{{ Form::label('ingreso_mensual', 'Ingreso mensual en moneda mexicana', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('ingreso_mensual', $solicitud->ingreso_mensual, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('arrestado', '¿Has sido arrestado por algún crimen o delito?', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::select('arrestado', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->arrestado, array('class' => 'form-control')) }}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('motivos_viaje', 'Motivos por los que desea realizar el viaje', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('motivos_viaje', $solicitud->motivos_viaje, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('fecha_viaje', 'Fecha en la que desea realizar su próxima visita a Estados Unidos', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('fecha_viaje', $solicitud->fecha_viaje, array('class' => 'form-control fecha'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('estadia_eu', 'Una vez que esté en EU, ¿En dónde será su estadía?', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('estadia_eu', $solicitud->estadia_eu, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('estadia_domicilio', 'Domicilio del lugar al cual llegará', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('estadia_domicilio', $solicitud->estadia_domicilio, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('estadia_telefono', 'Teléfono de contacto del lugar al cual llegará', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('estadia_telefono', $solicitud->estadia_telefono, array('class' => 'form-control'))}}
									</div>
								</div>

								<div class="form-group row">
									{{ Form::label('estadia_tiempo_visita', '´¿Cuánto tiempo planea estar de visita en Estados Unidos?', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::text('estadia_tiempo_visita', $solicitud->estadia_tiempo_visita, array('class' => 'form-control'))}}
									</div>
								</div>

							<button onclick="sendToServer(),alerta()" class="btn btn-primary">Guardar</button>
						</div>


						<div class="tab-pane fade" id="tab9primary"> 
							<p style="display: none">9</p>

								<div class="form-group row">
									{{ Form::label('compania', '¿Viajará alguien más con usted?', array('class' => 'col-sm-10 control-label')) }}
									<div class="col-sm-6">
										{{ Form::select('compania', array(
										'No' => 'No',
										'Sí' => 'Sí'
										),
										$solicitud->compania, array('class' => 'form-control', 'id'=>'compania')) }}
									</div>
								</div>

								<div class="compania">
									<div class="form-group row">
										{{ Form::label('compania_nombre', 'Nombre de la persona que viajará con usted', array('class' => 'col-sm-10 control-label')) }}
										<div class="col-sm-6">
											{{ Form::text('compania_nombre', $solicitud->compania_nombre, array('class' => 'form-control'))}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('compania_apellidos', 'Apellidos de la persona que viajará con usted', array('class' => 'col-sm-10 control-label')) }}
										<div class="col-sm-6">
											{{ Form::text('compania_apellidos', $solicitud->compania_apellidos, array('class' => 'form-control'))}}
										</div>
									</div>

									<div class="form-group row">
										{{ Form::label('compania_parentesco', 'Parentesco o relación con la persona que viajará con usted', array('class' => 'col-sm-10 control-label')) }}
										<div class="col-sm-6">
											{{ Form::select('compania_parentesco', array(
											'Padre/Madre' => 'Padre/Madre',
											'Hijo(a)' => 'Hijo(a)',
											'Amigo(a)' => 'Amigo(a)'
											),
											$solicitud->compania_parentesco, array('class' => 'form-control', 'id'=>'compania_parentesco')) }}
										</div>
									</div>
								</div>


							<button onclick="sendToServer(),alerta()" class="btn btn-primary">Guardar</button>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('solicitudjs')
@stop