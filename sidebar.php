<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dgc
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php do_action( 'hook_before_aside' ); ?>
<aside id="secondary" class="col-sm-12 col-md-4 widget-area">
	<?php do_action( 'hook_top_aside' ); ?>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<?php do_action( 'hook_bottom_aside' ); ?>
</aside><!-- #secondary -->
<?php do_action( 'hook_after_aside' ); ?>
