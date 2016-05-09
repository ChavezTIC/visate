@extends('layoutindex')
@section('contents')

<div class="flexslider">
	<ul class="slides">
		<li>
			<img src="assets/img/slide1.jpg" />
		</li>
		<li>
			<img src="assets/img/slide2.jpg" />
		</li>
		<li>
			<img src="assets/img/slide3.jpg" />
		</li>
	</ul>
</div>

		<div class="container tramite_tu_visa">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="hero-content text-center">
						<h1>Tramita Tu Visa de Manera Totalmente Segura</h1>
						<p class="intro">Realiza el trámite de tu cita para visa en menos de 20 minutos y totalmente en español</p>
						<a href="{{ URL::to('iniciarTramite') }}" class="btn btn-fill btn-large btn-margin-right">Tramitar mi Visa</a>
					</div>
				</div>
			</div>
		</div>

	<section class="blog text-center pasos">
		<div class="container-fluid">
			<div class="row">
				<div class="cuadros">
					<article class="blog-post">
						<figure>
								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/VISATE_1.jpg" alt="Sedna blog image"/>
								</div>
							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 1</a></h2>
							<p><a href="#" class="blog-post-title pasos2">Tener tu pasaporte Vigente <br> No tengo pasaporte Vigente<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
				<div class="cuadros">
					<article class="blog-post">
						<figure>

								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/VISATE_2.jpg" alt="Sedna blog image"/>
								</div>

							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 2</a></h2>
							<p><a href="#" class="blog-post-title">Llenar el formulario de solicitud<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
				<div class="cuadros">
					<article class="blog-post">
						<figure>

								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/VISATE_3.jpg" alt="Sedna blog image"/>
								</div>

							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 3</a></h2>
							<p><a href="#" class="blog-post-title">Realizar tu pago de derecho a Visa<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
				<div class="cuadros">
					<article class="blog-post">
						<figure>
								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/VISATE_4.jpg" class="single_image" alt="Sedna blog image"/>
								</div>
							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 4</a></h2>
							<a href="#" class="blog-post-title">Enviar la Referencia de tu pago para agendar la fecha de tu cita<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
				<div class="cuadros">
					<article class="blog-post">
						<figure>
								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/VISATE_5.jpg" class="single_image" alt="Sedna blog image"/>
								</div>
							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 5</a></h2>
							<a href="#" class="blog-post-title">Asistir a tu cita al consulado de tu eleccion<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section class="que_necesito container-fluid" id="que_necesito">
		<h3>QUÉ NECESITO PARA TRAMITAR O RENOVAR MI VISA?</h1>
		<div class="contenedor">
			<p>La documentación puede variar de acuerdo a tu caso. Los siguientes son documentos sugeridos que pueden ayudar al oficial consular a determinar sus intenciones de regresar a México, no son una lista exacta de lo que el solicitante debe presentar al momento de su entrevista. Estos documentos pueden o no ser revisados en el momento de su entrevista.
			</p>
			<ol>
				<li>Pasaporte vigente. (mínimo 6 meses)</li>
				<li>Pasaportes que contengan visas Americanas anteriores, aun cuando hayan expirado (en caso de ser renovación)
				</li>
				<li>Acta de nacimiento (original o copia certificada)
				</li>
				<li>Credencial para votar (IFE) si es mayor a 18 años</li>
				<li>Pruebas económicas (Estados de cuenta, Cédula Fiscal, documentos de impuestos)
				</li>
				<li>Pruebas educativas (Diplomas universitarios, Cédula Profesional)</li>
				<li>Pruebas de empleo (Recibos de nómina, credencial de la empresa, carta del departamento de Recursos Humanos)
				</li>
				<li>Pruebas de arraigo en México (propiedades, comprobantes de domicilio</li>
			</ol>
		</div>
	</section>

	<section class="pasaporte" id="pasaporte">
		<figure>
			<img src="assets/img/logo_pasaporte.png" alt="log pasaporte">
		</figure>
		<div class="contenedor_texto">
			<h3>Pasaporte</h3>
			<div>
				<p>Para el tramite de visa es fundamental que cuentes con tu pasaporte, para esto puedes llamar a 01 800 8010 773 y programar tu cita para completar los requisitos y asi continuar con tu tramite de visa.
					<br> Al momento de realizar la llamada recuerda tener a la mano:</p>
					<ul>
						<li>CURP</li>
						<li>Nombre completo</li>
						<li>Correo electrónico</li>
						<li>Número de teléfono</li>
						<li>Número de pasaporte anterior (solo en caso de ser renovación)</li>
					</ul>
					<br>
					<p>El asesor te proporcionará los días disponibles y te agendará el más próximo
						<br>
						<br>
						Puedres descargar una gría completa que te ayudará con el trámite <b>AQUÍ</b>
					</p>	
			</div>
		</div>
	</section>

	<section class="nuestra_empresa" id="nuestra_empresa">
		<h3>Nuestra empresa</h3>
		<div class="contenedor_texto">
			Empresa joven ya con más de 3 años de experiencia especializada en el trámite en línea de la visa para EUA tipo B1/B2 o de TURISTA. Fácil, eficiente y accesible. Te brindamos la asesoría necesaria para realizar tu trámite sin necesidad de entregar documentos oficiales y desde la comodidad de tu oficina u hogar.
		</div>
	</section>

	<section class="dudas" id="dudas">
		<div class="jumbotron">
			<div class="container">
				<div class="page-header ">
					<h3>Dudas</h3>
					<p>Sabemos que el procedimiento para tramitar tu visa puede ser confuso y complicado, pero queremos ayudarte a que sea lo mas facil posible.</p>
					<h3 class="text-center"><small> Tienes preguntas, nosotros respuestas.</small></h3>
				<br>

				<div class="panel-group" id="accordion">

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
									¿Cuánto tiempo mínimo debe de estar vigente mi pasaporte?
								</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse ">
							<div class="panel-body">
								Es necesario que el pasaporte tenga como mínimo un año de vigencia para la fecha que acuda al consulado a realizar el trámite de su visa</div>
							</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
									Me han rechazado la visa, ¿Puedo solicitarla de nuevo?
								</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse ">
							<div class="panel-body">
								Sí, usted puede solicitarla nuevamente si han cambiado las circunstancias por las que le fue negada la visa, de esta manera asegurando que en esta ocasión podrá ser exitoso su trámite y así obtendrá su visa.</div>
							</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
									Si mi visa es renovación ¿acudiré a ambas citas? 
								</a>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse ">
							<div class="panel-body">
								No, si su visa venció en un plazo menor de 48 meses usted solo acudirá a la toma de fotografías y huellas dactilares, pero si su visa excede de tiempo será necesario que acuda a la entrevista consular.</div>
							</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
									Si tramito la visa con mi familia ¿acudiremos a una cita familiar o individual?
								</a>
							</h4>
						</div>
						<div id="collapse4" class="panel-collapse collapse ">
							<div class="panel-body">
								Acudirán a una entrevista familiar, el oficial consular los entrevistará a todos juntos.</div>
							</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
									¿Puedo renovar mi visa si ésta aún no ha vencido?
								</a>
							</h4>
						</div>
						<div id="collapse5" class="panel-collapse collapse ">
							<div class="panel-body">
								Sí, usted puede renovar su visa antes de la fecha de expiración. Teniendo en cuenta que su visa anterior será cancelada o retenida por un oficial consular como parte del proceso de expedirle una nueva visa.</div>
							</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
									¿A qué consulado puedo acudir?
								</a>
							</h4>
						</div>
						<div id="collapse6" class="panel-collapse collapse ">
							<div class="panel-body">
								<ul>
									<li>Cd. Juárez</li>
									<li>Hermosillo</li>
									<li>Tijuana</li>
									<li>Mérida</li>
									<li>Cd. México </li>
									<li>Guadalajara</li>
									<li>Matamoros</li>
									<li>Monterrey</li>
									<li>Nogales</li>
									<li>Nuevo Laredo </li>
								</ul>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
									¿Es necesario que los menores acudan al consulado?
								</a>
							</h4>
						</div>
						<div id="collapse8" class="panel-collapse collapse ">
							<div class="panel-body">
								Todos los niños mayores de 7 años, desde los que cumplen los 7 años el día de la cita, necesitan estar presentes durante el trámite. Para los niños de 6 años o menores puede ser difícil la espera durante el largo proceso de entrevista. Por favor recuerde traer actas de nacimiento en original para todos los niños menores.</div>
							</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
									¿Qué papeles debo llevar a mi cita del consulado?
								</a>
							</h4>
						</div>
						<div id="collapse9" class="panel-collapse collapse ">
							<div class="panel-body lista-requisitos">
								General:
								<ul>
									<li>Pasaporte vigente</li>
									<li>Acta de nacimiento</li>
									<li>CURP</li>
									<li>Credencial de elector</li>
									<li>Comprobante de domicilio</li>
									<li>Datos del seguro social o issste</li>
									<li>Licencia de manejo</li>
									<li>Visa anterior</li>
								</ul>
								<br>
								Empleado:
								<ul>
									<li>Acta de estado civil</li>
									<li>Documentos de afore</li>
									<li>Credencial de empleado</li>
									<li>Carta de trabajo con sueldo, antigüedad y puesto</li>
									<li>Últimas cinco nominas</li>
									<li>Cuentas bancarias</li>
								</ul>
								<br>
								Estudiante:
								<ul>
									<li>Datos de escuela</li>
									<li>Constancia de estudios</li>
									<li>Solvencia económica</li>
									<li>Acta de ambos padres</li>
									<li>Visa o pasaporte (en caso de tener)</li>
									<li>Pago de colegiaturas</li>
								</ul>
								<br>
								Menor de 7 años:
								<ul>
									<li>Carta de pediatra (con foto y sello)</li>
									<li>Copia de cedula del pediatra</li>
									<li>Cartilla de vacunación</li>
									<li>Acta de alumbramiento</li>
									<li>Permiso notariado en caso de que no vaya alguno de los padres</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
									Han aprobado mi visa, ¿dónde me será entregada?
								</a>
							</h4>
						</div>
						<div id="collapse10" class="panel-collapse collapse ">
							<div class="panel-body">
								En cualquier paquetería de DHL, las cual te indicaraá un asesor de VISA-TE
								<br>
								Deberás acudir a la paquetería con una identificación oficial y con un numero de envío que llegará a tu correo 
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
									Después de mi cita con el consulado, ¿Cuánto tiempo tarda en llegar mi visa?
								</a>
							</h4>
						</div>
						<div id="collapse11" class="panel-collapse collapse ">
							<div class="panel-body">
								En un lapso de 3-4 semanas después de ser aprobada tu visa, por lo cual tienes que estar al pendiente de tu correo electrónico donde recibirás una notificación </div>
							</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
									Mi visa fue aprobada, ¿Por cuánto tiempo estará vigente?
								</a>
							</h4>
						</div>
						<div id="collapse12" class="panel-collapse collapse ">
							<div class="panel-body">
								Siendo aprobada tu visa ésta tiene vigencia de 10 años</div>
							</div>
					</div>

				</div>
			</div>
		</div>
	</section>


	<section class="nuestro_servicio">
		<h3>Nuestro Servicio</h3>
		<ul>
			<li>Llenado de tu solicitud DS-160 (solicitud oficial del consulado). El llenado de tu solicitud no implica ningún costo, hasta el momento en que seas contactado por un asesor que no te quede ninguna duda del servicio y decidas iniciarlo.</li>
			<li>Forma de pago MRV al consulado en efectivo en el banco o con tarjeta de crédito.</li>
			<li>Tú eliges los días y el consulado de tu preferencia.</li>
			<li>Programación de cita en el CAS y Consulado, el cual requiere un pago por derecho a cita.</li>
			<li>Asesoría previa a tu cita.</li>
		</ul>

		<p>Costo de asesoría (por solicitante): $420.00</p>
		<p>Nota
			<br>
			El costo de derecho a cita de VISA está catalogado de la siguiente manera:
			<ul>
				<li>Menores de 15 años: 16 Dolares, por 10 años o hasta que el menor cumpla 15 años, lo que suceda primero. En caso de requerir una visa por un plazo fijo de 10 años sin importar la edad, entonces tendrá un costo de 160 dolares</li>
				<li>Mayores de 15 años y adultos: 160 dolares con una vigencia de 10 años.</li>
			</ul>
		</p>
	</section>

	<section class="sign-up section-padding text-center" id="contacto">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h3>¿Tienes alguna duda?</h3>
					<p>Compártenos cualquier inquietud que tengas</p>
					{{ Form::open(array('url' => 'preguntas','class' => 'signup-form')) }}
						<div class="form-input-group">
							<i class="fa fa-envelope"></i>{{ Form::text('email', null, array('placeholder'=>'Ingresa tu E-mail','required' => 'required')) }}
						</div>
						<div class="form-input-group textarea-form">
							<i class="fa fa-pencil-square-o"></i>{{ Form::textarea('texto', null, array('placeholder'=>'¿Qué dudas tienes?','required' => 'required')) }}
						</div>
						<button type="submit" class="btn-fill sign-up-btn">Enviar</button>		
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</section>
	<section class="to-top">
		<div class="container">
			<div class="row">
				<div class="to-top-wrap">
					<a href="#top" class="top"><i class="fa fa-angle-up"></i></a>
				</div>
			</div>
		</div>
	</section>

	{{ HTML::script('assets/js/jquery-2.1.3.min.js') }}
	<script type="text/javascript">
	$(document).ready(function() {

		$('.flexslider').flexslider({
			animation: "slide",
			slideshow: true,
			slideshowSpeed: 4760
		});
	});
	</script>

	<style type="text/css">
		.flexslider {
			width: 100%;
			display: inline-block;
			margin: 0px;
			margin-top: 118px;
		}

		.flex-control-nav {
			bottom: 0px;
		}
		.tramite_tu_visa {
			padding-bottom: 30px;
		}
		.cuadros {
			width: 17%;
			display: inline-block;
			margin: 1%;
			vertical-align: top;
		}

		.blog {
			padding-bottom: 0px;
		}

		.section-padding {
			padding: 0px 0px 30px;
		}

		h3 {
			text-align: center;
		}

		.que_necesito .contenedor {
			padding: 0 5%;
		}
		.que_necesito .contenedor p{
			font-size: 20px;
		}
		.que_necesito .contenedor ol{
			font-size: 20px;
		}
		.pasaporte {
			padding: 40px 0;
		}
		.pasaporte figure{
			width: 30%;
			display: inline-block;
			vertical-align: top;
		}
		.pasaporte figure img{
			width: 90%;
			display: table;
			margin: auto;
		}
		.pasaporte .contenedor_texto {
			width: 63%;
			display: inline-block;
			vertical-align: top;
			padding: 0 3%;
		}
		.pasaporte .contenedor_texto p{
			font-size: 20px;
			text-align: center;
			

		}
		.pasaporte .contenedor_texto div ul li{
			list-style-type: circle;
			color: #000000;
			font-weight: 400;
			font-size: 15px;
		}
		.pasaporte .contenedor_texto div ul{
			padding: 0 2%;
		}

		.nuestra_empresa {
			padding-bottom: 30px;
		}
		.nuestra_empresa .contenedor_texto {
			padding: 0 5%;
			width: 100%;
			font-size: 15px;
			font-weight: 400;
			text-align: justify;
		}

		.nuestro_servicio {
			padding: 20px 0;
			text-align: justify;
		}

		.nuestro_servicio ul {
			padding: 5%;
			font-size: 15px;
			font-weight: 400;
		}
		.nuestro_servicio ul li{
			list-style-type: circle;
		}
		.nuestro_servicio p{
			padding: 0 5%;
		}

		.dudas {
			width: 100%;
		}

		.jumbotron{width:90%;margin-left:10%;max-width: 1200px;margin-left:auto; margin-right:auto;}
		.img-center {margin:0 auto;}
		.dl-horizontal dt{white-space: normal;}
		.omacenter{margin-left:auto; margin-right:auto;}
		.titre{color:#fff;}
		.entete{background-color: #22780F;width:80%;margin-left:10%;}
		/*asd*/
	</style>
@stop