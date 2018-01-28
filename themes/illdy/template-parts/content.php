<?php
/**
 *    The template for dispalying the content.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="blog-post-title"><?php the_title(); ?></a>
	<?php do_action( 'illdy_archive_meta_content' ); ?>
	<div class="blog-post-entry">
		<?php the_content(); ?>
	</div><!--/.blog-post-entry-->
	<!-- <a href="<?php the_permalink(); ?>" title="<?php _e( 'Read more', 'illdy' ); ?>" class="blog-post-button"><?php _e( 'Read more', 'illdy' ); ?></a> -->
</article><!--/#post-<?php the_ID(); ?>.blog-post-->
