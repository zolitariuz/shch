<?php get_header(); ?>

	<div class="hero full">
		<?php
			$coverArgs = array(
				'category_name'		=> 'nosotros',
				'post_type' 		=> 'cover-photos',
				'posts_per_page'	=> 1
			);
			$coverQuery = new WP_Query($coverArgs);
			if($coverQuery -> have_posts()) : while($coverQuery -> have_posts()) : $coverQuery ->the_post();

				$imgUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ) ;
			?>

				<img src="<?php echo $imgUrl[0]?>" alt="<?php the_title(); ?>">

			<?php endwhile; endif; wp_reset_postdata();
		?>
	</div><!-- hero -->

	<div class="width">

		<section class="columna c-12 center">

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<div class="icon">
					<span class="icon-shch"></span>
					<hr>
				</div>

				<h2 class="text-center" ><?php the_title(); ?></h2>

				<?php
				if ( has_post_thumbnail() ) {
				$imgUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ) ;
				?>

					<img class="block columna c-10 small-12 margin-bottom center" src="<?php echo $imgUrl[0]?> " alt="">

				<?php } ?>

				<div class="columna c-8 medium-10 small-12 center"><?php the_content(); ?></div>

			<?php endwhile; endif; wp_reset_query(); ?>

		</section>

	</div><!-- width -->

<?php get_footer(); ?>