<?php get_header(); the_post(); ?>

	<div class="hero full">
		<?php
			$coverArgs = array(
				'category_name'		=> 'contacto',
				'post_type' 		=> 'cover-photos',
				'posts_per_page'	=> 1
			);
			$coverQuery = new WP_Query($coverArgs);
			if($coverQuery -> have_posts()) : while($coverQuery -> have_posts()) : $coverQuery ->the_post();

				$imgUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ) ;
			?>

				<img src="<?php echo $imgUrl[0]?>" alt="<?php the_title(); ?>">

			<?php endwhile; endif; wp_reset_query();
		?>
	</div><!-- hero -->

	<div class="width clearfix">

		<section class="columna c-12 center clearfix">

			<div class="icon">
				<span class="icon-shch"></span>
				<hr>
			</div>

			<h2 class="text-center">
				<?php if (qtrans_getLanguage() == 'es'){
					echo 'Contacto';
				} else {
					echo 'Contact';
				} ?>
			</h2>

			<div class="text-center" ><?php the_content(); ?></div>

			<form class="contacto columna c-8 small-12 center" method="post">

				<label class="full" for="nombre">
					<?php if (qtrans_getLanguage() == 'es'){
						echo 'Nombre';
					} else {
						echo 'Name';
					} ?>
				</label>
				<input class="full required" name="nombre" type="text">

				<label class="full" for="email">
					<?php if (qtrans_getLanguage() == 'es'){
						echo 'Correo';
					} else {
						echo 'E-mail';
					} ?>
				</label>
				<input class="full required email" name="email" type="email">

				<label class="full" for="mensaje">
					<?php if (qtrans_getLanguage() == 'es'){
						echo 'Mensaje';
					} else {
						echo 'Message';
					} ?>
				</label>
				<textarea class="full required" name="mensaje"></textarea>

				<?php if (qtrans_getLanguage() == 'es'){
					echo '<input class="columna c-4 center" type="submit" value="enviar" >';
				} else {
					echo '<input class="columna c-4 center" type="submit" value="send" >';
				} ?>


			</form>

		</section>

	</div><!-- width -->

<?php get_footer(); ?>