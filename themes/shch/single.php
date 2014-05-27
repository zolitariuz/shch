<?php get_header(); the_post(); ?>

	<div class="width clearfix">

		<section class="columna c-12 center clearfix">
			
			<?php $imgUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ) ; ?>

			<div class="columnta full margin-bottom">
				<img src="<?php echo $imgUrl[0]?>" alt="<?php the_title(); ?>">
			</div>

			<div class="icon">
				<span class="icon-shch"></span>
				<hr>
			</div>

			<h2 class="text-center" ><?php the_title(); ?></h2>
			
			<div class="columna c-8 center">
				<?php the_content(); ?>
			</div>

		</section>

	</div><!-- width -->

<?php get_footer(); ?>