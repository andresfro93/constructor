<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Constructor metálico</title>
	<meta name="description" content="Somos una empresa de Ingeniería especializada en el Diseño, Fabricación y Montaje de Estructuras de Acero, y demás productos de ingenería Civíl y mecánica.">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/normalize.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>" type="text/css" />
	
</head>
<body>
	<header class="header1">
		<div class="amarillo"></div>

<!--barra de navegación-->

		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Constructor metálico" class="logo"></a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="inicio.html">Inicio</a></li>
					<li><a href="servicios.html">Servicios</a></li>
					<li><a href="#">Proyectos</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>			
			</div><!-- /.navbar-collapse -->
		</nav>

<!--texto titulo de la web-->
		<div class="header-titulo">

			<section class="container">
				<h1 class="col-lg-7 header-text1 alingr">Constructor Metálico de Colombia s.a.s</h1>
				<h2 class="col-lg-8 header-text2 alingr">Diseño, construcción y montaje de estructuras metálicas en Colombia</h2>
			</section>
		</div>
	</header>

<!--block1-->
	<section class="container">
		<p class="col-xs-12 block1-text">Somos una empresa de Ingeniería especializada en el Diseño, Fabricación y Montaje de Estructuras de Acero, y demás productos de ingenería Civíl y mecánica.</p>
		<div class="block1-boton">Ver +</div>
	</section>
	<section class="block2">
		<article class="container">
			<article class="block2-columnas col-lg-3">
				<p class="block2-tittle">Política de calidad</p>
				<p class="block2-text">Contamos con personal altamente calificado y certificado para fabricacion, trabajos en alturas y todo tipo de procedimientos con soldadura, ademas tenemos a nuestra disposición equipos de ultima generacion para soldadura MIG (GMAW), electrodo revestido (SMAW), arco sumergido (SAW), fluxcore (FCAW)</p>
			</article>
			<article class="block2-columnas col-lg-3">
				<p class="block2-tittle">Visión</p>
				<p class="block2-text">En los siguientes cinco años,
				El Constructor Metálico de Colombia S.A.S Consolidará su participación en el mercado de la Industria Metal-Mecánica y seremos reconocidos como una compañía innovadora en el diseño de obras estructurales, entregando productos con altos estándares de calidad resultado del profesionalismo de nuestro equipo de trabajo.</p>
			</article>
			<article class="block2-columnas col-lg-3">
				<p class="block2-tittle">Misión</p>
				<p class="block2-text">El Constructor Metálico de Colombia S.A.S, es una empresa de servicio que tiene como misión satisfacer las exigencias del mercado nacional, enfocados en el desarrollo de proyectos de construcción en acero, fundamentados en el compromiso con la calidad, el cumplimiento y la responsabilidad.</p>
			</article>
		</article>
	</section>

<!--footer-->

	<footer class="Footer">
		<section class="Footer-list">
			<form action="" id="formulario" class="formulario">
				<input type="text" placeholder="Nombre"name="nombre" required/>
				<input type="text" placeholder="E-mail"  name="email" required/>
				<input type="text" placeholder="Empresa"  name="empresa" required/>
			</form>
		</section>
		<section class="Footer-contact">
			<p id="boton">Contacto</p>
		</section>	
	</footer>

<!--javascript-->
	<script src="<?php echo get_template_directory_uri();?>/script/js/jquery.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/script/js/bootstrap.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/script/js/scripts.js"></script>
</body>
</html>