@extends('layout')
@section('content')
{{ HTML::style('assets/css/estiloAdmin.css') }}
<link rel="shortcut icon" href="assets/images/favicon.ico?v=2" />
<div class="container">
	<div class="page-header">
		<h1>Hola Admin</h1>
		<div>
			<a class="btn btn-default" role="button" href="{{ URL::to('admin') }}">Regregar al panel <span class="glyphicon glyphicon-new-window"></span></a>
			<span class="label label-default admin-id">ID = {{$solicitud->codigo_formulario}} </span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-11">
			<div class="panel with-nav-tabs panel-primary">
				<div class="panel-heading">
					<ul class="nav nav-tabs id="sampleTabs"">
						<li class="active"><a href="#tab1primary" data-toggle="tab">Principal</a></li>
						<li><a href="#tab2primary" data-toggle="tab">Datos de contacto</a></li>
						<li><a href="#tab3primary" data-toggle="tab">Pasaporte</a></li>
						<li><a href="#tab4primary" data-toggle="tab">Financiamiento</a></li>
						<li><a href="#tab5primary" data-toggle="tab">Última visita</a></li>
						<li><a href="#tab6primary" data-toggle="tab">Visita</a></li>
						<li><a href="#tab7primary" data-toggle="tab">Familia</a></li>
						<li><a href="#tab8primary" data-toggle="tab">Ocupación</a></li>
						<li><a href="#tab9primary" data-toggle="tab">Acompañante</a></li>
						<li><a href="#tab10primary" data-toggle="tab">Seguridad</a></li>
					</ul>
				</div>
				<div class="panel-body">
					<div id="myTabContent" class="tab-content">

						<div class="tab-pane fade in active" id="tab1primary">
							<p style="display: none">1</p>

							@if($solicitud->consulado!='')
							<div class="form-group row">
								{{ Form::label('consulado', 'Consulado donde desea realizar su cita', array('class' => 'col-md-7 control-label')) }}
								<div class="col-md-6">
									<div id="consulado" class="col-md-6 col-xs-9">{{$solicitud->consulado}}</div>
									<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->consulado}}"><span class="glyphicon glyphicon-copy"></span></button>
								</div>
							</div>
							@endif

							@if($solicitud->fecha_consulado_1!='')
								<div class="form-group row">
									{{ Form::label('fecha_consulado_1', 'Rango de fechas cuando desea ir al consulado', array('class' => 'col-md-10 control-label')) }}
									<div class="col-md-3 col-xs-6 fecha">
										{{$solicitud->fecha_consulado_1}}
									</div>
									<div class="col-md-3 col-xs-6 fecha">
										{{$solicitud->fecha_consulado_2}}
									</div>
								</div>
							@endif

							@if($solicitud->apellidos!='')
								<div class="form-group row">
									{{ Form::label('apellidos', 'Apellidos del solicitante', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="apellidos" class="col-md-6 col-xs-9">{{$solicitud->apellidos}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->apellidos}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->nombre!='')
								<div class="form-group row">
									{{ Form::label('nombre', 'Nombre del solicitante', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="nombre" class="col-md-6 col-xs-9">{{$solicitud->nombre}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->nombre}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->genero!='')
								<div class="form-group row">
									{{ Form::label('genero', 'Género', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="genero" class="col-md-6 col-xs-9">{{$solicitud->genero}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->genero}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->estado_civil!='')
								<div class="form-group row">
									{{ Form::label('estado_civil', 'Estado Civil', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="estado_civil" class="col-md-6 col-xs-9">{{$solicitud->estado_civil}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->estado_civil}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->fecha_nacimiento!='')
								<div class="form-group row">
									{{ Form::label('fecha_nacimiento', 'Fecha de nacimiento', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="fecha_nacimiento" class="col-md-6 col-xs-9">{{$solicitud->fecha_nacimiento}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->fecha_nacimiento}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->ciudad_nacimiento!='')
								<div class="form-group row">
									{{ Form::label('ciudad_nacimiento', 'Ciudad de nacimiento', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="ciudad_nacimiento" class="col-md-6 col-xs-9">{{$solicitud->ciudad_nacimiento}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ciudad_nacimiento}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->estado_nacimiento!='')
								<div class="form-group row">
									{{ Form::label('estado_nacimiento', 'Estado de nacimiento', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="estado_nacimiento" class="col-md-6 col-xs-9">{{$solicitud->estado_nacimiento}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->estado_nacimiento}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->pais_nacimiento!='')
								<div class="form-group row">
									{{ Form::label('pais_nacimiento', 'País de nacimiento', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="pais_nacimiento" class="col-md-6 col-xs-9">{{$solicitud->pais_nacimiento}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->pais_nacimiento}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->nacionalidad!='')
								<div class="form-group row">
									{{ Form::label('nacionalidad', 'Nacionalidad', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="nacionalidad" class="col-md-6 col-xs-9">{{$solicitud->nacionalidad}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->nacionalidad}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->estado_civil!='')
								@if($solicitud->estado_civil!='Soltero(a)')
									<br>
									<h2>Información de la pareja</h2>

									@if($solicitud->pareja_apellidos!='')
										<div class="form-group row">
											{{ Form::label('pareja_apellidos', 'Apellidos', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="pareja_apellidos" class="col-md-6 col-xs-9">{{$solicitud->pareja_apellidos}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->pareja_apellidos}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->pareja_nombre!='')
										<div class="form-group row">
											{{ Form::label('pareja_nombre', 'Nombre(s)', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="pareja_nombre" class="col-md-6 col-xs-9">{{$solicitud->pareja_nombre}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->pareja_nombre}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->pareja_nacimiento!='')
										<div class="form-group row">
											{{ Form::label('pareja_nacimiento', 'Fecha de nacimiento', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="pareja_nacimiento" class="col-md-6 col-xs-9">{{$solicitud->pareja_nacimiento}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->pareja_nacimiento}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->pareja_nacionalidad!='')
										<div class="form-group row">
											{{ Form::label('pareja_nacionalidad', 'Nacionalidad', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="pareja_nacionalidad" class="col-md-6 col-xs-9">{{$solicitud->pareja_nacionalidad}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->pareja_nacionalidad}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->estado_civil=='Casado(a)')
										<div class="form-group row">
											{{ Form::label('casado_fecha', 'Fecha de inicio de matrimonio', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="casado_fecha" class="col-md-6 col-xs-9">{{$solicitud->casado_fecha}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->casado_fecha}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@elseif($solicitud->estado_civil=='Divorciado(a)')
										<div class="form-group row">
											{{ Form::label('divorciado_matrimonio_fecha', 'Fecha de matrimonio', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="divorciado_matrimonio_fecha" class="col-md-6 col-xs-9">{{$solicitud->divorciado_matrimonio_fecha}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->divorciado_matrimonio_fecha}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>

										<div class="form-group row">
											{{ Form::label('divorciado_fecha', 'Fecha de divorcio', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="divorciado_fecha" class="col-md-6 col-xs-9">{{$solicitud->divorciado_fecha}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->divorciado_fecha}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>

										<div class="form-group row">
											{{ Form::label('divorciado_motivo', 'Motivo del divorcio', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="divorciado_motivo" class="col-md-6 col-xs-9">{{$solicitud->divorciado_motivo}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->divorciado_motivo}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@elseif($solicitud->estado_civil=='Viudo(a)')
										<div class="form-group row">
											{{ Form::label('viudo_fecha', 'Fecha en que enviudó', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="viudo_fecha" class="col-md-6 col-xs-9">{{$solicitud->viudo_fecha}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->viudo_fecha}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif
								@endif
							@endif
						</div>

						<div class="tab-pane fade" id="tab2primary">
							<p style="display: none">2</p>

							@if($solicitud->direccion!='')
								<div class="form-group row">
									{{ Form::label('direccion', 'Direción', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="direccion" class="col-md-6 col-xs-9">{{$solicitud->direccion}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->direccion}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->codigo_postal!='')
								<div class="form-group row">
									{{ Form::label('codigo_postal', 'Código Postal', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="codigo_postal" class="col-md-6 col-xs-9">{{$solicitud->codigo_postal}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->codigo_postal}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->estado!='')
								<div class="form-group row">
									{{ Form::label('estado', 'Estado', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="estado" class="col-md-6 col-xs-9">{{$solicitud->estado}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->estado}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->ciudad!='')
								<div class="form-group row">
									{{ Form::label('ciudad', 'Ciudad', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="ciudad" class="col-md-6 col-xs-9">{{$solicitud->ciudad}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ciudad}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->pais!='')
								<div class="form-group row">
									{{ Form::label('pais', 'País', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="pais" class="col-md-6 col-xs-9">{{$solicitud->pais}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->pais}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->celular!='')
								<div class="form-group row">
									{{ Form::label('celular', 'Teléfono celular', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="celular" class="col-md-6 col-xs-9">{{$solicitud->celular}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->celular}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->telefono!='')
								<div class="form-group row">
									{{ Form::label('telefono', 'Teléfono de casa', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="telefono" class="col-md-6 col-xs-9">{{$solicitud->telefono}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->telefono}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->oficina!='')
								<div class="form-group row">
									{{ Form::label('oficina', 'Teléfono oficina', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="oficina" class="col-md-6 col-xs-9">{{$solicitud->oficina}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->oficina}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->email!='')
								<div class="form-group row">
									{{ Form::label('email', 'Correo electrónico', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="email" class="col-md-6 col-xs-9">{{$solicitud->email}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->email}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif


						</div>
						<div class="tab-pane fade" id="tab3primary">
							<p style="display: none">3</p>
							@if($solicitud->pasaporte_tiene!='')
								<div class="form-group row">
									{{ Form::label('pasaporte_tiene', '¿Cuenta con pasaporte?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="pasaporte_tiene" class="col-md-6 col-xs-9">{{$solicitud->pasaporte_tiene}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->pasaporte_tiene}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
								@if($solicitud->pasaporte_tiene=='Sí')
									@if($solicitud->numero_pasaporte!='')
										<div class="form-group row">
											{{ Form::label('numero_pasaporte', 'Número de pasaporte', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="numero_pasaporte" class="col-md-6 col-xs-9">{{$solicitud->numero_pasaporte}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->numero_pasaporte}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->pais_pasaporte!='')
										<div class="form-group row">
											{{ Form::label('pais_pasaporte', 'País donde se expidió el pasaporte', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="pais_pasaporte" class="col-md-6 col-xs-9">{{$solicitud->pais_pasaporte}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->pais_pasaporte}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->estado_pasaporte!='')
										<div class="form-group row">
											{{ Form::label('estado_pasaporte', 'Estado donde se expidió el pasaporte', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="estado_pasaporte" class="col-md-6 col-xs-9">{{$solicitud->estado_pasaporte}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->estado_pasaporte}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->ciudad_pasaporte!='')
										<div class="form-group row">
											{{ Form::label('ciudad_pasaporte', 'Ciudad donde se expidió el pasaporte', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="ciudad_pasaporte" class="col-md-6 col-xs-9">{{$solicitud->ciudad_pasaporte}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ciudad_pasaporte}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->fecha_expedicion!='')
										<div class="form-group row">
											{{ Form::label('fecha_expedicion', 'Fecha de emisión', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="fecha_expedicion" class="col-md-6 col-xs-9">{{$solicitud->fecha_expedicion}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->fecha_expedicion}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->fecha_vencimiento!='')
										<div class="form-group row">
											{{ Form::label('fecha_vencimiento', 'Fecha de vencimiento', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="fecha_vencimiento" class="col-md-6 col-xs-9">{{$solicitud->fecha_vencimiento}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->fecha_vencimiento}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->pasaporte_perdido!='')
										<div class="form-group row">
											{{ Form::label('pasaporte_perdido', '¿Ha perdido alguna vez su pasaporte?', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="pasaporte_perdido" class="col-md-6 col-xs-9">{{$solicitud->pasaporte_perdido}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->pasaporte_perdido}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
										@if($solicitud->pasaporte_perdido=='Sí')
											@if($solicitud->pasaporte_perdido_razon!='')
												<div class="form-group row">
													{{ Form::label('pasaporte_perdido_razon', 'Describa brevemente cómo lo perdió', array('class' => 'col-md-7 control-label')) }}
													<div class="col-md-6">
														<div id="pasaporte_perdido_razon" class="col-md-6 col-xs-9">{{$solicitud->pasaporte_perdido_razon}}</div>
														<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->pasaporte_perdido_razon}}"><span class="glyphicon glyphicon-copy"></span></button>
													</div>
												</div>
											@endif
										@endif
									@endif
								@else
									@if($solicitud->curp!='')
										<div class="form-group row">
											{{ Form::label('curp', 'CURP', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="curp" class="col-md-6 col-xs-9">{{$solicitud->curp}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->curp}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif
								@endif
							@endif
						</div>

						<div class="tab-pane fade" id="tab4primary">
							<p style="display: none">4</p>
							@if($solicitud->financiamiento_persona!='')
								<div class="form-group row">
									{{ Form::label('financiamiento_persona', 'Persona que financía el viaje', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="financiamiento_persona" class="col-md-6 col-xs-9">{{$solicitud->financiamiento_persona}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->financiamiento_persona}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
								@if($solicitud->financiamiento_persona=='Yo mismo')

								@else
									<br>
									<h3>Datos de la persona que financía el viaje</h3>
									@if($solicitud->financiamiento_apellidos!='')
										<div class="form-group row">
											{{ Form::label('financiamiento_apellidos', 'Apellidos', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="financiamiento_apellidos" class="col-md-6 col-xs-9">{{$solicitud->financiamiento_apellidos}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->financiamiento_apellidos}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->financiamiento_nombre!='')
										<div class="form-group row">
											{{ Form::label('financiamiento_nombre', 'Nombre(s)', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="financiamiento_nombre" class="col-md-6 col-xs-9">{{$solicitud->financiamiento_nombre}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->financiamiento_nombre}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->financiamiento_telefono!='')
										<div class="form-group row">
											{{ Form::label('financiamiento_telefono', 'Teléfono', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="financiamiento_telefono" class="col-md-6 col-xs-9">{{$solicitud->financiamiento_telefono}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->financiamiento_telefono}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->financiamiento_email!='')
										<div class="form-group row">
											{{ Form::label('financiamiento_email', 'Correo electrónico', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="financiamiento_email" class="col-md-6 col-xs-9">{{$solicitud->financiamiento_email}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->financiamiento_email}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->financiamiento_parentesco!='')
										<div class="form-group row">
											{{ Form::label('financiamiento_parentesco', 'Parentesco', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="financiamiento_parentesco" class="col-md-6 col-xs-9">{{$solicitud->financiamiento_parentesco}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->financiamiento_parentesco}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif
								@endif
								
								@if($solicitud->financiamiento_pago!='')
									<div class="form-group row">
										{{ Form::label('financiamiento_pago', '¿Cómo se realizará el pago de su visa?', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											<div id="financiamiento_pago" class="col-md-6 col-xs-9">{{$solicitud->financiamiento_pago}}</div>
											<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->financiamiento_pago}}"><span class="glyphicon glyphicon-copy"></span></button>
										</div>
									</div>
								@endif
							@endif
						</div>

						<div class="tab-pane fade" id="tab5primary">
							<p style="display: none">5</p>


							@if($solicitud->visitado!='')
								<div class="form-group row">
									{{ Form::label('visitado', '¿Ha estado en Estado Unidos?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="visitado" class="col-md-6 col-xs-9">{{$solicitud->visitado}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->visitado}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
								@if($solicitud->visitado=='Sí')
									<br>
									<h3>Última visita</h3>

									@if($solicitud->visitado_fecha!='')
										<div class="form-group row">
											{{ Form::label('visitado_fecha', 'Fecha de la última visita', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="visitado_fecha" class="col-md-6 col-xs-9">{{$solicitud->visitado_fecha}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->visitado_fecha}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->visitado_tiempo_1!='')
										<div class="form-group row">
											{{ Form::label('visitado_tiempo', 'Duración de la última visita a Estados Unidos', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="visitado_tiempo_1" class="col-md-3 col-xs-6">{{$solicitud->visitado_tiempo_1}}</div>
												<div id="visitado_tiempo_2" class="col-md-3 col-xs-6">{{$solicitud->visitado_tiempo_2}}</div>
											</div>
										</div>
									@endif

									@if($solicitud->visitado_licencia!='')
										<div class="form-group row">
											{{ Form::label('visitado_licencia', '¿Ha tenido licencia de conducir expedida en Estado Unidos?', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="visitado_licencia" class="col-md-6 col-xs-9">{{$solicitud->visitado_licencia}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->visitado_licencia}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif
								@endif
							@endif

							@if($solicitud->entrada_rechazada!='')
								<div class="form-group row">
									{{ Form::label('entrada_rechazada', '¿Alguna vez le han rechazado la entrada a Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="entrada_rechazada" class="col-md-6 col-xs-9">{{$solicitud->entrada_rechazada}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->entrada_rechazada}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
								@if($solicitud->entrada_rechazada=='Sí')
									@if($solicitud->entrada_rechazada_razon!='')
										<div class="form-group row">
											{{ Form::label('entrada_rechazada_razon', '¿Cuál fue la razón por la que le negaron la entrada?', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="entrada_rechazada_razon" class="col-md-6 col-xs-9">{{$solicitud->entrada_rechazada_razon}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->entrada_rechazada_razon}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif
								@endif
							@endif

							@if($solicitud->visa_anterior!='')
								<div class="form-group row">
									{{ Form::label('visa_anterior', '¿Ha tenido visa anteriormente?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="visa_anterior" class="col-md-6 col-xs-9">{{$solicitud->visa_anterior}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->visa_anterior}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
								@if($solicitud->visa_anterior=='Sí')
									@if($solicitud->visa_emision!='')
										<div class="form-group row">
											{{ Form::label('visa_emision', 'Fecha de emisión de la última visa', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="visa_emision" class="col-md-6 col-xs-9">{{$solicitud->visa_emision}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->visa_emision}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->visa_expiracion!='')
										<div class="form-group row">
											{{ Form::label('visa_expiracion', 'Fecha de expiración de la última visa', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="visa_expiracion" class="col-md-6 col-xs-9">{{$solicitud->visa_expiracion}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->visa_expiracion}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->visa_consulado!='')
										<div class="form-group row">
											{{ Form::label('visa_consulado', 'Consulado donde tramitó su visa anterior', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="visa_consulado" class="col-md-6 col-xs-9">{{$solicitud->visa_consulado}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->visa_consulado}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->visa_mismo_tipo!='')
										<div class="form-group row">
											{{ Form::label('visa_mismo_tipo', '¿Está aplicando para el mismo tipo de Visa?', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="visa_mismo_tipo" class="col-md-6 col-xs-9">{{$solicitud->visa_mismo_tipo}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->visa_mismo_tipo}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->visa_mismo_pais!='')
										<div class="form-group row">
											{{ Form::label('visa_mismo_pais', '¿Está aplicando en el mismo país que la visa anterior y este es su país de residencia?', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="visa_mismo_pais" class="col-md-6 col-xs-9">{{$solicitud->visa_mismo_pais}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->visa_mismo_pais}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->visa_huellas!='')
										<div class="form-group row">
											{{ Form::label('visa_huellas', '¿Le han tomado huella de los 10 dedos?', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="visa_huellas" class="col-md-6 col-xs-9">{{$solicitud->visa_huellas}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->visa_huellas}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->visa_perdida!='')
										<div class="form-group row">
											{{ Form::label('visa_perdida', '¿Alguna vez ha extraviado su Visa?', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="visa_perdida" class="col-md-6 col-xs-9">{{$solicitud->visa_perdida}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->visa_perdida}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif
								@endif
							@endif

						</div>

						<div class="tab-pane fade" id="tab6primary">
							<p style="display: none">6</p>

							@if($solicitud->itinerario_viaje!='')
								<div class="form-group row">
									{{ Form::label('itinerario_viaje', '¿Cuenta con un itinerario para su viaje?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="itinerario_viaje" class="col-md-6 col-xs-9">{{$solicitud->itinerario_viaje}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->itinerario_viaje}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>

								@if($solicitud->estadia_eu!='')
									<div class="form-group row">
										{{ Form::label('estadia_eu', 'Una vez que esté en EU, ¿En dónde será su estadía?', array('class' => 'col-md-7 control-label')) }}
										<div class="col-md-6">
											<div id="estadia_eu" class="col-md-6 col-xs-9">{{$solicitud->estadia_eu}}</div>
											<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->estadia_eu}}"><span class="glyphicon glyphicon-copy"></span></button>
										</div>
									</div>
									@if($solicitud->estadia_eu=='Hotel')
										@if($solicitud->estadia_hotel_estado!='')
											<div class="form-group row">
												{{ Form::label('estadia_hotel_estado', 'Estado donde se encuentra el hotel donde se hospedará', array('class' => 'col-md-7 control-label')) }}
												<div class="col-md-6">
													<div id="estadia_hotel_estado" class="col-md-6 col-xs-9">{{$solicitud->estadia_hotel_estado}}</div>
													<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->estadia_hotel_estado}}"><span class="glyphicon glyphicon-copy"></span></button>
												</div>
											</div>
										@endif

										@if($solicitud->estadia_hotel_ciudad!='')
											<div class="form-group row">
												{{ Form::label('estadia_hotel_ciudad', 'Ciudad donde se encuentra el hotel donde se hospedará', array('class' => 'col-md-7 control-label')) }}
												<div class="col-md-6">
													<div id="estadia_hotel_ciudad" class="col-md-6 col-xs-9">{{$solicitud->estadia_hotel_ciudad}}</div>
													<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->estadia_hotel_ciudad}}"><span class="glyphicon glyphicon-copy"></span></button>
												</div>
											</div>
										@endif
									@endif
									@if($solicitud->estadia_eu=='Domicilio particular')
										@if($solicitud->estadia_domicilio!='')
											<div class="form-group row">
												{{ Form::label('estadia_domicilio', 'Domicilio del lugar al cual llegará', array('class' => 'col-md-7 control-label')) }}
												<div class="col-md-6">
													<div id="estadia_domicilio" class="col-md-6 col-xs-9">{{$solicitud->estadia_domicilio}}</div>
													<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->estadia_domicilio}}"><span class="glyphicon glyphicon-copy"></span></button>
												</div>
											</div>
										@endif

										@if($solicitud->estadia_telefono!='')
											<div class="form-group row">
												{{ Form::label('estadia_telefono', 'Teléfono de contacto del lugar al cual llegará', array('class' => 'col-md-7 control-label')) }}
												<div class="col-md-6">
													<div id="estadia_telefono" class="col-md-6 col-xs-9">{{$solicitud->estadia_telefono}}</div>
													<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->estadia_telefono}}"><span class="glyphicon glyphicon-copy"></span></button>
												</div>
											</div>
										@endif
									@endif
								@endif

								@if($solicitud->itinerario_viaje=='Sí')

									@if($solicitud->fecha_viaje!='')
										<div class="form-group row">
											{{ Form::label('fecha_viaje', 'Fecha en la que desea realizar su próxima visita a Estados Unidos', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="fecha_viaje" class="col-md-6 col-xs-9">{{$solicitud->fecha_viaje}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->fecha_viaje}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->estadia_tiempo_dias!='')
										<div class="form-group row">
											{{ Form::label('estadia_tiempo_visita', '¿Cuánto tiempo planea estar de visita en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6 estadia_tiempo_visita">
												<div id="estadia_tiempo_dias" class="col-md-3 col-xs-3">{{$solicitud->estadia_tiempo_dias}}</div>
												<div id="estadia_tiempo_meses" class="col-md-3 col-xs-3">{{$solicitud->estadia_tiempo_meses}}</div>
											</div>
										</div>
									@endif

									@if($solicitud->motivos_viaje!='')
										<div class="form-group row">
											{{ Form::label('motivos_viaje', 'Motivos por los que desea realizar el viaje', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="motivos_viaje" class="col-md-6 col-xs-9">{{$solicitud->motivos_viaje}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->motivos_viaje}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif
								@endif
							@endif

						</div>


						
						<div class="tab-pane fade" id="tab7primary">
							<p style="display: none">7</p>

							<h3> Datos del Padre</h3>
							<br>
							@if($solicitud->padre_apellidos!='')
								<div class="form-group row">
									{{ Form::label('padre_apellidos', 'Apellidos del Padre', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="padre_apellidos" class="col-md-6 col-xs-9">{{$solicitud->padre_apellidos}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->padre_apellidos}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->padre_nombre!='')
								<div class="form-group row">
									{{ Form::label('padre_nombre', 'Nombre(s) del Padre', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="padre_nombre" class="col-md-6 col-xs-9">{{$solicitud->padre_nombre}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->padre_nombre}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->padre_fecha_nacimiento!='')
								<div class="form-group row">
									{{ Form::label('padre_fecha_nacimiento', 'Fecha de nacimiento (opcional)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="padre_fecha_nacimiento" class="col-md-6 col-xs-9">{{$solicitud->padre_fecha_nacimiento}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->padre_fecha_nacimiento}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->padre_encuentra_eu!='')
								<div class="form-group row">
									{{ Form::label('padre_encuentra_eu', '¿Se encuentra actualmente en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="padre_encuentra_eu" class="col-md-6 col-xs-9">{{$solicitud->padre_encuentra_eu}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->padre_encuentra_eu}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
								@if($solicitud->padre_encuentra_eu=='Sí')
									@if($solicitud->padre_estatus!='')
										<div class="form-group row">
											{{ Form::label('padre_estatus', '¿Cuál es su estatus?', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="padre_estatus" class="col-md-6 col-xs-9">{{$solicitud->padre_estatus}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->padre_estatus}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif
								@endif
							@endif

							<br>
							<h3> Datos de la Madre</h3>
							<br>

							@if($solicitud->madre_apellidos!='')
								<div class="form-group row">
									{{ Form::label('madre_apellidos', 'Apellidos de la madre', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="madre_apellidos" class="col-md-6 col-xs-9">{{$solicitud->madre_apellidos}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->madre_apellidos}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->madre_nombre!='')
								<div class="form-group row">
									{{ Form::label('madre_nombre', 'Nombre(s) de la madre', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="madre_nombre" class="col-md-6 col-xs-9">{{$solicitud->madre_nombre}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->madre_nombre}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->madre_fecha_nacimiento!='')
								<div class="form-group row">
									{{ Form::label('madre_fecha_nacimiento', 'Fecha de nacimiento (opcional)', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="madre_fecha_nacimiento" class="col-md-6 col-xs-9">{{$solicitud->madre_fecha_nacimiento}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->madre_fecha_nacimiento}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif

							@if($solicitud->madre_encuentra_eu!='')
								<div class="form-group row">
									{{ Form::label('madre_encuentra_eu', '¿Se encuentra actualmente en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="madre_encuentra_eu" class="col-md-6 col-xs-9">{{$solicitud->madre_encuentra_eu}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->madre_encuentra_eu}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
								@if($solicitud->madre_encuentra_eu=='Sí')
									@if($solicitud->madre_estatus!='')
										<div class="form-group row">
											{{ Form::label('madre_estatus', '¿Cuál es su estatus?', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="madre_estatus" class="col-md-6 col-xs-9">{{$solicitud->madre_estatus}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->madre_estatus}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif
								@endif
							@endif

							@if($solicitud->parientes_directos!='')
								<div class="form-group row">
									{{ Form::label('parientes_directos', '¿Tiene algún pariente directo en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="parientes_directos" class="col-md-6 col-xs-9">{{$solicitud->parientes_directos}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->parientes_directos}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
								@if($solicitud->parientes_directos=='Sí')

									<h3>Pariente</h3>
									<br>

									@if($solicitud->pariente_apellidos!='')
										<div class="form-group row">
											{{ Form::label('pariente_apellidos', 'Apellidos', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="pariente_apellidos" class="col-md-6 col-xs-9">{{$solicitud->pariente_apellidos}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->pariente_apellidos}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->pariente_nombre!='')
										<div class="form-group row">
											{{ Form::label('pariente_nombre', 'Nombre(s)', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="pariente_nombre" class="col-md-6 col-xs-9">{{$solicitud->pariente_nombre}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->pariente_nombre}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->pariente_relacion!='')
										<div class="form-group row">
											{{ Form::label('pariente_relacion', 'Relación con usted', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="pariente_relacion" class="col-md-6 col-xs-9">{{$solicitud->pariente_relacion}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->pariente_relacion}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->pariente_estatus!='')
										<div class="form-group row">
											{{ Form::label('pariente_estatus', 'Estatus', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="pariente_estatus" class="col-md-6 col-xs-9">{{$solicitud->pariente_estatus}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->pariente_estatus}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif
								@endif
							@endif

							@if($solicitud->parientes_no_directos!='')
								<div class="form-group row">
									{{ Form::label('parientes_no_directos', '¿Tiene parientes no directos en Estados Unidos?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="parientes_no_directos" class="col-md-6 col-xs-9">{{$solicitud->parientes_no_directos}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->parientes_no_directos}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
							@endif
						</div>



						<div class="tab-pane fade" id="tab8primary">
							<p style="display: none">8</p>

							@if($solicitud->ocupacion!='')
								<div class="form-group row">
									{{ Form::label('ocupacion', '¿Cuál es su ocupación?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="ocupacion" class="col-md-6 col-xs-9">{{$solicitud->ocupacion}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
								@if($solicitud->ocupacion=='Infante (Menor de 3 años)')

								@elseif(($solicitud->ocupacion!='Ama de casa')&&($solicitud->ocupacion!='Jubilado(a)')&&($solicitud->ocupacion!='Pensionado(a)'))
									@if($solicitud->ocupacion_nombre!='')
										<div class="form-group row">
											{{ Form::label('ocupacion_nombre', 'Nombre de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="ocupacion_nombre" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_nombre}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_nombre}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->ocupacion_direccion!='')
										<div class="form-group row">
											{{ Form::label('ocupacion_direccion', 'Dirección de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="ocupacion_direccion" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_direccion}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_direccion}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->ocupacion_codigo_postal!='')
										<div class="form-group row">
											{{ Form::label('ocupacion_codigo_postal', 'Código postal de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="ocupacion_codigo_postal" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_codigo_postal}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_codigo_postal}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->ocupacion_estado!='')
										<div class="form-group row">
											{{ Form::label('ocupacion_estado', 'Estado donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="ocupacion_estado" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_estado}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_estado}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->ocupacion_pais!='')
										<div class="form-group row">
											{{ Form::label('ocupacion_pais', 'País donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="ocupacion_pais" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_pais}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_pais}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->ocupacion_pais!='')
										<div class="form-group row">
											{{ Form::label('ocupacion_telefono', 'Teléfono de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="ocupacion_pais" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_telefono}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_pais}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->ocupacion_pais!='')
										<div class="form-group row">
											{{ Form::label('ocupacion_descripcion', '¿Qué hace en su ocupación?', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="ocupacion_pais" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_descripcion}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_pais}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->ingreso_mensual!='')
										<div class="form-group row">
											{{ Form::label('ingreso_mensual', 'Ingreso mensual en moneda mexicana', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="ingreso_mensual" class="col-md-6 col-xs-9">{{$solicitud->ingreso_mensual}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ingreso_mensual}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif

									@if($solicitud->ocupacion_anterior!='')
										<h3>Ocupación anterior</h3>
										<div class="form-group row">
											{{ Form::label('ocupacion_anterior', 'Antes de su actual actividad ¿A qué se dedicaba?', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="ocupacion_anterior" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_anterior}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_anterior}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
										@if($solicitud->ocupacion_anterior!='Ama de casa')
											@if($solicitud->ocupacion_anterior_nombre!='')
												<div class="form-group row">
													{{ Form::label('ocupacion_anterior_nombre', 'Nombre de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
													<div class="col-md-6">
														<div id="ocupacion_anterior_nombre" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_anterior_nombre}}</div>
														<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_anterior_nombre}}"><span class="glyphicon glyphicon-copy"></span></button>
													</div>
												</div>
											@endif

											@if($solicitud->ocupacion_anterior_direccion!='')
												<div class="form-group row">
													{{ Form::label('ocupacion_anterior_direccion', 'Dirección de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
													<div class="col-md-6">
														<div id="ocupacion_anterior_direccion" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_anterior_direccion}}</div>
														<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_anterior_direccion}}"><span class="glyphicon glyphicon-copy"></span></button>
													</div>
												</div>
											@endif

											@if($solicitud->ocupacion_anterior_codigo_postal!='')
												<div class="form-group row">
													{{ Form::label('ocupacion_anterior_codigo_postal', 'Código postal de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
													<div class="col-md-6">
														<div id="ocupacion_anterior_codigo_postal" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_anterior_codigo_postal}}</div>
														<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_anterior_codigo_postal}}"><span class="glyphicon glyphicon-copy"></span></button>
													</div>
												</div>
											@endif

											@if($solicitud->ocupacion_anterior_estado!='')
												<div class="form-group row">
													{{ Form::label('ocupacion_anterior_estado', 'Estado donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
													<div class="col-md-6">
														<div id="ocupacion_anterior_estado" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_anterior_estado}}</div>
														<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_anterior_estado}}"><span class="glyphicon glyphicon-copy"></span></button>
													</div>
												</div>
											@endif

											@if($solicitud->ocupacion_anterior_pais!='')
												<div class="form-group row">
													{{ Form::label('ocupacion_anterior_pais', 'País donde se ubica la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
													<div class="col-md-6">
														<div id="ocupacion_anterior_pais" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_anterior_pais}}</div>
														<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_anterior_pais}}"><span class="glyphicon glyphicon-copy"></span></button>
													</div>
												</div>
											@endif

											@if($solicitud->ocupacion_anterior_telefono!='')
												<div class="form-group row">
													{{ Form::label('ocupacion_anterior_telefono', 'Teléfono de la institución (Escuela/Empresa)', array('class' => 'col-md-7 control-label')) }}
													<div class="col-md-6">
														<div id="ocupacion_anterior_telefono" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_anterior_telefono}}</div>
														<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_anterior_telefono}}"><span class="glyphicon glyphicon-copy"></span></button>
													</div>
												</div>
											@endif

											@if($solicitud->ocupacion_anterior_periodo!='')
												<div class="form-group row">
													{{ Form::label('ocupacion_anterior_periodo', '¿Durante qué periodo (años) estuvo en esa ocupación?', array('class' => 'col-md-7 control-label')) }}
													<div class="col-md-6">
														<div id="ocupacion_anterior_periodo" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_anterior_periodo}}</div>
														<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_anterior_periodo}}"><span class="glyphicon glyphicon-copy"></span></button>
													</div>
												</div>
											@endif
										@endif

										@if($solicitud->ocupacion_anterior!='Estudiante')
											@if($solicitud->ocupacion_anterior_nombre_escuela!='')
												<div class="form-group row">
													{{ Form::label('ocupacion_anterior_nombre_escuela', 'Nombre completo de la institución educativa donde estudiaba antes de su ocupación anterior a la actual', array('class' => 'col-md-7 control-label')) }}
													<div class="col-md-6">
														<div id="ocupacion_anterior_nombre_escuela" class="col-md-6 col-xs-9">{{$solicitud->ocupacion_anterior_nombre_escuela}}</div>
														<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->ocupacion_anterior_nombre_escuela}}"><span class="glyphicon glyphicon-copy"></span></button>
													</div>
												</div>
											@endif
										@endif

									@endif

								@endif
							@endif

						</div>
						<div class="tab-pane fade" id="tab9primary">
							<p style="display: none">9</p>
						</div>
						<div class="tab-pane fade" id="tab10primary">
							<p style="display: none">10</p>

							@if($solicitud->arrestado!='')
								<div class="form-group row">
									{{ Form::label('arrestado', '¿Has sido arrestado por algún crimen o delito?', array('class' => 'col-md-7 control-label')) }}
									<div class="col-md-6">
										<div id="arrestado" class="col-md-6 col-xs-9">{{$solicitud->arrestado}}</div>
										<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->arrestado}}"><span class="glyphicon glyphicon-copy"></span></button>
									</div>
								</div>
								@if($solicitud->arrestado=='Sí')
									@if($solicitud->arrestado_motivo!='')
										<div class="form-group row">
											{{ Form::label('arrestado_motivo', '¿Cuál fue el motivo de su arresto?', array('class' => 'col-md-7 control-label')) }}
											<div class="col-md-6">
												<div id="arrestado_motivo" class="col-md-6 col-xs-9">{{$solicitud->arrestado_motivo}}</div>
												<button class="btn btn-default btnCopiar" type="button" data-clipboard-text="{{$solicitud->arrestado_motivo}}"><span class="glyphicon glyphicon-copy"></span></button>
											</div>
										</div>
									@endif
								@endif
							@endif


						</div>
					</div> <!-- Fin de tab-content -->
				</div> <!--Fin de panel-body -->
			</div>
		</div>
	</div> <!-- Fin de row -->
</div> <!-- Fin de container -->
@include('adminSolicitudjs')
@stop