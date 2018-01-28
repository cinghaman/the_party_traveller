<?php
/**
 *    The template for dispalying the footer.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php

if ( current_user_can( 'edit_theme_options' ) ) {
	$footer_copyright = get_theme_mod( 'illdy_footer_copyright', sprintf( __( '&copy; Copyright %s. All Rights Reserved.', 'illdy' ), date( 'Y' ) ) );
} else {
	$footer_copyright = get_theme_mod( 'illdy_footer_copyright' );
}
?>
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12"><div class="mj-embedded mj-embed-shadow mj-horizontal" style="box-sizing: border-box; display: inline-block; font-family: Ubuntu, Helvetica; line-height: normal; text-align: left; background-color: transparent; box-shadow: none; padding: 20px; height: 234px; width: 100%;">
    <div class="mj-embedded-content" style="padding: 15px; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 20px;">
        <div class="mj-embedded-header" style="box-sizing: border-box; font-size: 26px; max-width: 100%; width: auto; color: rgb(89, 91, 97);">
            <div class="mj-embedded-title" style="box-sizing: border-box; text-align: center;">Subscribe to our newsletter</div>
        </div>
        <div class="mj-embedded-body" style="box-sizing: border-box; color: rgb(176, 179, 184); font-size: 16px; padding: 30px 0px; text-align: center;" spellcheck="false" data-gramm_id="ab30dfc8-c2a5-9e97-0f04-4b6757ce35c2" data-gramm="true" data-gramm_editor="true">Join our mailing list to receive updates from your party traveller guy</div>
        <div class="mj-embedded-footer" style="box-sizing: border-box;">
            <div class="mj-form" style="box-sizing: border-box; display: table; width: 100%;">
                <div class="w-preview-field-table" style="box-sizing: border-box; display: block; width: 100%;">
                    <div class="w-preview-fields-content-row" style="box-sizing: border-box; display: flex; flex-direction: row;">
                        <div class="w-preview-fields-content-cell" style="box-sizing: border-box; vertical-align: top; flex-grow: 1; padding: 0px 10px 10px 0px;">
                            <input class="w-preview-fields-content-cell-field-email" type="email" placeholder="Email Address" name="w-field-field-20305-109062-420262-email" required="required" style="box-sizing: border-box; font-family: Ubuntu, Helvetica; font-size: 14px; height: 36px; padding-left: 17px; margin-right: 20px; border-radius: 3px; border: 2px solid rgb(225, 225, 230); width: 100%;">
                        </div><div class="w-preview-fields-content-cell" style="box-sizing: border-box; vertical-align: top; flex-grow: 1; padding: 0px 10px 10px 0px;">
                            <input class="w-preview-fields-content-cell-field-2" type="text" placeholder="name" name="w-field-field-20305-109062-420262-2" style="box-sizing: border-box; font-family: Ubuntu, Helvetica; font-size: 14px; height: 36px; padding-left: 17px; margin-right: 20px; border-radius: 3px; border: 2px solid rgb(225, 225, 230); width: 100%;">
                        </div>
                        <div class="mj-form-button" style="box-sizing: border-box; font-family: Ubuntu, Helvetica; text-align: center; vertical-align: middle; flex-grow: 1;">
                            <div class="mj-subscribe-button" style="box-sizing: border-box; width: auto; height: 36px; font-family: Ubuntu, Helvetica; font-size: 13px; text-align: center; line-height: 36px; color: rgb(89, 91, 97); border-radius: 3px; max-width: 100%; white-space: nowrap; background-color: rgb(225, 225, 230); padding: 0px 10px;">
                                <div class="mj-subscribe-button-content" style="box-sizing: border-box; display: inline-block;"><b>SUBSCRIBE NOW!</b></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
			
			
			</div>
			<?php
			$the_widget_args = array(
				'before_widget' => '<div class="widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h5>',
				'after_title'   => '</h5></div>',
			);
			?>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-1' ) ) :
					dynamic_sidebar( 'footer-sidebar-1' );
				elseif ( current_user_can( 'edit_theme_options' ) ) :
					the_widget( 'WP_Widget_Text', 'title=' . __( 'Products', 'illdy' ) . '&text=<ul><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Our work', 'illdy' ) . '">' . __( 'Our work', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Club', 'illdy' ) . '">' . __( 'Club', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'News', 'illdy' ) . '">' . __( 'News', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Announcement', 'illdy' ) . '">' . __( 'Announcement', 'illdy' ) . '</a></li></ul>', $the_widget_args );
				endif;
				?>
			</div><!--/.col-sm-3-->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-2' ) ) :
					dynamic_sidebar( 'footer-sidebar-2' );
				elseif ( current_user_can( 'edit_theme_options' ) ) :
					the_widget( 'WP_Widget_Text', 'title=' . __( 'Information', 'illdy' ) . '&text=<ul><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Pricing', 'illdy' ) . '">' . __( 'Pricing', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Terms', 'illdy' ) . '">' . __( 'Terms', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Affiliates', 'illdy' ) . '">' . __( 'Affiliates', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Blog', 'illdy' ) . '">' . __( 'Blog', 'illdy' ) . '</a></li></ul>', $the_widget_args );
				endif;
				?>
			</div><!--/.col-sm-3-->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-3' ) ) :
					dynamic_sidebar( 'footer-sidebar-3' );
				elseif ( current_user_can( 'edit_theme_options' ) ) :
					the_widget( 'WP_Widget_Text', 'title=' . __( 'Support', 'illdy' ) . '&text=<ul><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Documentation', 'illdy' ) . '">' . __( 'Documentation', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'FAQs', 'illdy' ) . '">' . __( 'FAQs', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Forums', 'illdy' ) . '">' . __( 'Forums', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Contact', 'illdy' ) . '">' . __( 'Contact', 'illdy' ) . '</a></li></ul>', $the_widget_args );
				endif;
				?>
			</div><!--/.col-sm-3-->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-4' ) ) :
					dynamic_sidebar( 'footer-sidebar-4' );
				elseif ( current_user_can( 'edit_theme_options' ) ) :
					the_widget( 'WP_Widget_Text', 'title=' . __( 'Support', 'illdy' ) . '&text=<ul><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Documentation', 'illdy' ) . '">' . __( 'Documentation', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'FAQs', 'illdy' ) . '">' . __( 'FAQs', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Forums', 'illdy' ) . '">' . __( 'Forums', 'illdy' ) . '</a></li><li><a href="' . esc_url( '#' ) . '" title="' . __( 'Contact', 'illdy' ) . '">' . __( 'Contact', 'illdy' ) . '</a></li></ul>', $the_widget_args );
				endif;
				?>
			</div><!--/.col-sm-3-->
		</div><!--/.row-->
	</div><!--/.container-->
	<div class="bottom-footer">
		<div class="container">
			<p class="copyright">
				<span class="bottom-copyright" data-customizer="copyright-credit"><?php echo illdy_sanitize_html( $footer_copyright ); ?></span>
			</p>
		</div>
	</div>
</footer><!--/#footer-->

<?php if ( 'page' == get_option( 'show_on_front' ) && is_front_page() && get_theme_mod( 'illdy_go_to_top', false ) ) : ?>
	<a href="#" class="illdy-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<?php endif ?>

<?php wp_footer(); ?>
</body>
</html>
