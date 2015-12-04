@extends('layoutindex')
@section('contents')
<!--........................................  FAQ     .......................................-->
<!--.........................................................................................-->


<div class="jumbotron">
	<div class="container">
		<div class="page-header ">
			<h1 class="text-center"><small> Tienes preguntas, nosotros respuestas.</small></h1>
		  <div class="well well-sm entete"></div>
		</div>
		<br>
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
					<div class="panel-body">
						GENERAL:
						*pasaporte vigente
						*acta de nacimiento
						*curp 
						*credencial de elector
						*comprobante de domicilio 
						*datos del seguro social o issste
						*licencia de manejo  
						*visa anterior 
						Empleado:
						*acta de estado civil 
						*documentos de afore
						*credencial de empleado
						*carta de trabajo con sueldo, antigüedad y puesto
						*últimas cinco nominas
						*cuentas bancarias 
						Estudiante:
						* datos de escuela
						*constancia de estudios
						*solvencia económica
						*acta de ambos padres
						*visa o pasaporte (en caso de tener)
						*pago de colegiaturas
						Menor de 7 años:
						*carta de pediatra (con foto y sello)
						*copia de cedula del pediatra
						*cartilla de vacunación
						*acta de alumbramiento
						*permiso notariado en caso de que no valla alguno de los padres 
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
							Después de mi cita con el consulado, ¿Cuánto tiempo tarda en llegar  mi visa?
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
							Mi visa fue aprobada, ¿Por cuanto tiempo estará vigente?
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

<style>
/* CSS used here will be applied after bootstrap.css */
.jumbotron{width:80%;margin-left:10%;max-width: 1200px;margin-left:auto; margin-right:auto;}
.img-center {margin:0 auto;}
.dl-horizontal dt{white-space: normal;}
.omacenter{margin-left:auto; margin-right:auto;}
.titre{color:#fff;}
.entete{background-color: #22780F;width:80%;margin-left:10%;}
</style>
@stop