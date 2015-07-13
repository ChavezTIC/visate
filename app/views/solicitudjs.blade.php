<script type="text/javascript">
$(document).ready(function () {


	var fecha = $('.fecha');
	$(fecha).datetimepicker({
		locale: 'es',
		format: 'YYYY-MM-DD'
	});

	var $estado_civil 		= $('#estado_civil'),
		$financiamiento 	= $('#financiamiento_persona'),
		$visitado 			= $('#visitado'),
		$visa_anterior		= $('#visa_anterior'),
		$visa_perdida		= $('#visa_perdida'),
		$padre_encuentra	= $('#padre_encuentra_eu');
		$madre_encuentra	= $('#madre_encuentra_eu');
		$parientes			= $('#parientes_directos');
		$compania			= $('#compania');
	var tabid;

	sendToServer = function(){
		var $tab = $('#myTabContent'), $active = $tab.find('.tab-pane.active');
		tabid = $active.find('p:hidden').text();

		//var url 					= "http://localhost/visate/public/solicitud/update";
		var url 					= "http://awsd4bb9323.bitnamiapp.com/visate/public/solicitud/update";
		var $post 					= {};
		$post.id 					= '{{$solicitud->id}}';
		$post.consulado 			= $('[name="consulado"]').val();
		$post.nombre 				= $('[name="nombre"]').val();
		$post.apellidos 			= $('[name="apellidos"]').val();
		$post.genero 				= $('[name="genero"]').val();
		$post.estado_civil 			= $('[name="estado_civil"]').val();
		$post.fecha_nacimiento 		= $('[name="fecha_nacimiento"]').val();
		$post.ciudad_nacimiento 	= $('[name="ciudad_nacimiento"]').val();
		$post.estado_nacimiento 	= $('[name="estado_nacimiento"]').val();
		$post.pais_nacimiento 		= $('[name="pais_nacimiento"]').val();
		$post.nacionalidad 			= $('[name="nacionalidad"]').val();
		$post.pareja_nombre 		= $('[name="pareja_nombre"]').val();
		$post.pareja_apellidos 		= $('[name="pareja_apellidos"]').val();
		$post.pareja_nacimiento 	= $('[name="pareja_nacimiento"]').val();
		$post.pareja_nacionalidad 	= $('[name="pareja_nacionalidad"]').val();

		$post.calle 				= $('[name="calle"]').val();
		$post.numero_vivienda		= $('[name="numero_vivienda"]').val();
		$post.colonia				= $('[name="colonia"]').val();
		$post.codigo_postal			= $('[name="codigo_postal"]').val();
		$post.estado				= $('[name="estado"]').val();
		$post.ciudad				= $('[name="ciudad"]').val();
		$post.pais					= $('[name="pais"]').val();
		$post.telefono				= $('[name="telefono"]').val();
		$post.celular				= $('[name="celular"]').val();
		$post.oficina				= $('[name="oficina"]').val();
		$post.email					= $('[name="email"]').val();

		$post.numero_pasaporte		= $('[name="numero_pasaporte"]').val();
		$post.pais_pasaporte		= $('[name="pais_pasaporte"]').val();
		$post.estado_pasaporte		= $('[name="estado_pasaporte"]').val();
		$post.ciudad_pasaporte		= $('[name="ciudad_pasaporte"]').val();
		$post.fecha_expedicion		= $('[name="fecha_expedicion"]').val();
		$post.fecha_vencimiento		= $('[name="fecha_vencimiento"]').val();
		$post.pasaporte_perdido		= $('[name="pasaporte_perdido"]').val();

		$post.financiamiento_persona 	= $('[name="financiamiento_persona"]').val();
		$post.financiamiento_nombre 	= $('[name="financiamiento_nombre"]').val();
		$post.financiamiento_apellidos 	= $('[name="financiamiento_apellidos"]').val();
		$post.financiamiento_telefono 	= $('[name="financiamiento_telefono"]').val();
		$post.financiamiento_email 		= $('[name="financiamiento_email"]').val();
		$post.financiamiento_parentesco = $('[name="financiamiento_parentesco"]').val();


		$post.visitado 				= $('[name="visitado"]').val();
		$post.visitado_fecha 		= $('[name="visitado_fecha"]').val();
		$post.visitado_tiempo 		= $('[name="visitado_tiempo"]').val();
		$post.visitado_licencia 	= $('[name="visitado_licencia"]').val();
		$post.entrada_rechazada 	= $('[name="entrada_rechazada"]').val();
		$post.visa_anterior 		= $('[name="visa_anterior"]').val();
		$post.visa_fecha 			= $('[name="visa_fecha"]').val();
		$post.visa_numero 			= $('[name="visa_numero"]').val();
		$post.visa_mismo_tipo 		= $('[name="visa_mismo_tipo"]').val();
		$post.visa_mismo_pais 		= $('[name="visa_mismo_pais"]').val();
		$post.visa_huellas 			= $('[name="visa_huellas"]').val();
		$post.visa_perdida 			= $('[name="visa_perdida"]').val();
		$post.visa_perdida_fecha 	= $('[name="visa_perdida_fecha"]').val();
		$post.visa_perdida_razon 	= $('[name="visa_perdida_razon"]').val();

		$post.padre_nombre 				= $('[name="padre_nombre"]').val();
		$post.padre_apellidos 			= $('[name="padre_apellidos"]').val();
		$post.padre_fecha_nacimiento 	= $('[name="padre_fecha_nacimiento"]').val();
		$post.padre_encuentra_eu		= $('[name="padre_encuentra_eu"]').val();
		$post.padre_estatus 			= $('[name="padre_estatus"]').val();
		$post.madre_nombre 				= $('[name="madre_nombre"]').val();
		$post.madre_apellidos 			= $('[name="madre_apellidos"]').val();
		$post.madre_fecha_nacimiento 	= $('[name="madre_fecha_nacimiento"]').val();
		$post.madre_encuentra_eu 		= $('[name="madre_encuentra_eu"]').val();
		$post.madre_estatus 			= $('[name="madre_estatus"]').val();
		$post.parientes_no_directos 	= $('[name="parientes_no_directos"]').val();
		$post.parientes_directos 		= $('[name="parientes_directos"]').val();
		$post.pariente_nombre 			= $('[name="pariente_nombre"]').val();
		$post.pariente_apellidos 		= $('[name="pariente_apellidos"]').val();
		$post.pariente_relacion 		= $('[name="pariente_relacion"]').val();
		$post.pariente_estatus 			= $('[name="pariente_estatus"]').val();

		$post.ocupacion 							= $('[name="ocupacion"]').val();
		$post.ocupacion_nombre 						= $('[name="ocupacion_nombre"]').val();
		$post.ocupacion_calle 						= $('[name="ocupacion_calle"]').val();
		$post.ocupacion_numero_exterior 			= $('[name="ocupacion_numero_exterior"]').val();
		$post.ocupacion_numero_interior 			= $('[name="ocupacion_numero_interior"]').val();
		$post.ocupacion_colonia 					= $('[name="ocupacion_colonia"]').val();
		$post.ocupacion_codigo_postal 				= $('[name="ocupacion_codigo_postal"]').val();
		$post.ocupacion_estado 						= $('[name="ocupacion_estado"]').val();
		$post.ocupacion_pais 						= $('[name="ocupacion_pais"]').val();
		$post.ocupacion_telefono 					= $('[name="ocupacion_telefono"]').val();
		$post.ocupacion_anterior 					= $('[name="ocupacion_anterior"]').val();
		$post.ocupacion_anterior_nombre 			= $('[name="ocupacion_anterior_nombre"]').val();
		$post.ocupacion_anterior_calle 				= $('[name="ocupacion_anterior_calle"]').val();
		$post.ocupacion_anterior_numero_exterior	= $('[name="ocupacion_anterior_numero_exterior"]').val();
		$post.ocupacion_anterior_numero_interior 	= $('[name="ocupacion_anterior_numero_interior"]').val();
		$post.ocupacion_anterior_colonia 			= $('[name="ocupacion_anterior_colonia"]').val();
		$post.ocupacion_anterior_codigo_postal 		= $('[name="ocupacion_anterior_codigo_postal"]').val();
		$post.ocupacion_anterior_estado 			= $('[name="ocupacion_anterior_estado"]').val();
		$post.ocupacion_anterior_pais 				= $('[name="ocupacion_anterior_pais"]').val();
		$post.ocupacion_anterior_telefono 			= $('[name="ocupacion_anterior_telefono"]').val();

		$post.ingreso_mensual			= $('[name="ingreso_mensual"]').val();
		$post.arrestado					= $('[name="arrestado"]').val();
		$post.motivos_viaje				= $('[name="motivos_viaje"]').val();
		$post.fecha_viaje				= $('[name="fecha_viaje"]').val();
		$post.estadia_eu				= $('[name="estadia_eu"]').val();
		$post.estadia_domicilio			= $('[name="estadia_domicilio"]').val();
		$post.estadia_telefono			= $('[name="estadia_telefono"]').val();
		$post.estadia_tiempo_visita		= $('[name="estadia_tiempo_visita"]').val();

		$post.compania					= $('[name="compania"]').val();
		$post.compania_nombre			= $('[name="compania_nombre"]').val();
		$post.compania_apellidos		= $('[name="compania_apellidos"]').val();
		$post.compania_parentesco		= $('[name="compania_parentesco"]').val();

		$.ajax({
			type: "POST",
			url: url,
			data: $post,
			cache: false,
			success: function(data){
				return data;
			}
		});
		return false;
	}

	alerta = function(){
		alert('Datos Guardados '+tabid);
	}

	$estado_civil.change(function () {

		$('[class="informacion_pareja"]').hide();

		if ($estado_civil.val() != 'Soltero(a)') {

			$('[class="informacion_pareja"]').show();
		}
	}).trigger('change');


	$financiamiento.change(function () {

		$('[class="financiamiento_alguien_mas"]').hide();

		if ($financiamiento.val() == 'Alguien más') {

			$('[class="financiamiento_alguien_mas"]').show();
		}
	}).trigger('change');

	$visitado.change(function () {

		$('[class="visitado"]').hide();

		if ($visitado.val() == 'Sí') {

			$('[class="visitado"]').show();
		}
	}).trigger('change');

	$visa_anterior.change(function () {

		$('[class="visa_anterior"]').hide();

		if ($visa_anterior.val() == 'Sí') {

			$('[class="visa_anterior"]').show();
		}
	}).trigger('change');

	$visa_perdida.change(function () {

		$('[class="visa_perdida"]').hide();

		if ($visa_perdida.val() == 'Sí') {

			$('[class="visa_perdida"]').show();
		}
	}).trigger('change');

	$padre_encuentra.change(function () {

		$('[class="padre_estatus"]').hide();

		if ($padre_encuentra.val() == 'Sí') {

			$('[class="padre_estatus"]').show();
		}
	}).trigger('change');

	$madre_encuentra.change(function () {

		$('[class="madre_estatus"]').hide();

		if ($madre_encuentra.val() == 'Sí') {

			$('[class="madre_estatus"]').show();
		}
	}).trigger('change');

	$parientes.change(function () {

		$('[class="pariente"]').hide();

		if ($parientes.val() == 'Sí') {

			$('[class="pariente"]').show();
		}
	}).trigger('change');

	$compania.change(function () {

		$('[class="compania"]').hide();

		if ($compania.val() == 'Sí') {

			$('[class="compania"]').show();
		}
	}).trigger('change');


});

</script>