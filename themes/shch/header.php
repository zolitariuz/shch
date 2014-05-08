<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">

			<header>

				<div class="width clearfix">

					<h1 class="block columna c-2">
						<a href="<?php echo site_url(); ?>">
							<img src="<?php echo THEMEPATH; ?>/images/logo-shch.png" alt="" />
						</a>
					</h1>

					<nav class="columna c-10">
						<a href="<?php echo site_url('nosotros') ?>">Nosotros</a>
						<a href="<?php echo site_url('nuestra-empresas') ?>">Nuestras empresas</a>
						<a href="<?php echo site_url('estrategia') ?>">Estrategia</a>
						<a href="<?php echo site_url('noticias') ?>">Noticias</a>
						<a href="<?php echo site_url('contacto') ?>">Contacto</a>
					</nav>

				</div><!-- width -->

			</header>

			<div class="main">
