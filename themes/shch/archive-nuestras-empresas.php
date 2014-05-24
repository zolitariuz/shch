<?php get_header(); ?>

	<div class="hero full">
		<img src="<?php echo THEMEPATH; ?>/images/hero-home.jpg" alt="SHCH">
	</div><!-- hero -->

	<div class="width">

		<section class="columna c-12 center clearfix">

			<div class="icon">
				<span class="icon-shch"></span>
				<hr>
			</div>

			<h2 class="text-center" >Nuestras empresas</h2>

			<h4 class="text-center">Divisiones</h4>

			<ul class="divisiones">
				<li class="activo" data-filer="*">Todas</li>
				<li data-filter=".inmobiliaria">Inmobiliaria</li>
				<li data-filter=".it">IT</li>
				<li data-filter=".financiera">Financiera</li>
				<li data-filter=".responsabilidad-social">Responsabilidad social</li>
			</ul>

			<div id="isotope">

				<?php

				if(have_posts()) : while(have_posts()) : the_post(); 

						if ( has_post_thumbnail() ) {
						  	$imgUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ) ;
						} 

						$empresaCategory = get_the_category($post->ID);
						?>
						
						<div class="columna empresa c-3 medium-4 small-6 <?php echo $empresaCategory[0]->slug;  ?>">
							<a data-empresa="<?php echo basename(get_permalink()); ?>" href="#">
								<img src="<?php echo $imgUrl[0] ?>" alt="">
							</a>
						</div> 

					<?php endwhile;
				endif;
				wp_reset_query(); 
				?>

			</div><!-- isotope -->

		</section>
	</div><!-- width -->

	<div class="clear"></div>

	<section class="empresa belmont-village">

		<?php

		if(have_posts()) : while(have_posts()) : the_post(); 

				if ( has_post_thumbnail() ) {
				  	$imgUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ) ;
				} 

				?>

				<div class="cover belmont full">
					<img class="block center columna c-4" src="<?php echo $imgUrl[0] ?>" alt="">
				</div><!-- cover -->

				<div class="width clearfix">

					<div class="columna c-6 small-12">
						<h4>Belmont Village</h4>
						<p>Diviserunt naturam hominis in animum et corpus. Quae cum dixisset paulumque institisset, Quid est? Haec quo modo conveniant, non sane intellego. Atque haec coniunctio confusioque virtutum tamen a philosophis ratione quadam distinguitur. </p>
					</div>

					<div class="columna c-6 small-12 slider cycle-slideshow"
						data-cycle-fx="scrollHorz"
						data-cycle-swipe="true"
					>
						<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
						<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
						<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">

						<div class="cycle-pager"></div>

					</div><!-- slider -->

				</div><!-- width -->

			<?php endwhile;
		endif;
		wp_reset_query(); 
		?>

	</section>

	<section class="empresa quiero-billete">

		<div class="cover belmont full">
			<img class="block center columna c-4" src="<?php echo THEMEPATH; ?>images/quiero-billete-blanco.png" alt="">
		</div><!-- cover -->

		<div class="width clearfix">

			<div class="columna c-6 small-12">
				<h4>Quiero billete</h4>
				<p>Diviserunt naturam hominis in animum et corpus. Quae cum dixisset paulumque institisset, Quid est? Haec quo modo conveniant, non sane intellego. Atque haec coniunctio confusioque virtutum tamen a philosophis ratione quadam distinguitur. </p>
			</div>

			<div class="columna c-6 small-12 slider cycle-slideshow"
				data-cycle-fx="scrollHorz"
				data-cycle-swipe="true"
			>
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">

				<div class="cycle-pager"></div>

			</div><!-- slider -->

		</div><!-- width -->

	</section>

	<section class="empresa kiwi">

		<div class="cover belmont full">
			<img class="block center columna c-4" src="<?php echo THEMEPATH; ?>images/kiwi-blanco.png" alt="">
		</div><!-- cover -->

		<div class="width clearfix">

			<div class="columna c-6 small-12">
				<h4>Quiero billete</h4>
				<p>Diviserunt naturam hominis in animum et corpus. Quae cum dixisset paulumque institisset, Quid est? Haec quo modo conveniant, non sane intellego. Atque haec coniunctio confusioque virtutum tamen a philosophis ratione quadam distinguitur. </p>
			</div>

			<div class="columna c-6 small-12 slider cycle-slideshow"
				data-cycle-fx="scrollHorz"
				data-cycle-swipe="true"
			>
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">

				<div class="cycle-pager"></div>

			</div><!-- slider -->

		</div><!-- width -->

	</section>

	<section class="empresa habitavi">

		<div class="cover belmont full">
			<img class="block center columna c-4" src="<?php echo THEMEPATH; ?>images/habitavi-blanco.png" alt="">
		</div><!-- cover -->

		<div class="width clearfix">

			<div class="columna c-6 small-12">
				<h4>Quiero billete</h4>
				<p>Diviserunt naturam hominis in animum et corpus. Quae cum dixisset paulumque institisset, Quid est? Haec quo modo conveniant, non sane intellego. Atque haec coniunctio confusioque virtutum tamen a philosophis ratione quadam distinguitur. </p>
			</div>

			<div class="columna c-6 small-12 slider cycle-slideshow"
				data-cycle-fx="scrollHorz"
				data-cycle-swipe="true"
			>
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">

				<div class="cycle-pager"></div>

			</div><!-- slider -->

		</div><!-- width -->

	</section>

	<section class="empresa quiero-confianza">

		<div class="cover belmont full">
			<img class="block center columna c-4" src="<?php echo THEMEPATH; ?>images/quiero-confianza-blanco.png" alt="">
		</div><!-- cover -->

		<div class="width clearfix">

			<div class="columna c-6 small-12">
				<h4>Quiero billete</h4>
				<p>Diviserunt naturam hominis in animum et corpus. Quae cum dixisset paulumque institisset, Quid est? Haec quo modo conveniant, non sane intellego. Atque haec coniunctio confusioque virtutum tamen a philosophis ratione quadam distinguitur. </p>
			</div>

			<div class="columna c-6 small-12 slider cycle-slideshow"
				data-cycle-fx="scrollHorz"
				data-cycle-swipe="true"
			>
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">

				<div class="cycle-pager"></div>

			</div><!-- slider -->

		</div><!-- width -->

	</section>

	<section class="empresa quiero-casa">

		<div class="cover belmont full">
			<img class="block center columna c-4" src="<?php echo THEMEPATH; ?>images/quiero-casa-blanco.png" alt="">
		</div><!-- cover -->

		<div class="width clearfix">

			<div class="columna c-6 small-12">
				<h4>Quiero billete</h4>
				<p>Diviserunt naturam hominis in animum et corpus. Quae cum dixisset paulumque institisset, Quid est? Haec quo modo conveniant, non sane intellego. Atque haec coniunctio confusioque virtutum tamen a philosophis ratione quadam distinguitur. </p>
			</div>

			<div class="columna c-6 small-12 slider cycle-slideshow"
				data-cycle-fx="scrollHorz"
				data-cycle-swipe="true"
			>
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">

				<div class="cycle-pager"></div>

			</div><!-- slider -->

		</div><!-- width -->

	</section>

	<section class="empresa construyendo-y-creciendo">

		<div class="cover belmont full">
			<img class="block center columna c-4" src="<?php echo THEMEPATH; ?>images/construyendo-y-creciendo-blanco.png" alt="">
		</div><!-- cover -->

		<div class="width clearfix">

			<div class="columna c-6 small-12">
				<h4>Quiero billete</h4>
				<p>Diviserunt naturam hominis in animum et corpus. Quae cum dixisset paulumque institisset, Quid est? Haec quo modo conveniant, non sane intellego. Atque haec coniunctio confusioque virtutum tamen a philosophis ratione quadam distinguitur. </p>
			</div>

			<div class="columna c-6 small-12 slider cycle-slideshow"
				data-cycle-fx="scrollHorz"
				data-cycle-swipe="true"
			>
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">

				<div class="cycle-pager"></div>

			</div><!-- slider -->

		</div><!-- width -->

	</section>

	<section class="empresa tecnologias-en-habilitadoshin">

		<div class="cover belmont full">
			<img class="block center columna c-5" src="<?php echo THEMEPATH; ?>images/tecnologias-en-habilitadoshin-blanco.png" alt="">
		</div><!-- cover -->

		<div class="width clearfix">

			<div class="columna c-6 small-12">
				<h4>Quiero billete</h4>
				<p>Diviserunt naturam hominis in animum et corpus. Quae cum dixisset paulumque institisset, Quid est? Haec quo modo conveniant, non sane intellego. Atque haec coniunctio confusioque virtutum tamen a philosophis ratione quadam distinguitur. </p>
			</div>

			<div class="columna c-6 small-12 slider cycle-slideshow"
				data-cycle-fx="scrollHorz"
				data-cycle-swipe="true"
			>
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slider.jpg" alt="">

				<div class="cycle-pager"></div>

			</div><!-- slider -->

		</div><!-- width -->

	</section>


<?php get_footer(); ?>