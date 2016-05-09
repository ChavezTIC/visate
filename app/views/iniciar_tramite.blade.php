<!DOCTYPE HTML>
<html>
<head>
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.png">
	<title>Bienvenido</title>
	<meta name="description" content="Tramita tu Visa Totalmente en Linea">
	<meta name="keywords" content="Visa, Pasaporte, Tramite Visa">

	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="address=no">
	<link rel="stylesheet" href="iniciar_tramite/css/style.css">
	<!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/respond.js"></script>
	<![endif]-->
</head>
<body class="no-js">
	<div class="main">
		<header>
			<div class="wrap">
				<div class="header-wrapper texto_bienvenida">
					<h1>Bienvenido a Visate</h1>
					<p>Todos los Ciudadanos Mexicanos con un pasaporte Mexicano, residiendo en México pueden solicitar su visa de TURISTA (TIPO B1/B2) por primera vez o como renovación.
						<br>
						<br>
						Para realizar el trámite de tu VISA  es necesario acudir personalmente a un consulado de Estados Unidos en México; para ello hay que realizar un trámite previo en el que nosotros te guiaremos para que puedas obtener tu visa de manera fácil y segura.
						Recibirás la mejor asesoría para que acudas a tu cita sin ninguna duda y con la certeza de que no te falta ningún documento y estás preparado para tu entrevista.
						<br>
						<br>
						En VISATE no solicitamos que nos envíes ningún documento, por ello ponemos a tu disposición nuestra forma en lìnea, diseñada para hacer tu trámite eficiente y seguro.
						<br>
						<br>
						Es importante que llenes los datos de manera correcta de acuerdo a como vienen en tu pasaporte y que no haya ningún error ya que esta información es la que pasará directamente a las formas oficiales del consulado.
						<br>
						<br>
						Al finalizar el formulario te enviaremos un correo con toda la información adicional que requieres para tu trámite, de igual manera si tienes alguna duda te puedes ponerte en contacto con nosotros.
					</p>
						<p class="autor">Toda la información que ingreses será utilizada únicamente para el trámite de tu visa. 
						<br>
						Por tu seguridad y tranquilidad después de terminar tu trámite la información será borrada de nuestro sistema para que no reciba ningún otro uso.
						</p>
					<div class="buttons-wrapper">
						<a href="{{ URL::to('solicitud') }}" class="button">Iniciar mi Tramite</a>
						<a href="{{ URL::to('FAQ') }}" class="button button-stripe">Dudas</a>
					</div>
				</div>
				<!-- /.header-wrapper -->
			</div>
			<!-- /.wrap -->
		</header>
		<style>
			.texto_bienvenida p {
				font-size: 20px;
				text-align: justify;
			}
			.texto_bienvenida .autor{
				font-size: 15px;
			}
		</style>
	<script src="iniciar_tramite/js/jquery.js"></script>
	<script src="iniciar_tramite/js/library.js"></script>
	<script src="iniciar_tramite/js/script.js"></script>
	<script src="iniciar_tramite/js/retina.js"></script>
</body>
</html>