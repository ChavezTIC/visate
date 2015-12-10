<script type="text/javascript">
$(document).ready(function () {

	var tabid,
	fecha = $('.fecha'),
	numero = $('.numero'),
	email = $('.email');

	setTimeout(function() {
		$('#modalInicio').modal('show');
	}, 500);

	$( "#guardarFinal" ).click(function() {
		if(validateForm("#formulario_9")) {
			$('#modalFinal').modal('show');
		}

	});

	$(fecha).datetimepicker({
		locale: 'es',
		format: 'YYYY-MM-DD'
	});

	$(numero).keydown(function (e) {
		-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault();
	});

	function validateEmail(email) {
	  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  return regex.test(email);
	}

	$(email).focusout(function() {
		if(validateEmail($('.email').val())) {
			$('[name="email_final"]').val($('.email').val());
		}
		else {
			swal('Formato incorrecto de correo');
			$('.email').val('');
		}
	});

	$(".moverTab").click(function() {
		sendToServer();
	});

	$(".boton-siguiente").click(function() {
		sendToServer();
		siguiente();
	});

	sendToServer = function() {
		var $tab = $('#myTabContent');
		var $active = $tab.find('.tab-pane.active');
		tabid = $active.find('p:hidden').text();

		if(validateForm("#formulario_"+tabid)) {

			$('.tab'+(parseInt(tabid)+1)).attr('data-toggle', 'tab');
			$('.tab'+(parseInt(tabid)+1)).parent().removeClass("disabled")
			var url = "http://visate.mx/solicitud/update"+tabid;

			$.ajax({
				type: "POST",
				url: url,
				data: $("#formulario_"+tabid).serialize(),
				dataType: 'json',
				cache: false,
				success: function(data){
					return data;
				}
			});
		}
		else {
			swal({
				title: "D:",
				text: "Esta sección aún no está completa",
				type: "error",
				confirmButtonText: "Oh well..."
			});
		}
	}

	siguiente = function(){
		
		if(validateForm("#formulario_"+tabid)) {
			window.scrollTo(0, 0);
			tabid=parseInt(tabid)+1;
			$('.nav-tabs a[href=#tab'+tabid+'primary]').tab('show');
		}
		else {
			swal({
				title: "D:",
				text: "Esta sección aún no está completa",
				type: "error",
				confirmButtonText: "Oh well..."
			});
		}
	}

	function validateForm (form){
		var isValid = true;
		$(form+' .form-control').each(function() {
			if($(this).is(":visible"))
			{
				if ($(this).val() === '')
					isValid = false;
			}
		});
		return isValid;	
	}

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

		if ($ocupacion.val() == 'Infante (Menor de 3 años)')
		{
			$('.no_infante').hide();
			$('.ocupacion_anterior_nombre_escuela').hide();
		}
		else if (($ocupacion.val() != 'Ama de casa')&&($ocupacion.val() != 'Jubilado(a)')&&($ocupacion.val() != 'Pensionado(a)')&&($ocupacion.val() != 'Infante (Menor de 3 años)')) {

			$('.ocupacion').show();
			$('.no_infante').show();
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