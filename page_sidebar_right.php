<?php
/**
 * Template Name: Sidebar Right
 *
 * This is the template that displays with a sidebar positioned on the right.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dgc
 */

get_header();
?>

	<div id="primary" class="col-sm-12 col-md-8 content-area">
		<?php do_action( 'hook_before_page_main' ); ?>
			<main id="main" class="site-main">
				<?php do_action( 'hook_top_page_main' ); ?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		<?php do_action( 'hook_bottom_page_main' ); ?>
		</main><!-- #main -->
		<?php do_action( 'hook_after_page_main' ); ?>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
