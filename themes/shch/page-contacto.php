<?php get_header(); ?>

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

			<h2 class="text-center">Contacto</h2>

			<form class="contacto columna c-8 small-12 center" method="post">

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