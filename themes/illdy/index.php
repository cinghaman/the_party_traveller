<?php
/**
 *    The template for dispalying the index.
 *
 * @package    WordPress
 * @subpackage illdy

 */
?>
<?php get_header(); ?>
	<div class="container">
	<div class="row">

		<?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
		<div class="col-sm-8">
			<?php } else { ?>
			<div class="col-sm-8 col-sm-offset-2">
				<?php } ?>

				<section id="blog">
					<?php do_action( 'illdy_above_content_after_header' ); ?>
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
						wp_reset_query();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
					<?php do_action( 'illdy_after_content_above_footer' ); ?>
				</section><!--/#blog-->
				<ins class="adsbygoogle"
			 style="display:block; text-align:center;"
			 data-ad-layout="in-article"
			 data-ad-format="fluid"
			 data-ad-client="ca-pub-4776700310744999"
			 data-ad-slot="6711656314"></ins>
		<script>
			 (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
			</div><!--/.col-sm-7/12-->

			<?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
				<div class="col-sm-4">
					<div id="sidebar">
						<?php dynamic_sidebar( 'blog-sidebar' ); ?>
					</div>
				</div>
			<?php } ?>



		</div><!--/.row-->
	</div><!--/.container-->
<?php get_footer(); ?>
