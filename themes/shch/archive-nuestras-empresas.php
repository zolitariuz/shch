<?php get_header(); ?>

	<div class="hero full">
		<?php
			$coverArgs = array(
				'category_name'		=> 'nuestras-empresas',
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

	<div class="width">

		<section class="columna c-12 center clearfix">

			<div class="icon">
				<span class="icon-shch"></span>
				<hr>
			</div>

			<h2 class="text-center">
				<?php if (qtrans_getLanguage() == 'es'){
					echo 'Divisiones';
				} else {
					echo 'Divisions';
				} ?>
			</h2>

			<?php
			$customPostTaxonomies = get_object_taxonomies('nuestras-empresas');

			foreach($customPostTaxonomies as $tax) {
			     $args = array(
		         	  'orderby' => 'name',
			          'show_count' => 0,
		        	  'pad_counts' => 0,
			          'hierarchical' => 1,
		        	  'taxonomy' => $tax,
		        	  'title_li' => ''
		        	);

			     $divisiones = get_categories( $args );
			} ?>

			<ul class="divisiones">
				<li class="activo" data-filer="*">Todas</li>
				<?php foreach ($divisiones as $division) {
					if ( $division->slug != 'sin-categoria' AND $division->slug != 'nosotros' AND $division->slug != 'noticias' AND $division->slug != 'estrategia' AND $division->slug != 'contacto' AND $division->slug != 'home' ){ ?>
						<li data-filter=".<?php echo $division->slug; ?>"><i class="fa fa-usd"></i><?php echo $division->name; ?></li>
				<?php }
				} ?>
			</ul>

			<div id="isotope">

				<?php

				if(have_posts()) : while(have_posts()) : the_post();

					$empresaCategory = get_the_category($post->ID);

					$logoGrisArgs = array(
						'type' 	=> 'plupload_image',
						'size' 	=> 'full'
					);
					$logoGrisArray = rwmb_meta( 'nuestras_empresas_plupload-gris', $logoGrisArgs);

					$logoColorArgs = array(
						'type' 	=> 'plupload_image',
						'size' 	=> 'full'
					);
					$logoColorArray = rwmb_meta( 'nuestras_empresas_plupload-color', $logoColorArgs);

					foreach($logoColorArray as $logoColorItem) {
						$logoColorItemUrl = $logoColorItem['url'];
					}
					foreach ($logoGrisArray as $logoGrisItem) { ?>
						<div class="columna empresa c-3 medium-4 small-6 <?php echo $empresaCategory[0]->slug; ?>">
							<a data-empresa="<?php echo basename(get_permalink()); ?>" href="#">
								<img class="gris" src="<?php echo $logoGrisItem['url']; ?>" alt="">
								<img class="hide color" src="<?php echo $logoColorItemUrl; ?>" alt="">
							</a>
						</div>
					<?php }

				endwhile; endif; wp_reset_query(); ?>

			</div><!-- isotope -->

		</section>
	</div><!-- width -->

	<div class="clear"></div>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<section class="empresa <?php echo basename(get_permalink()); ?>">

			<div class="cover belmont full">

				<?php
				$logoBlancoArgs = array(
					'type' 	=> 'plupload_image',
					'size' 	=> 'full'
				);
				$logoBlancoArray = rwmb_meta( 'nuestras_empresas_plupload-blanco', $logoBlancoArgs);
				foreach($logoBlancoArray as $logoBlancoItem) {
					$logoBlancoItemUrl = $logoBlancoItem['url'];
				}
				?>

				<img class="block center columna c-3" src="<?php echo $logoBlancoItemUrl;  ?>" alt="">
			</div><!-- cover -->

			<div class="width clearfix">

				<div class="columna c-6 small-12">
					<h4><?php the_title(); ?></h4>
					<?php the_content(); ?>
				</div>

				<div class="columna c-6 small-12 slider cycle-slideshow"
					data-cycle-fx="scrollHorz"
					data-cycle-swipe="true"
				>
					<?php
					$sliderArgs = array(
						'type' 	=> 'plupload_image',
						'size' 	=> 'full'
					);
					$sliderArray = rwmb_meta( 'nuestras_empresas_plupload-slider', $sliderArgs);
					foreach($sliderArray as $sliderItem) { ?>
						<img src="<?php echo $sliderItem['url']; ?>" alt="">
					<?php } ?>

					<div class="cycle-pager"></div>

				</div><!-- slider -->

			</div><!-- width -->

		</section>

	<?php endwhile; endif; wp_reset_query(); ?>


<?php get_footer(); ?>