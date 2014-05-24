<?php get_header(); ?>

	<div class="hero full">
		<img src="<?php echo THEMEPATH; ?>/images/hero-nosotros.jpg" alt="SHCH">
	</div><!-- hero -->

	<div class="width">

		<section class="columna c-12 center">

			<div class="icon">
				<span class="icon-shch"></span>
				<hr>
			</div>

			<?php
			$type = 'nosotros';
			$nosotrosArgs = array(
				'category_name'		=> $type,
				'posts_per_page'	=> 2
			);


			$nosotrosQuery = new WP_Query($nosotrosArgs);
			if($nosotrosQuery -> have_posts()) {
				while($nosotrosQuery -> have_posts()) : 

					$nosotrosQuery ->the_post(); 
					?>

					<h2 class="text-center" ><?php the_title(); ?></h2>

					<?php
					if ( has_post_thumbnail() ) {
					  	$imgUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ) ;
					?>

						<img class="block columna c-10 small-12 margin-bottom center" src="<?php echo $imgUrl[0]?> " alt="">
					
					<?php } ?>

					<div class="columna c-8 medium-10 small-12 center"><?php the_content(); ?></div>

				<?php endwhile;
			}
			wp_reset_query(); 
			?>

			

		</section>

	</div><!-- width -->

<?php get_footer(); ?>