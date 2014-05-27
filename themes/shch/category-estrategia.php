<?php get_header(); ?>

	<div class="hero full">
		<img src="<?php echo THEMEPATH; ?>/images/hero-nosotros.jpg" alt="SHCH">
	</div><!-- hero -->

	<div class="width">

		<section class="columna c-12 center clearfix">

			<?php
			$type = 'estrategia';
			$estrategiaArgs = array(
				'category_name'		=> $type,
				'posts_per_page'	=> 2
			);

			$estrategiaQuery = new WP_Query($estrategiaArgs);
			if($estrategiaQuery -> have_posts()) {
				while($estrategiaQuery -> have_posts()) : 

					$estrategiaQuery ->the_post(); 
					?>
						
					<div class="icon">
						<span class="icon-shch"></span>
						<hr>
					</div>
					
					<h2 class="text-center" ><?php the_title(); ?></h2>

					<div class="columna c-8 medium-10 small-12 center"><?php the_content(); ?></div>

				<?php endwhile;
			}
			wp_reset_query(); 
			?>
		
		</section>

	</div><!-- width -->

<?php get_footer(); ?>