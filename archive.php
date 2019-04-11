<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dgc
 */

get_header();
?>

	<div id="primary" class="col-sm-12 col-md-8 content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php do_action( 'hook_before_page_header' ); ?>
			<header class="page-header">
				<?php do_action( 'hook_top_page_header' ); ?>
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
				<?php do_action( 'hook_bottom_page_header' ); ?>
			</header><!-- .page-header -->
			<?php do_action( 'hook_after_page_header' ); ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
