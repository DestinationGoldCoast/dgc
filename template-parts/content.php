<?php
/**
 * Template part for displaying posts
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
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
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

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dgc' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dgc' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php do_action( 'hook_before_page_footer' ); ?>
	<footer class="entry-footer">
		<?php do_action( 'hook_top_page_footer' ); ?>

		<?php dgc_entry_footer(); ?>

		<?php do_action( 'hook_bottom_page_footer' ); ?>
	</footer><!-- .entry-footer -->
	<?php do_action( 'hook_after_page_footer' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
