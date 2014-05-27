<?php get_header(); ?>

	<style>
		ul.page-numbers {
	margin: 20px 0 10px;
	width: 100%;
	padding: 0;
	font-size: 12px;
	line-height: normal;
	clear: both;
	float: left;
	}
    
    ul.page-numbers li {
    	float: left;
    	}

ul.page-numbers a,
ul.page-numbers span {
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	background: -webkit-gradient(linear, left top, left bottom, from(#E4E3E3), to(#FFFFFF));
	background: -moz-linear-gradient(top,  #E4E3E3,  #FFFFFF);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#E4E3E3', endColorstr='#FFFFFF');
	padding: 3px 4px 2px 4px; 
	margin: 2px;
	text-decoration: none;
	border: 1px solid #ccc;
	color: #666;
	}

ul.page-numbers a:hover,
ul.page-numbers span.current {	
	border: 1px solid #666;
	color: #444;
	}
	</style>

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

			<h2 class="text-center" >Noticias</h2>

			<?php
			global $wp_query;

			$type = 'noticias';
			$noticiasArgs = array(
				'category_name'		=> $type,
				'posts_per_page'	=> 3
			);

			$noticiasQuery = new WP_Query($noticiasArgs);
			if($noticiasQuery -> have_posts()) : while($noticiasQuery -> have_posts()) : 
					$noticiasQuery ->the_post(); 

					if ( has_post_thumbnail() ) {
						$imgUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ) ;
					}
					?>

					<div class="columna c-4 medium-6 small-12 post big">
						<a href="<?php the_permalink() ?>"><img src="<?php echo $imgUrl[0]?>" alt=""></a>
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<p><?php the_excerpt(); ?></p>
					</div><!-- post -->

				<?php
				

				$big = 999999999; // need an unlikely integer

				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
				) );
				?>
	

				<?php endwhile; endif; wp_reset_query(); 
				
			?>

		</section>

	</div><!-- width -->

<?php get_footer(); ?>