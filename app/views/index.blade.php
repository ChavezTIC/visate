@extends('layoutindex')
@section('contents')
	<section class="blog text-center pasos">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<article class="blog-post">
						<figure>
							<a href="img/pass2.jpg" class="single_image">
								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/pass2.jpg" alt="Sedna blog image"/>
								</div>
							</a>
							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 1</a></h2>
							<p><a href="#" class="blog-post-title pasos2">Tener tu pasaporte Vigente <br> No tengo pasaporte Vigente<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
				<div class="col-md-2">
					<article class="blog-post">
						<figure>
							<a href="img/form.png" class="single_image">
								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/form.png" alt="Sedna blog image"/>
								</div>
							</a>
							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 2</a></h2>
							<p><a href="#" class="blog-post-title">Llenar el formulario de solicitud<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
				<div class="col-md-2">
					<article class="blog-post">
						<figure>
							<a href="img/cards.jpg" class="single_image">
								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/cards.jpg" alt="Sedna blog image"/>
								</div>
							</a>
							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 3</a></h2>
							<p><a href="#" class="blog-post-title">Realizar tu pago de derecho a Visa<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
				<div class="col-md-2">
					<article class="blog-post">
						<figure>
							<a href="img/office.jpg" class="single_image">
								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/office.jpg" class="single_image" alt="Sedna blog image"/>
								</div>
							</a>
							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 4</a></h2>
							<a href="#" class="blog-post-title">Enviar la Referencia de tu pago para agendar la fecha de tu cita<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
				<div class="col-md-2">
					<article class="blog-post">
						<figure>
							<a href="img/office.jpg" class="single_image">
								<div class="blog-img-wrap">
									<div class="overlay">
										<i class="fa fa-search"></i>
									</div>
									<img src="assets/img/office.jpg" class="single_image" alt="Sedna blog image"/>
								</div>
							</a>
							<figcaption>
							<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Paso 5</a></h2>
							<a href="#" class="blog-post-title">Asistir a tu cita al consulado de tu eleccion<i class="fa fa-angle-right"></i></a></p>
							</figcaption>
						</figure>
					</article>
				</div>
				<a href="#download" class="btn btn-ghost btn-accent btn-small">Contacto</a>
			</div>
		</div>
	</section>
	<section class="sign-up section-padding text-center" id="download">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h3>Tramita tu Visa Aquí</h3>
					<p>Inicia y termina tu trámite en menos de 20 minutos</p>
					{{ Form::open(array('url' => 'solicitud','class' => 'signup-form')) }}
						<div class="form-input-group">
							<i class="fa fa-envelope"></i>{{ Form::text('email', null, array('placeholder'=>'Ingresa tu E-mail','required' => 'required')) }}
						</div>
						<div class="form-input-group">
							<i class="fa fa-lock"></i>{{ Form::text('id_solicitud', null, array('placeholder'=>'Ingresa tu ID de solicitud','required' => 'required')) }}
						</div>
						<button type="submit" class="btn-fill sign-up-btn">Tramitar</button>		
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

	<script type="text/javascript">
	$(document).ready(function() {
		/***************** Smooth Scrolling ******************/
		$(function() {

			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 2000);
						return false;
					}
				}
			});

		});
	});
	</script>
@stop