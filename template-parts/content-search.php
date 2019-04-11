<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dgc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php do_action( 'hook_before_page_header' ); ?>
	<header class="entry-header">
		<?php do_action( 'hook_top_page_header' ); ?>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			dgc_posted_on();
			dgc_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php do_action( 'hook_bottom_page_header' ); ?>
	</header><!-- .entry-header -->
	<?php do_action( 'hook_after_page_header' ); ?>

	<?php dgc_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php dgc_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
