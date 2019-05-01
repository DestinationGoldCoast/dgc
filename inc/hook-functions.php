<?php
/**
 * Functions which hook into the theme hook
 *
 * @package dgc
 */
 /**
 * Add the pre-header to hook_top_header().
 */
function dgc_add_other_site_html() {
	?>
	<div class="other-sites">
		<a id="other-site-overlay" class="other-site-overlay" href="#"></a>
		<div id="other-site-modal" class="other-site-modal">
			<p>the html needed can be put in here</p>
		</div>
		<button id="other-site-button" class="other-site-nav">View other Gold Coast sites</button>
	</div>
	<?php
}
add_action( 'hook_before_html', 'dgc_add_other_site_html' );

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
