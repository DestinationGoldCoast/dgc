<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dgc
 */

get_header();
?>

	<div id="primary" class="col content-area">
		<?php do_action( 'hook_before_page_main' ); ?>
		<main id="main" class="site-main">
			<?php do_action( 'hook_top_page_main' ); ?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<?php do_action( 'hook_bottom_page_main' ); ?>
		</main><!-- #main -->
		<?php do_action( 'hook_after_page_main' ); ?>
	</div><!-- #primary -->

<?php
get_footer();
