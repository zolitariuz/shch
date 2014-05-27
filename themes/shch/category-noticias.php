<?php get_header(); ?>

	<div class="hero full">

		<?php
			$coverArgs = array(
				'category_name'		=> 'noticias',
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

			<h2 class="text-center">Noticias ghb</h2>

			<?php
			global $wp_query;
			if(have_posts()) : while(have_posts()) : the_post();

					if ( has_post_thumbnail() ) {
						$imgUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ) ;
					}
					?>

					<div class="columna c-4 medium-6 small-12 post big">
						<a href="<?php the_permalink() ?>"><img src="<?php echo $imgUrl[0]?>" alt=""></a>
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<p><?php the_excerpt(); ?></p>
					</div><!-- post -->

			<?php endwhile; endif; wp_reset_query(); ?>

			<div class="columna full text-center">
			<?php
				$big = 999999999; // need an unlikely integer

				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
				) );
			?>
			</div>
		</section>

	</div><!-- width -->

<?php get_footer(); ?>