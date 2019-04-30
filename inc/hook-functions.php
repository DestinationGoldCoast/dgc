<?php
/**
 * Functions which hook into the theme hook
 *
 * @package dgc
 */
 /**
 * Add the pre-header to hook_top_header().
 */
function dgc_add_pre_header_html() {
	?>
	<div class="pre-header">
		<div class="container">
			<?php
			if ( is_active_sidebar( 'pre-header-menu' ) ) :
				dynamic_sidebar( 'pre-header-menu' );
			endif;
			?>
		</div>
	</div>
	<?php
}
add_action( 'hook_top_header', 'dgc_add_pre_header_html' );
