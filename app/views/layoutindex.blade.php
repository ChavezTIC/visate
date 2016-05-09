<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ES"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Vísate</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16" />
	<link rel="stylesheet" href="assets/css/normalize.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/jquery.fancybox.css">
	<link rel="stylesheet" href="assets/css/flexslider.css">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/queries.css">
	<link rel="stylesheet" href="assets/css/etline-font.css">
	<link rel="stylesheet" href="assets/bower_components/animate.css/animate.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/estilo.css">
	<script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<meta name="google-site-verification" content="STMBUPD4nM4-vyFYmuT4bXP2lUOCLlw5AE-grUqjbOQ" />
	<meta name="google-site-verification" content="9qG35CIfS5DAi6yCWbqrgytwqlW3U5Z6KQsHegcURCM" />
</head>
<body id="top">
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
		<section class="navigation">
			<header>
				<div class="header-content">
					<div class="logo"><a href="{{ URL::to('') }}"><img src="assets/img/visate-horizontal.png" alt="logo"></a></div>
					<div class="header-nav">
						<nav>
							<ul class="primary-nav">
								<li><a href="#que_necesito">¿Qué necesito para tramitar mi visa?</a></li>
								<li><a href="#pasaporte">Pasaporte</a></li>
								<li><a href="#nuestra_empresa">Nuestra Empresa</a></li>
								<li><a href="#dudas">Dudas</a></li>
								<li><a href="#contacto">Contacto</a></li>
							</ul>
							<ul class="member-actions">
								<li><a href="{{ URL::to('iniciarTramite') }}" class="btn-white btn-small">Iniciar mi Tramite</a></li>
							</ul>
						</nav>
					</div>
					<div class="navicon">
						<a class="nav-toggle" href="#"><span></span></a>
					</div>
				</div>
			</header>
		</section>

	


	@yield('contents')


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="footer-links">
						<ul class="footer-group">
							<li><a>¿Qué nesesito para tramitar mi visa?</a></li>
							<li><a>Pasaporte</a></li>
							<li><a>Nuestra empresa</a></li>
							 <li><a>Dudas</a></li>
							<li><a>Contacto</a></li>
							<li><a href="http://awsd4bb9323.bitnamiapp.com/visate/public/solicitud">Iniciar mi tramite</a></li>
						</ul>
						<!-- <p><i class="fa fa-phone"></i> Tel. 5551234567</p> -->
						<p><i class="fa fa-envelope"></i>   contacto@visate.mx</p>
						<p>Copyright © 2015 <a >Sedna</a>
							<br>
							<a href="http://tympanus.net/codrops/licensing/">Licence</a> | by <a href="http://www.peterfinlan.com/">Peter Finlan</a>.
						</p>
					</div>
				</div>
				<div class="social-share">
					<p>Síguenos en redes sociales</p>
					<a href="https://www.facebook.com/visatemex" class="facebook-share" target="_blank"><i class="fa fa-facebook"></i></a>
				</div>
			</div>
		</div>
	</footer>
	{{ HTML::script('assets/js/jquery-2.1.3.min.js') }}
	<script src="assets/js/vendor/bootstrap.min.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/jquery.flexslider-min.js"></script>
	<script src="assets/bower_components/classie/classie.js"></script>
	<script src="assets/bower_components/jquery-waypoints/lib/jquery.waypoints.min.js"></script>
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-XXXXX-X','auto');ga('send','pageview');
	</script>
	<script type="text/javascript">
	$(document).ready(function () {
		$(window).on("hashchange", function () {
			window.scrollTo(window.scrollX, window.scrollY - 110);
		});//
	});
	</script>
</body>
</html>