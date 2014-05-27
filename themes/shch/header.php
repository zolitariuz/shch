<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<!--Font Awesome-->
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
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

					<h1 class="block columna">
						<a href="<?php echo qtrans_convertURL(site_url()); ?>">
							<img src="<?php echo THEMEPATH; ?>/images/logo-shch.png" alt="" />
						</a>
					</h1>

					<div class="columna c-1 right" id="btn-movil">
						<a href="#"><i class="fa fa-bars"></i></a>
					</div>

					<?php echo qtrans_generateLanguageSelectCode('text'); ?>

					<nav class="columna c-9 medium-12 right menu">
						<a href="<?php echo site_url('s/nosotros') ?>">
							<?php if (qtrans_getLanguage() == 'es'){
								echo 'Nosotros';
							} else {
								echo 'Us';
							} ?>
						</a>
						<a href="<?php echo qtrans_convertURL(site_url('nuestras-empresas/'));  ?>">
							<?php if (qtrans_getLanguage() == 'es'){
								echo 'Nuestras empresas';
							} else {
								echo 'Our companies';
							} ?>
						</a>
						<a href="<?php echo qtrans_convertURL(site_url('estrategia/')); ?>">
							<?php if (qtrans_getLanguage() == 'es'){
								echo 'Estrategia';
							} else {
								echo 'Strategy';
							} ?>
						</a>
						<a href="<?php echo qtrans_convertURL(site_url('noticias/')); ?>">
							<?php if (qtrans_getLanguage() == 'es'){
								echo 'Noticias';
							} else {
								echo 'News';
							} ?>
						</a>
						<a href="<?php echo qtrans_convertURL(site_url('contacto/')); ?>">
							<?php if (qtrans_getLanguage() == 'es'){
								echo 'Contacto';
							} else {
								echo 'Contact';
							} ?>
						</a>
					</nav>


				</div><!-- width -->

			</header>

			<div class="main">
