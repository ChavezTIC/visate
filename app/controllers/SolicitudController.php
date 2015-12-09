<?php

class SolicitudController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$codigoFormulario = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 10)), 0, 10);

		$Principal = new Principal;
		$Principal->codigo_formulario = $codigoFormulario;
		$Principal->save();
		$DatosContacto = new DatosContacto;
		$DatosContacto->id = $Principal->id;
		$DatosContacto->datos_principal_fk = $Principal->id;
		$DatosContacto->save();
		$Pasaporte = new Pasaporte;
		$Pasaporte->id = $Principal->id;
		$Pasaporte->datos_principal_fk = $Principal->id;
		$Pasaporte->save();
		$Financiamiento = new Financiamiento;
		$Financiamiento->id = $Principal->id;
		$Financiamiento->datos_principal_fk = $Principal->id;
		$Financiamiento->save();
		$UltimaVisita = new UltimaVisita;
		$UltimaVisita->id = $Principal->id;
		$UltimaVisita->datos_principal_fk = $Principal->id;
		$UltimaVisita->save();
		$Visita = new Visita;
		$Visita->id = $Principal->id;
		$Visita->datos_principal_fk = $Principal->id;
		$Visita->save();
		$Familia = new Familia;
		$Familia->id = $Principal->id;
		$Familia->datos_principal_fk = $Principal->id;
		$Familia->save();
		$Ocupacion = new Ocupacion;
		$Ocupacion->id = $Principal->id;
		$Ocupacion->datos_principal_fk = $Principal->id;
		$Ocupacion->save();
		$Seguridad = new Seguridad;
		$Seguridad->id = $Principal->id;
		$Seguridad->datos_principal_fk = $Principal->id;
		$Seguridad->save();

		$codigo = $codigoFormulario;
		//return Redirect::to('solicitud/'.$codigo);

		$sol = DB::table('datos_principal')->where('codigo_formulario', '=', $codigo)->first();

		$solicitud = DB::table('datos_principal')
		->join('datos_contacto', 'datos_contacto.datos_principal_fk', '=', 'datos_principal.id')
		->join('pasaporte', 'pasaporte.datos_principal_fk', '=', 'datos_principal.id')
		->join('financiamiento', 'financiamiento.id', '=', 'datos_principal.id')
		->join('ultima_visita', 'ultima_visita.id', '=', 'datos_principal.id')
		->join('familia', 'familia.datos_principal_fk', '=', 'datos_principal.id')
		->join('ocupacion', 'ocupacion.datos_principal_fk', '=', 'datos_principal.id')
		->join('visita', 'visita.datos_principal_fk', '=', 'datos_principal.id')
		->join('seguridad', 'seguridad.datos_principal_fk', '=', 'datos_principal.id')
		->where('datos_principal.id', $sol->id)
		->first();

		if(($solicitud->nacionalidad!='')||($solicitud->nacionalidad!=null)) $Nacionalidad = $solicitud->nacionalidad;
		else $Nacionalidad = 'MEXICANA';
		return View::make('solicitud')
		->with('solicitud',$solicitud)->with('Nacionalidad', $Nacionalidad)->with('test', $sol->codigo_formulario);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function toForm() {
		return View::make('toForm');
	}

	public function editar() {

		$pasaporte = Input::get('pasaporte');

		$sol = DB::table('pasaporte')->where('numero_pasaporte', '=', $pasaporte)->first();

		if($sol)
		{
			$solicitud = DB::table('datos_principal')
			->join('datos_contacto', 'datos_contacto.datos_principal_fk', '=', 'datos_principal.id')
			->join('pasaporte', 'pasaporte.datos_principal_fk', '=', 'datos_principal.id')
			->join('financiamiento', 'financiamiento.id', '=', 'datos_principal.id')
			->join('ultima_visita', 'ultima_visita.id', '=', 'datos_principal.id')
			->join('familia', 'familia.datos_principal_fk', '=', 'datos_principal.id')
			->join('ocupacion', 'ocupacion.datos_principal_fk', '=', 'datos_principal.id')
			->join('visita', 'visita.datos_principal_fk', '=', 'datos_principal.id')
			->join('seguridad', 'seguridad.datos_principal_fk', '=', 'datos_principal.id')
			->where('datos_principal.id', $sol->datos_principal_fk)
			->first();

			if(($solicitud->nacionalidad!='')||($solicitud->nacionalidad!=null)) $Nacionalidad = $solicitud->nacionalidad;
			else $Nacionalidad = 'MEXICANA';

			return View::make('solicitud')
			->with('solicitud',$solicitud)->with('Nacionalidad', $Nacionalidad);			
		}

		else
		{
			Session::flash('message', 'Solicitud no encontrada');
			return Redirect::to('toForm');

		}

	}

	public function updatePrincipal() {
		$data = Input::all();
		$id = $data['id_solicitud'];
		$solicitud = Principal::where('id', $id)->first();
		$solicitud->consulado 			= $data['consulado'];
		$solicitud->fecha_consulado_1 	= $data['fecha_consulado_1'];
		$solicitud->fecha_consulado_2 	= $data['fecha_consulado_2'];
		$solicitud->apellidos 			= $data['apellidos'];
		$solicitud->nombre 				= $data['nombre'];
		$solicitud->genero 				= $data['genero'];
		$solicitud->estado_civil 		= $data['estado_civil'];
		$solicitud->fecha_nacimiento 	= $data['fecha_nacimiento'];
		$solicitud->ciudad_nacimiento 	= $data['ciudad_nacimiento'];
		$solicitud->estado_nacimiento 	= $data['estado_nacimiento'];
		$solicitud->pais_nacimiento 	= $data['pais_nacimiento'];
		$solicitud->nacionalidad	 	= $data['nacionalidad'];
		if($solicitud->estado_civil!='Soltero(a)')
		{
			$solicitud->pareja_apellidos	= $data['pareja_apellidos'];
			$solicitud->pareja_nombre	 	= $data['pareja_nombre'];
			$solicitud->pareja_nacimiento	= $data['pareja_nacimiento'];
			$solicitud->pareja_nacionalidad	= $data['pareja_nacionalidad'];

			if($solicitud->estado_civil=='Casado(a)')
			{
				$solicitud->casado_fecha	 	= $data['casado_fecha'];
				$solicitud->viudo_fecha	 				= null;
				$solicitud->divorciado_matrimonio_fecha	= null;
				$solicitud->divorciado_fecha	 		= null;
				$solicitud->divorciado_motivo	 		= null;
			}
			else if($solicitud->estado_civil=='Divorciado(a)')
			{
				$solicitud->divorciado_matrimonio_fecha	 	= $data['divorciado_matrimonio_fecha'];
				$solicitud->divorciado_fecha	 			= $data['divorciado_fecha'];
				$solicitud->divorciado_motivo	 			= $data['divorciado_motivo'];
				$solicitud->casado_fecha	 			= null;
				$solicitud->viudo_fecha	 				= null;
			}
			else if($solicitud->estado_civil=='Viudo(a)')
			{
				$solicitud->viudo_fecha	 	= $data['viudo_fecha'];
				$solicitud->casado_fecha	 			= null;
				$solicitud->divorciado_matrimonio_fecha	= null;
				$solicitud->divorciado_fecha	 		= null;
				$solicitud->divorciado_motivo	 		= null;
			}
		}
		else
		{
			$solicitud->pareja_nombre	 			= null;
			$solicitud->pareja_apellidos			= null;
			$solicitud->pareja_nacimiento			= null;
			$solicitud->pareja_nacionalidad			= null;
			$solicitud->casado_fecha	 			= null;
			$solicitud->viudo_fecha	 				= null;
			$solicitud->divorciado_matrimonio_fecha	= null;
			$solicitud->divorciado_fecha	 		= null;
			$solicitud->divorciado_motivo	 		= null;
		}


		$solicitud->update();
	}

	public function updateContacto() {
		$data = Input::all();
		$id = $data['id_solicitud'];
		$solicitud = DatosContacto::where('id', $id)->first();
		$solicitud->direccion			= $data['direccion'];
		$solicitud->codigo_postal		= $data['codigo_postal'];
		$solicitud->estado				= $data['estado'];
		$solicitud->ciudad				= $data['ciudad'];
		$solicitud->pais				= $data['pais'];
		$solicitud->celular				= $data['celular'];
		$solicitud->telefono			= $data['telefono'];
		$solicitud->oficina				= $data['oficina'];
		$solicitud->email				= $data['email'];
		$solicitud->update();
	}

	public function updatePasaporte() {
		$data = Input::all();
		$id = $data['id_solicitud'];
		$solicitud = Pasaporte::where('id', $id)->first();
		$solicitud->pasaporte_tiene			= $data['pasaporte_tiene'];
		if($solicitud->pasaporte_tiene=='No, quiero tramitarlo')
		{
			$solicitud->curp					= $data['curp'];
			$solicitud->numero_pasaporte		= null;
			$solicitud->pais_pasaporte			= null;
			$solicitud->estado_pasaporte		= null;
			$solicitud->ciudad_pasaporte		= null;
			$solicitud->fecha_expedicion		= null;
			$solicitud->fecha_vencimiento		= null;
			$solicitud->pasaporte_perdido		= null;
		}
		else
		{
			$solicitud->curp					= null;
			$solicitud->numero_pasaporte		= $data['numero_pasaporte'];
			$solicitud->pais_pasaporte			= $data['pais_pasaporte'];
			$solicitud->estado_pasaporte		= $data['estado_pasaporte'];
			$solicitud->ciudad_pasaporte		= $data['ciudad_pasaporte'];
			$solicitud->fecha_expedicion		= $data['fecha_expedicion'];
			$solicitud->fecha_vencimiento		= $data['fecha_vencimiento'];
			$solicitud->pasaporte_perdido		= $data['pasaporte_perdido'];
		}
		if($solicitud->pasaporte_perdido=='Sí')
		{
			$solicitud->pasaporte_perdido_razon	= $data['pasaporte_perdido_razon'];
		}
		else
		{
			$solicitud->pasaporte_perdido_razon	= null;
		}
		$solicitud->update();
	}

	public function updateFinanciamiento() {
		$data = Input::all();
		$id = $data['id_solicitud'];
		$solicitud = Financiamiento::where('id', $id)->first();
		$solicitud->financiamiento_persona		= $data['financiamiento_persona'];
		if($solicitud->financiamiento_persona=='Alguien más')
		{
			$solicitud->financiamiento_apellidos	= $data['financiamiento_apellidos'];
			$solicitud->financiamiento_nombre		= $data['financiamiento_nombre'];
			$solicitud->financiamiento_telefono		= $data['financiamiento_telefono'];
			$solicitud->financiamiento_email		= $data['financiamiento_email'];
			$solicitud->financiamiento_parentesco	= $data['financiamiento_parentesco'];
		}
		else
		{
			$solicitud->financiamiento_nombre		= null;
			$solicitud->financiamiento_apellidos	= null;
			$solicitud->financiamiento_telefono		= null;
			$solicitud->financiamiento_email		= null;
			$solicitud->financiamiento_parentesco	= null;
		}
		$solicitud->financiamiento_pago		= $data['financiamiento_pago'];
		$solicitud->update();
	}

	public function updateUltimaVisita() {
		$data = Input::all();
		$id = $data['id_solicitud'];
		$solicitud = UltimaVisita::where('id', $id)->first();
		$solicitud->visitado				= $data['visitado'];
		$solicitud->visitado_fecha			= $data['visitado_fecha'];
		$solicitud->visitado_tiempo_1		= $data['visitado_tiempo_1'];
		$solicitud->visitado_tiempo_2		= $data['visitado_tiempo_2'];
		$solicitud->visitado_licencia		= $data['visitado_licencia'];
		$solicitud->entrada_rechazada		= $data['entrada_rechazada'];
		if($solicitud->entrada_rechazada=='Sí')
		{
			$solicitud->entrada_rechazada_razon	= $data['entrada_rechazada_razon'];
		}
		else
		{
			$solicitud->entrada_rechazada_razon	= null;
		}
		$solicitud->visa_anterior			= $data['visa_anterior'];
		if($solicitud->visa_anterior=='Sí')
		{
			$solicitud->visa_emision			= $data['visa_emision'];
			$solicitud->visa_expiracion			= $data['visa_expiracion'];
			$solicitud->visa_consulado			= $data['visa_consulado'];
			$solicitud->visa_mismo_tipo			= $data['visa_mismo_tipo'];
			$solicitud->visa_mismo_pais			= $data['visa_mismo_pais'];
			$solicitud->visa_huellas			= $data['visa_huellas'];
			$solicitud->visa_perdida			= $data['visa_perdida'];
			$solicitud->visa_perdida_fecha		= $data['visa_perdida_fecha'];
			$solicitud->visa_perdida_razon		= $data['visa_perdida_razon'];
		}
		else
		{
			$solicitud->visa_emision			= null;
			$solicitud->visa_expiracion			= null;
			$solicitud->visa_consulado			= null;
			$solicitud->visa_mismo_tipo			= null;
			$solicitud->visa_mismo_pais			= null;
			$solicitud->visa_huellas			= null;
			$solicitud->visa_perdida			= null;
			$solicitud->visa_perdida_fecha		= null;
			$solicitud->visa_perdida_razon		= null;
		}

		$solicitud->update();
	}

	public function updateVisita() {
		$data = Input::all();
		$id = $data['id_solicitud'];
		$solicitud = Visita::where('id', $id)->first();
		$solicitud->itinerario_viaje		= $data['itinerario_viaje'];
		if($solicitud->itinerario_viaje=='Sí')
		{
			$solicitud->estadia_domicilio		= $data['estadia_domicilio'];
			$solicitud->estadia_telefono		= $data['estadia_telefono'];
			$solicitud->fecha_viaje				= $data['fecha_viaje'];
			$solicitud->estadia_tiempo_dias		= $data['estadia_tiempo_dias'];
			$solicitud->estadia_tiempo_meses	= $data['estadia_tiempo_meses'];
			$solicitud->motivos_viaje			= $data['motivos_viaje'];
		}
		else
		{
			$solicitud->motivos_viaje			= null;
			$solicitud->fecha_viaje				= null;
			$solicitud->estadia_domicilio		= null;
			$solicitud->estadia_telefono		= null;
			$solicitud->estadia_tiempo_dias		= null;
			$solicitud->estadia_tiempo_meses	= null;
		}
		$solicitud->estadia_eu	= $data['estadia_eu'];
		if($solicitud->estadia_eu=='Hotel')
		{
			$solicitud->estadia_hotel_estado	= $data['estadia_hotel_estado'];
			$solicitud->estadia_hotel_ciudad	= $data['estadia_hotel_ciudad'];
		}
		else
		{
			$solicitud->estadia_hotel_estado	= null;
			$solicitud->estadia_hotel_ciudad	= null;
		}
		$solicitud->compania				= $data['compania'];
		$solicitud->compania_apellidos		= $data['compania_apellidos'];
		$solicitud->compania_nombre			= $data['compania_nombre'];
		$solicitud->compania_parentesco		= $data['compania_parentesco'];
		$solicitud->update();
	}

	public function updateFamilia() {
		$data = Input::all();
		$id = $data['id_solicitud'];
		$solicitud = Familia::where('id', $id)->first();
		$solicitud->padre_apellidos				= $data['padre_apellidos'];
		$solicitud->padre_nombre				= $data['padre_nombre'];
		$solicitud->padre_fecha_nacimiento		= $data['padre_fecha_nacimiento'];
		$solicitud->padre_encuentra_eu			= $data['padre_encuentra_eu'];
		$solicitud->padre_estatus				= $data['padre_estatus'];
		$solicitud->madre_apellidos				= $data['madre_apellidos'];
		$solicitud->madre_nombre				= $data['madre_nombre'];
		$solicitud->madre_fecha_nacimiento		= $data['madre_fecha_nacimiento'];
		$solicitud->madre_encuentra_eu			= $data['madre_encuentra_eu'];
		$solicitud->madre_estatus				= $data['madre_estatus'];
		$solicitud->parientes_directos			= $data['parientes_directos'];
		$solicitud->pariente_apellidos			= $data['pariente_apellidos'];
		$solicitud->pariente_nombre				= $data['pariente_nombre'];
		$solicitud->pariente_relacion			= $data['pariente_relacion'];
		$solicitud->pariente_estatus			= $data['pariente_estatus'];
		$solicitud->parientes_no_directos		= $data['parientes_no_directos'];
		$solicitud->update();
	}

	public function updateOcupacion() {
		$data = Input::all();
		$id = $data['id_solicitud'];
		$solicitud = Ocupacion::where('id', $id)->first();
		$solicitud->ocupacion								= $data['ocupacion'];
		if(($solicitud->ocupacion=='Ama de casa')||($solicitud->ocupacion=='Jubilado(a)')||($solicitud->ocupacion=='Pensionado(a)')||($solicitud->ocupacion=='Infante (Menor de 3 años)'))
		{
			$solicitud->ocupacion_descripcion	= null;
			$solicitud->ocupacion_nombre		= null;
			$solicitud->ocupacion_direccion		= null;
			$solicitud->ocupacion_codigo_postal	= null;
			$solicitud->ocupacion_estado		= null;
			$solicitud->ocupacion_pais			= null;
			$solicitud->ocupacion_telefono		= null;
			$solicitud->ingreso_mensual			= null;
		}
		else
		{
			$solicitud->ocupacion_nombre		= $data['ocupacion_nombre'];
			$solicitud->ocupacion_direccion		= $data['ocupacion_direccion'];
			$solicitud->ocupacion_codigo_postal	= $data['ocupacion_codigo_postal'];
			$solicitud->ocupacion_estado		= $data['ocupacion_estado'];
			$solicitud->ocupacion_pais			= $data['ocupacion_pais'];
			$solicitud->ocupacion_telefono		= $data['ocupacion_telefono'];
			$solicitud->ocupacion_descripcion	= $data['ocupacion_descripcion'];
			$solicitud->ingreso_mensual			= $data['ingreso_mensual'];
		}

		$solicitud->ocupacion_anterior						= $data['ocupacion_anterior'];
		if($solicitud->ocupacion_anterior=='Ama de casa')
		{
			$solicitud->ocupacion_anterior_nombre				= null;
			$solicitud->ocupacion_anterior_direccion			= null;
			$solicitud->ocupacion_anterior_codigo_postal		= null;
			$solicitud->ocupacion_anterior_estado				= null;
			$solicitud->ocupacion_anterior_pais					= null;
			$solicitud->ocupacion_anterior_telefono				= null;
			$solicitud->ocupacion_anterior_periodo				= null;
		}
		else
		{
			$solicitud->ocupacion_anterior_nombre				= $data['ocupacion_anterior_nombre'];
			$solicitud->ocupacion_anterior_direccion			= $data['ocupacion_anterior_direccion'];
			$solicitud->ocupacion_anterior_codigo_postal		= $data['ocupacion_anterior_codigo_postal'];
			$solicitud->ocupacion_anterior_estado				= $data['ocupacion_anterior_estado'];
			$solicitud->ocupacion_anterior_pais					= $data['ocupacion_anterior_pais'];
			$solicitud->ocupacion_anterior_telefono				= $data['ocupacion_anterior_telefono'];
			$solicitud->ocupacion_anterior_periodo				= $data['ocupacion_anterior_periodo'];
		}

		if(($solicitud->ocupacion_anterior!='Estudiante'))
		{
			$solicitud->ocupacion_anterior_nombre_escuela	= $data['ocupacion_anterior_nombre_escuela'];
		}
		else
		{
			$solicitud->ocupacion_anterior_nombre_escuela	= null;
		}

		if($solicitud->ocupacion=='Infante (Menor de 3 años)')
		{
			$solicitud->ocupacion_anterior					= null;
			$solicitud->ocupacion_anterior_nombre			= null;
			$solicitud->ocupacion_anterior_direccion		= null;
			$solicitud->ocupacion_anterior_codigo_postal	= null;
			$solicitud->ocupacion_anterior_estado			= null;
			$solicitud->ocupacion_anterior_pais				= null;
			$solicitud->ocupacion_anterior_telefono			= null;
			$solicitud->ocupacion_anterior_nombre_escuela	= null;
		}

		$solicitud->update();
	}

	public function updateSeguridad() {
		$data = Input::all();
		$id = $data['id_solicitud'];
		$solicitud = Seguridad::where('id', $id)->first();
		$solicitud->arrestado				= $data['arrestado'];
		if($solicitud->arrestado=="Sí")
		{
			$solicitud->arrestado_motivo	= $data['arrestado_motivo'];
		}
		else
		{
			$solicitud->arrestado_motivo	= null;		
		}
		$solicitud->update();
	}

	public function postSolicitud(){

		$to			= 'alanfrdez@gmail.com';
		$subject	= 'VISATE: Solicitud recibida';
		$message	= 'Hello there';
		$headers	= 'From: contacto@visate.mx' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);

		return View::make('final');
	}
}