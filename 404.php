<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dgc
 */

get_header();
?>

	<div id="primary" class="col-sm-12 col-md-8 content-area">
		<?php do_action( 'hook_before_page_main' ); ?>
			<main id="main" class="site-main">
			<?php do_action( 'hook_top_page_main' ); ?>

			<section class="error-404 not-found">
				<?php do_action( 'hook_before_page_header' ); ?>
				<header class="page-header">
					<?php do_action( 'hook_top_page_header' ); ?>
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dgc' ); ?></h1>
					<?php do_action( 'hook_bottom_page_header' ); ?>
				</header><!-- .page-header -->
				<?php do_action( 'hook_after_page_header' ); ?>

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dgc' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'dgc' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$dgc_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'dgc' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$dgc_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

			<?php do_action( 'hook_bottom_page_main' ); ?>
		</main><!-- #main -->
		<?php do_action( 'hook_after_page_main' ); ?>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
