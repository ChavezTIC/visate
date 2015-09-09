<script type="text/javascript">
$(document).ready(function () {


	var fecha = $('.fecha');

	$(fecha).datetimepicker({
		locale: 'es',
		format: 'YYYY-MM-DD'
	});

	$('.numero').keydown(function (event) {
		if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39 )
		{
			// Nada :D
		}
		else
		{
			if (event.keyCode < 48 || event.keyCode > 57 )
			{
				event.preventDefault();	
			}	
		}
	});

	var $estado_civil 		= $('#estado_civil'),
		$pasaporte_tiene 	= $('#pasaporte_tiene'),
		$pasaporte_perdido 	= $('#pasaporte_perdido'),
		$financiamiento 	= $('#financiamiento_persona'),
		$visitado 			= $('#visitado'),
		$entrada_rechazada 	= $('#entrada_rechazada'),
		$visa_anterior		= $('#visa_anterior'),
		$visa_perdida		= $('#visa_perdida'),
		$itinerario_viaje	= $('#itinerario_viaje'),
		$estadia_eu			= $('#estadia_eu'),
		$padre_encuentra	= $('#padre_encuentra_eu'),
		$madre_encuentra	= $('#madre_encuentra_eu'),
		$parientes			= $('#parientes_directos'),
		$ocupacion			= $('#ocupacion'),
		$ocupacion_anterior	= $('#ocupacion_anterior'),
		$arrestado			= $('#arrestado'),
		$compania			= $('#compania');
	var tabid;

	sendToServer = function() {
		var $tab = $('#myTabContent');
		var $active = $tab.find('.tab-pane.active');
		tabid = $active.find('p:hidden').text();

		var url 							= "http://awsd4bb9323.bitnamiapp.com/visate/public/solicitud/update";
		var $post 							= {};
		$post.id_solicitud 					= $('[name="id_solicitud"]').val();
		$post.consulado 					= $('[name="consulado"]').val();
		$post.fecha_consulado_1 			= $('[name="fecha_consulado_1"]').val();
		$post.fecha_consulado_2 			= $('[name="fecha_consulado_2"]').val();
		$post.apellidos 					= $('[name="apellidos"]').val();
		$post.nombre 						= $('[name="nombre"]').val();
		$post.genero 						= $('[name="genero"]').val();
		$post.estado_civil 					= $('[name="estado_civil"]').val();
		$post.fecha_nacimiento 				= $('[name="fecha_nacimiento"]').val();
		$post.ciudad_nacimiento 			= $('[name="ciudad_nacimiento"]').val();
		$post.estado_nacimiento 			= $('[name="estado_nacimiento"]').val();
		$post.pais_nacimiento 				= $('[name="pais_nacimiento"]').val();
		$post.nacionalidad 					= $('[name="nacionalidad"]').val();
		$post.pareja_apellidos 				= $('[name="pareja_apellidos"]').val();
		$post.pareja_nombre 				= $('[name="pareja_nombre"]').val();
		$post.pareja_nacimiento 			= $('[name="pareja_nacimiento"]').val();
		$post.pareja_nacionalidad 			= $('[name="pareja_nacionalidad"]').val();
		$post.casado_fecha 					= $('[name="casado_fecha"]').val();
		$post.divorciado_matrimonio_fecha 	= $('[name="divorciado_matrimonio_fecha"]').val();
		$post.divorciado_fecha 				= $('[name="divorciado_fecha"]').val();
		$post.divorciado_motivo 			= $('[name="divorciado_motivo"]').val();
		$post.viudo_fecha 					= $('[name="viudo_fecha"]').val();

		$post.direccion 			= $('[name="direccion"]').val();
		$post.codigo_postal			= $('[name="codigo_postal"]').val();
		$post.estado				= $('[name="estado"]').val();
		$post.ciudad				= $('[name="ciudad"]').val();
		$post.pais					= $('[name="pais"]').val();
		$post.celular				= $('[name="celular"]').val();
		$post.telefono				= $('[name="telefono"]').val();
		$post.oficina				= $('[name="oficina"]').val();
		$post.email					= $('[name="email"]').val();

		$post.pasaporte_tiene			= $('[name="pasaporte_tiene"]').val();
		$post.curp						= $('[name="curp"]').val();
		$post.numero_pasaporte			= $('[name="numero_pasaporte"]').val();
		$post.pais_pasaporte			= $('[name="pais_pasaporte"]').val();
		$post.estado_pasaporte			= $('[name="estado_pasaporte"]').val();
		$post.ciudad_pasaporte			= $('[name="ciudad_pasaporte"]').val();
		$post.fecha_expedicion			= $('[name="fecha_expedicion"]').val();
		$post.fecha_vencimiento			= $('[name="fecha_vencimiento"]').val();
		$post.pasaporte_perdido			= $('[name="pasaporte_perdido"]').val();
		$post.pasaporte_perdido_razon	= $('[name="pasaporte_perdido_razon"]').val();

		$post.financiamiento_persona 	= $('[name="financiamiento_persona"]').val();
		$post.financiamiento_apellidos 	= $('[name="financiamiento_apellidos"]').val();
		$post.financiamiento_nombre 	= $('[name="financiamiento_nombre"]').val();
		$post.financiamiento_telefono 	= $('[name="financiamiento_telefono"]').val();
		$post.financiamiento_email 		= $('[name="financiamiento_email"]').val();
		$post.financiamiento_parentesco = $('[name="financiamiento_parentesco"]').val();


		$post.visitado 					= $('[name="visitado"]').val();
		$post.visitado_fecha 			= $('[name="visitado_fecha"]').val();
		$post.visitado_tiempo 			= $('[name="visitado_tiempo"]').val();
		$post.visitado_licencia 		= $('[name="visitado_licencia"]').val();
		$post.entrada_rechazada 		= $('[name="entrada_rechazada"]').val();
		$post.entrada_rechazada_razon 	= $('[name="entrada_rechazada_razon"]').val();
		$post.visa_anterior 			= $('[name="visa_anterior"]').val();
		$post.visa_emision 				= $('[name="visa_emision"]').val();
		$post.visa_expiracion 			= $('[name="visa_expiracion"]').val();
		$post.visa_consulado 			= $('[name="visa_consulado"]').val();
		$post.visa_mismo_tipo 			= $('[name="visa_mismo_tipo"]').val();
		$post.visa_mismo_pais 			= $('[name="visa_mismo_pais"]').val();
		$post.visa_huellas 				= $('[name="visa_huellas"]').val();
		$post.visa_perdida 				= $('[name="visa_perdida"]').val();
		$post.visa_perdida_fecha 		= $('[name="visa_perdida_fecha"]').val();
		$post.visa_perdida_razon 		= $('[name="visa_perdida_razon"]').val();

		$post.itinerario_viaje			= $('[name="itinerario_viaje"]').val();
		$post.estadia_eu				= $('[name="estadia_eu"]').val();
		$post.estadia_hotel_estado		= $('[name="estadia_hotel_estado"]').val();
		$post.estadia_hotel_ciudad		= $('[name="estadia_hotel_ciudad"]').val();
		$post.estadia_domicilio			= $('[name="estadia_domicilio"]').val();
		$post.estadia_telefono			= $('[name="estadia_telefono"]').val();
		$post.fecha_viaje				= $('[name="fecha_viaje"]').val();
		$post.estadia_tiempo_dias		= $('[name="estadia_tiempo_dias"]').val();
		$post.estadia_tiempo_meses		= $('[name="estadia_tiempo_meses"]').val();
		$post.motivos_viaje				= $('[name="motivos_viaje"]').val();
		
		$post.padre_apellidos 			= $('[name="padre_apellidos"]').val();
		$post.padre_nombre 				= $('[name="padre_nombre"]').val();
		$post.padre_fecha_nacimiento 	= $('[name="padre_fecha_nacimiento"]').val();
		$post.padre_encuentra_eu		= $('[name="padre_encuentra_eu"]').val();
		$post.padre_estatus 			= $('[name="padre_estatus"]').val();
		$post.madre_apellidos 			= $('[name="madre_apellidos"]').val();
		$post.madre_nombre 				= $('[name="madre_nombre"]').val();
		$post.madre_fecha_nacimiento 	= $('[name="madre_fecha_nacimiento"]').val();
		$post.madre_encuentra_eu 		= $('[name="madre_encuentra_eu"]').val();
		$post.madre_estatus 			= $('[name="madre_estatus"]').val();
		$post.parientes_directos 		= $('[name="parientes_directos"]').val();
		$post.pariente_apellidos 		= $('[name="pariente_apellidos"]').val();
		$post.pariente_nombre 			= $('[name="pariente_nombre"]').val();
		$post.pariente_relacion 		= $('[name="pariente_relacion"]').val();
		$post.pariente_estatus 			= $('[name="pariente_estatus"]').val();
		$post.parientes_no_directos 	= $('[name="parientes_no_directos"]').val();

		$post.ocupacion 							= $('[name="ocupacion"]').val();
		$post.ocupacion_nombre 						= $('[name="ocupacion_nombre"]').val();
		$post.ocupacion_direccion 					= $('[name="ocupacion_direccion"]').val();
		$post.ocupacion_codigo_postal 				= $('[name="ocupacion_codigo_postal"]').val();
		$post.ocupacion_estado 						= $('[name="ocupacion_estado"]').val();
		$post.ocupacion_pais 						= $('[name="ocupacion_pais"]').val();
		$post.ocupacion_descripcion 				= $('[name="ocupacion_descripcion"]').val();
		$post.ingreso_mensual						= $('[name="ingreso_mensual"]').val();
		$post.ocupacion_telefono 					= $('[name="ocupacion_telefono"]').val();
		$post.ocupacion_anterior 					= $('[name="ocupacion_anterior"]').val();
		$post.ocupacion_anterior_nombre 			= $('[name="ocupacion_anterior_nombre"]').val();
		$post.ocupacion_anterior_direccion 			= $('[name="ocupacion_anterior_direccion"]').val();
		$post.ocupacion_anterior_codigo_postal 		= $('[name="ocupacion_anterior_codigo_postal"]').val();
		$post.ocupacion_anterior_estado 			= $('[name="ocupacion_anterior_estado"]').val();
		$post.ocupacion_anterior_pais 				= $('[name="ocupacion_anterior_pais"]').val();
		$post.ocupacion_anterior_telefono 			= $('[name="ocupacion_anterior_telefono"]').val();
		$post.ocupacion_anterior_nombre_escuela 	= $('[name="ocupacion_anterior_nombre_escuela"]').val();

		$post.compania					= $('[name="compania"]').val();
		$post.compania_apellidos		= $('[name="compania_apellidos"]').val();
		$post.compania_nombre			= $('[name="compania_nombre"]').val();
		$post.compania_parentesco		= $('[name="compania_parentesco"]').val();

		$post.arrestado					= $('[name="arrestado"]').val();
		$post.arrestado_motivo			= $('[name="arrestado_motivo"]').val();

		$.ajax({
			type: "POST",
			url: url,
			data: $post,
			//data: $("#formulario_solicitud").serialize(),
			dataType: 'json',
			cache: false,
			success: function(data){
				return data;
			}
		});
		return false;
	}

	siguiente = function(){
		window.scrollTo(0, 0);
		tabid=parseInt(tabid)+1;
		$('.nav-tabs a[href=#tab'+tabid+'primary]').tab('show');
	}

	$estado_civil.change(function () {

		$('.informacion_pareja').hide();

		if ($estado_civil.val() != 'Soltero(a)') {

			$('.informacion_pareja').show();
		}
	}).trigger('change');

	$estado_civil.change(function () {

		$('.casado').hide();
		$('.divorciado').hide();
		$('.viudo').hide();

		if ($estado_civil.val() == 'Casado(a)') {

			$('.casado').show();
		}
		else if ($estado_civil.val() == 'Divorciado(a)') {

			$('.divorciado').show();
		}
		else if ($estado_civil.val() == 'Viudo(a)') {

			$('.viudo').show();
		}
	}).trigger('change');

	$pasaporte_tiene.change(function () {

		$('.pasaporte_tiene').hide();
		$('.pasaporte_no_tiene').hide();

		if ($pasaporte_tiene.val() == 'Sí') {

			$('.pasaporte_tiene').show();
		}
		else {
			$('.pasaporte_no_tiene').show();
		}
	}).trigger('change');

	$pasaporte_perdido.change(function () {

		$('.pasaporte_perdido').hide();

		if ($pasaporte_perdido.val() == 'Sí') {

			$('.pasaporte_perdido').show();
		}
	}).trigger('change');

	$financiamiento.change(function () {

		$('.financiamiento_alguien_mas').hide();

		if ($financiamiento.val() == 'Alguien más') {

			$('.financiamiento_alguien_mas').show();
		}
	}).trigger('change');

	$visitado.change(function () {

		$('.visitado').hide();

		if ($visitado.val() == 'Sí') {

			$('.visitado').show();
		}
	}).trigger('change');

	$entrada_rechazada.change(function () {

		$('.entrada_rechazada').hide();

		if ($entrada_rechazada.val() == 'Sí') {

			$('.entrada_rechazada').show();
		}
	}).trigger('change');

	$visa_anterior.change(function () {

		$('.visa_anterior').hide();

		if ($visa_anterior.val() == 'Sí') {

			$('.visa_anterior').show();
		}
	}).trigger('change');

	$visa_perdida.change(function () {

		$('.visa_perdida').hide();

		if ($visa_perdida.val() == 'Sí') {

			$('.visa_perdida').show();
		}
	}).trigger('change');

	$itinerario_viaje.change(function () {

		$('.itinerario_viaje').hide();

		if ($itinerario_viaje.val() == 'Sí') {

			$('.itinerario_viaje').show();
		}
	}).trigger('change');

	$estadia_eu.change(function () {

		$('.estadia_eu').hide();

		if ($estadia_eu.val() == 'Hotel') {

			$('.estadia_eu').show();
		}
	}).trigger('change');

	$padre_encuentra.change(function () {

		$('.padre_estatus').hide();

		if ($padre_encuentra.val() == 'Sí') {

			$('.padre_estatus').show();
		}
	}).trigger('change');

	$madre_encuentra.change(function () {

		$('.madre_estatus').hide();

		if ($madre_encuentra.val() == 'Sí') {

			$('.madre_estatus').show();
		}
	}).trigger('change');

	$parientes.change(function () {

		$('.pariente').hide();

		if ($parientes.val() == 'Sí') {

			$('.pariente').show();
		}
	}).trigger('change');

	$ocupacion.change(function () {

		$('.ocupacion').hide();

		if (($ocupacion.val() != 'Ama de casa')&&($ocupacion.val() != 'Jubilado(a)')&&($ocupacion.val() != 'Pensionado(a)')) {

			$('.ocupacion').show();
		}
	}).trigger('change');

	$ocupacion_anterior.change(function () {

		$('.ocupacion_anterior').hide();
		$('.ocupacion_anterior_nombre_escuela').hide();

		if ($ocupacion_anterior.val() != 'Ama de casa') {

			$('.ocupacion_anterior').show();
		}
		if ($ocupacion_anterior.val() != 'Estudiante') {

			$('.ocupacion_anterior_nombre_escuela').show();
		}
	}).trigger('change');

	$arrestado.change(function () {

		$('.arrestado').hide();

		if ($arrestado.val() == 'Sí') {

			$('.arrestado').show();
		}
	}).trigger('change');

	$compania.change(function () {

		$('.compania').hide();

		if ($compania.val() == 'Sí') {

			$('.compania').show();
		}
	}).trigger('change');



});

</script>