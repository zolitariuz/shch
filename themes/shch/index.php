<?php get_header(); ?>

	<div class="hero full">
		<img src="<?php echo THEMEPATH; ?>/images/hero-home.jpg" alt="SHCH">
	</div><!-- hero -->

	<div class="width">

		<section class="columna c-12 center">

			<a href="<?php echo site_url('nosotros') ?>" class="icon block">
				<span class="icon-shch"></span>
				<hr>
			</a>

			<?php
			$laEmpresa = get_page_by_title( 'La empresa' );
			$laEmpresaId = $laEmpresa->ID;
			$laEmpresaContent = $laEmpresa->post_content;
			?>

			<h2 class="text-center" ><?php echo $laEmpresa->post_title; ?></h2>


			<p class="columna c-8 medium-10 small-12 center">
				<?php echo $laEmpresaContent ?>
			</p>

		</section>

		<section class="columna c-12 center clearfix">

			<a href="<?php echo site_url('nuestras-empresas') ?>" class="icon block">
				<span class="icon-shch"></span>
				<hr>
			</a>

			<h2 class="text-center" >Nuestras empresas</h2>

			<?php
			$type = 'nuestras-empresas';
			$empresasArgs = array(
				'post_type'		=> $type,
				'post_per_page'	=> 0
			);

			$empresasQuery = new WP_Query($empresasArgs);
			if($empresasQuery -> have_posts()) : while($empresasQuery -> have_posts()) : $empresasQuery ->the_post();

					$logoGrisArgs = array(
						'type' 	=> 'plupload_image',
						'size' 	=> 'full'
					);
					$logoGrisArray = rwmb_meta( 'nuestras_empresas_plupload-gris', $logoGrisArgs);

					foreach ($logoGrisArray as $logoGrisItem) { ?>
							<div class="columna empresa c-3 medium-4 small-6">
								<a data-empresa="belmont-village" href="#">
									<img src="<?php echo $logoGrisItem['url']; ?>" alt="">
								</a>
							</div>
					<?php }
			endwhile; endif; wp_reset_query(); ?>

		</section>

		<section class="columna c-12 center clearfix">

			<a href="<?php echo site_url('noticias') ?>" class="icon block">
				<span class="icon-shch"></span>
				<hr>
			</a>

			<h2 class="text-center" >Últimas noticias</h2>

			<?php
			$noticiasArgs = array(
				'category_name' 	=> 'noticias',
				'posts_per_page' 	=> 4
			);
			$noticiasQuery = new WP_Query($noticiasArgs);

			if( $noticiasQuery->have_posts() ) {
				while( $noticiasQuery->have_posts() ) :
					$noticiasQuery->the_post(); ?>

					<div class="post columna c-3 medium-6 small-12 margin-bottom">
						<?php the_post_thumbnail( 'large' ); ?>
						<a href="<?php the_permalink(); ?>"><div class="overlay"></div></a>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div><!-- post -->

			<?php endwhile;
			}
			wp_reset_query();
			?>

		</section>
	</div><!-- width -->

<?php get_footer(); ?>