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
</div><!-- #page -->
<?php do_action( 'hook_before_footer' ); ?>
<footer id="colophon" class="site-footer">
	<?php do_action( 'hook_top_footer' ); ?>
	<div class="container">
		<div class="row site-info">
			<div class="col-sm-6 copyright">
				<p>
				<?php
				printf( esc_html__( 'Copyright %s Destination Gold Coast', 'dgc' ), date( 'Y' ) );
				?>
				</p>
			</div>
			<div class="col-sm-6 footer-widget">
				<?php
				if ( is_active_sidebar( 'site-info-menu' ) ) :
					dynamic_sidebar( 'site-info-menu' );
				endif;
				?>
			</div>
		</div><!-- .site-info -->
	</div>
	<?php do_action( 'hook_bottom_footer' ); ?>
</footer><!-- #colophon -->
<?php do_action( 'hook_after_footer' ); ?>


<?php wp_footer(); ?>

<?php do_action( 'hook_after_html' ); ?>

</body>
</html>
