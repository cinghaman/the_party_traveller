<?php
/**
 *    The template for displaying the single content.
 *
 * @package    WordPress
 * @subpackage illdy
 */

$jumbotron_single_image  = get_theme_mod( 'illdy_jumbotron_enable_featured_image', true );

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<?php if ( has_post_thumbnail() && true != $jumbotron_single_image ) { ?>
		<div class="blog-post-image">
			<?php the_post_thumbnail( 'illdy-blog-list', array( 'alt' => get_the_title() ) ); ?>
		</div><!--/.blog-post-image-->
	<?php } ?>

	<?php do_action( 'illdy_single_entry_meta' ); ?>
	<div class="blog-post-entry markup-format">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="link-pages">' . __( 'Pages:', 'illdy' ),
			'after'  => '</div><!--/.link-pages-->',
		) );
		?>
	</div><!--/.blog-post-entry.markup-format-->
	<?php do_action( 'illdy_single_after_content' ); ?>
	<!-- party_traveller_02_leaderboard -->
	<ins class="adsbygoogle"
		 style="display:inline-block;width:728px;height:90px"
		 data-ad-client="ca-pub-4776700310744999"
		 data-ad-slot="1683169841"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	<?php
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
	?>
</article><!--/#post-<?php the_ID(); ?>.blog-post-->
