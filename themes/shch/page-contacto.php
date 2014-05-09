<?php get_header(); ?>

	<div class="hero full">
		<img src="<?php echo THEMEPATH; ?>/images/hero-nosotros.jpg" alt="SHCH">
	</div><!-- hero -->

	<div class="width clearfix">

		<section class="columna c-12 center clearfix">

			<div class="icon">
				<span class="icon-shch"></span>
				<hr>
			</div>

			<h2 class="text-center">Contacto</h2>

			<form action="<?php echo site_url( 'contacto-recibido') ?>" class="contacto columna c-8 center" method="post">

				<label class="full" for="nombre">Nombre</label>
				<input class="full required" name="nombre" type="text">

				<label class="full" for="email">Correo</label>
				<input class="full required email" name="email" type="email">

				<label class="full" for="mensaje">Mensaje</label>
				<textarea class="full required" name="mensaje"></textarea>

				<input class="columna c-4 center" type="submit" value="enviar" >

			</form>

		</section>

	</div><!-- width -->

<?php get_footer(); ?>