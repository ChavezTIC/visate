<?php

class SolicitudController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('solicitud');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$solicitud = DB::table('datos_principal')
		->join('datos_contacto', 'datos_contacto.id', '=', 'datos_principal.id')
		->join('pasaporte', 'pasaporte.id', '=', 'datos_principal.id')
		->join('financiamiento', 'financiamiento.id', '=', 'datos_principal.id')
		->join('ultima_visita', 'ultima_visita.id', '=', 'datos_principal.id')
		->join('familia', 'familia.id', '=', 'datos_principal.id')
		->join('ocupacion', 'ocupacion.id', '=', 'datos_principal.id')
		->join('informacion', 'informacion.id', '=', 'datos_principal.id')
		->join('compania', 'compania.id', '=', 'datos_principal.id')
		->where('datos_principal.id', $id)
		->first();

		return View::make('solicitud')
		->with('solicitud',$solicitud);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$data = Input::all();
		if(Request::ajax())
		{
			$id = $data['id'];
			$solicitud = Principal::where('id', $id)->first();
			$solicitud->consulado 			= $data['consulado'];
			$solicitud->nombre 				= $data['nombre'];
			$solicitud->apellidos 			= $data['apellidos'];
			$solicitud->genero 				= $data['genero'];
			$solicitud->estado_civil 		= $data['estado_civil'];
			$solicitud->fecha_nacimiento 	= $data['fecha_nacimiento'];
			$solicitud->ciudad_nacimiento 	= $data['ciudad_nacimiento'];
			$solicitud->estado_nacimiento 	= $data['estado_nacimiento'];
			$solicitud->pais_nacimiento 	= $data['pais_nacimiento'];
			$solicitud->nacionalidad	 	= $data['nacionalidad'];
			if($solicitud->estado_civil!='Soltero(a)')
			{
				$solicitud->pareja_nombre	 	= $data['pareja_nombre'];
				$solicitud->pareja_apellidos	= $data['pareja_apellidos'];
				$solicitud->pareja_nacimiento	= $data['pareja_nacimiento'];
				$solicitud->pareja_nacionalidad	= $data['pareja_nacionalidad'];	
			}
			else
			{
				$solicitud->pareja_nombre	 	= null;
				$solicitud->pareja_apellidos	= null;
				$solicitud->pareja_nacimiento	= null;
				$solicitud->pareja_nacionalidad	= null;
			}

			$solicitud->update();
			
			$solicitud = DatosContacto::where('id', $id)->first();
			$solicitud->calle				= $data['calle'];
			$solicitud->numero_vivienda		= $data['numero_vivienda'];
			$solicitud->colonia				= $data['colonia'];
			$solicitud->codigo_postal		= $data['codigo_postal'];
			$solicitud->estado				= $data['estado'];
			$solicitud->ciudad				= $data['ciudad'];
			$solicitud->pais				= $data['pais'];
			$solicitud->telefono			= $data['telefono'];
			$solicitud->celular				= $data['celular'];
			$solicitud->oficina				= $data['oficina'];
			$solicitud->email				= $data['email'];
			$solicitud->update();

			$solicitud = Pasaporte::where('id', $id)->first();
			$solicitud->numero_pasaporte	= $data['numero_pasaporte'];
			$solicitud->pais_pasaporte		= $data['pais_pasaporte'];
			$solicitud->estado_pasaporte	= $data['estado_pasaporte'];
			$solicitud->ciudad_pasaporte	= $data['ciudad_pasaporte'];
			$solicitud->fecha_expedicion	= $data['fecha_expedicion'];
			$solicitud->fecha_vencimiento	= $data['fecha_vencimiento'];
			$solicitud->pasaporte_perdido	= $data['pasaporte_perdido'];
			$solicitud->update();

			$solicitud = Financiamiento::where('id', $id)->first();
			$solicitud->financiamiento_persona		= $data['financiamiento_persona'];
			if($solicitud->financiamiento_persona=='Alguien más')
			{
				$solicitud->financiamiento_nombre		= $data['financiamiento_nombre'];
				$solicitud->financiamiento_apellidos	= $data['financiamiento_apellidos'];
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
			$solicitud->update();

			$solicitud = UltimaVisita::where('id', $id)->first();
			$solicitud->visitado				= $data['visitado'];
			$solicitud->visitado_fecha			= $data['visitado_fecha'];
			$solicitud->visitado_tiempo			= $data['visitado_tiempo'];
			$solicitud->visitado_licencia		= $data['visitado_licencia'];
			$solicitud->entrada_rechazada		= $data['entrada_rechazada'];
			$solicitud->visa_anterior			= $data['visa_anterior'];
			$solicitud->visa_fecha				= $data['visa_fecha'];
			$solicitud->visa_numero				= $data['visa_numero'];
			$solicitud->visa_mismo_tipo			= $data['visa_mismo_tipo'];
			$solicitud->visa_mismo_pais			= $data['visa_mismo_pais'];
			$solicitud->visa_huellas			= $data['visa_huellas'];
			$solicitud->visa_perdida			= $data['visa_perdida'];
			$solicitud->visa_perdida_fecha		= $data['visa_perdida_fecha'];
			$solicitud->visa_perdida_razon		= $data['visa_perdida_razon'];
			$solicitud->update();

			$solicitud = Familia::where('id', $id)->first();
			$solicitud->padre_nombre				= $data['padre_nombre'];
			$solicitud->padre_apellidos				= $data['padre_apellidos'];
			$solicitud->padre_fecha_nacimiento		= $data['padre_fecha_nacimiento'];
			$solicitud->padre_encuentra_eu			= $data['padre_encuentra_eu'];
			$solicitud->padre_estatus				= $data['padre_estatus'];
			$solicitud->madre_nombre				= $data['madre_nombre'];
			$solicitud->madre_apellidos				= $data['madre_apellidos'];
			$solicitud->madre_fecha_nacimiento		= $data['madre_fecha_nacimiento'];
			$solicitud->madre_encuentra_eu			= $data['madre_encuentra_eu'];
			$solicitud->madre_estatus				= $data['madre_estatus'];
			$solicitud->parientes_no_directos		= $data['parientes_no_directos'];
			$solicitud->parientes_directos			= $data['parientes_directos'];
			$solicitud->pariente_nombre				= $data['pariente_nombre'];
			$solicitud->pariente_apellidos			= $data['pariente_apellidos'];
			$solicitud->pariente_relacion			= $data['pariente_relacion'];
			$solicitud->pariente_estatus			= $data['pariente_estatus'];
			$solicitud->update();

			$solicitud = Ocupacion::where('id', $id)->first();
			$solicitud->ocupacion								= $data['ocupacion'];
			$solicitud->ocupacion_nombre						= $data['ocupacion_nombre'];
			$solicitud->ocupacion_calle							= $data['ocupacion_calle'];
			$solicitud->ocupacion_numero_exterior				= $data['ocupacion_numero_exterior'];
			$solicitud->ocupacion_numero_interior				= $data['ocupacion_numero_interior'];
			$solicitud->ocupacion_colonia						= $data['ocupacion_colonia'];
			$solicitud->ocupacion_codigo_postal					= $data['ocupacion_codigo_postal'];
			$solicitud->ocupacion_estado						= $data['ocupacion_estado'];
			$solicitud->ocupacion_pais							= $data['ocupacion_pais'];
			$solicitud->ocupacion_telefono						= $data['ocupacion_telefono'];
			$solicitud->ocupacion_anterior						= $data['ocupacion_anterior'];
			$solicitud->ocupacion_anterior_nombre				= $data['ocupacion_anterior_nombre'];
			$solicitud->ocupacion_anterior_calle				= $data['ocupacion_anterior_calle'];
			$solicitud->ocupacion_anterior_numero_exterior		= $data['ocupacion_anterior_numero_exterior'];
			$solicitud->ocupacion_anterior_numero_interior		= $data['ocupacion_anterior_numero_interior'];
			$solicitud->ocupacion_anterior_colonia				= $data['ocupacion_anterior_colonia'];
			$solicitud->ocupacion_anterior_codigo_postal		= $data['ocupacion_anterior_codigo_postal'];
			$solicitud->ocupacion_anterior_estado				= $data['ocupacion_anterior_estado'];
			$solicitud->ocupacion_anterior_pais					= $data['ocupacion_anterior_pais'];
			$solicitud->ocupacion_anterior_telefono				= $data['ocupacion_anterior_telefono'];
			$solicitud->update();

			$solicitud = Informacion::where('id', $id)->first();
			$solicitud->ingreso_mensual			= $data['ingreso_mensual'];
			$solicitud->arrestado				= $data['arrestado'];
			$solicitud->motivos_viaje			= $data['motivos_viaje'];
			$solicitud->fecha_viaje				= $data['fecha_viaje'];
			$solicitud->estadia_eu				= $data['estadia_eu'];
			$solicitud->estadia_domicilio		= $data['estadia_domicilio'];
			$solicitud->estadia_telefono		= $data['estadia_telefono'];
			$solicitud->estadia_tiempo_visita	= $data['estadia_tiempo_visita'];
			$solicitud->update();

			$solicitud = Compania::where('id', $id)->first();
			$solicitud->compania				= $data['compania'];
			$solicitud->compania_nombre			= $data['compania_nombre'];
			$solicitud->compania_apellidos		= $data['compania_apellidos'];
			$solicitud->compania_parentesco		= $data['compania_parentesco'];
			$solicitud->update();
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
