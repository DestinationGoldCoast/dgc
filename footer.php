<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dgc
 */

?>
			</div><!-- .row -->
		<div><!-- .container -->
		<?php do_action( 'hook_bottom_content' ); ?>
	</div><!-- #content -->
	<?php do_action( 'hook_after_content' ); ?>

	<?php do_action( 'hook_before_footer' ); ?>
	<footer id="colophon" class="site-footer">
		<?php do_action( 'hook_top_footer' ); ?>
		<div class="container">
			<div class="row">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dgc' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'dgc' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'dgc' ), 'dgc', '<a href="http://underscores.me/">Underscores.me</a>' );
						?>
				</div><!-- .site-info -->
			</div>
		</div>
		<?php do_action( 'hook_bottom_footer' ); ?>
	</footer><!-- #colophon -->
	<?php do_action( 'hook_after_footer' ); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

<?php do_action( 'hook_after_html' ); ?>

</body>
</html>
