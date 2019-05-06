<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dgc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'hook_before_html' ); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dgc' ); ?></a>

	<?php do_action( 'hook_before_header' ); ?>
	<header id="masthead" class="site-header">
		<?php do_action( 'hook_top_header' ); ?>
		<div class="header-menu container">
			<div class="row">
					<div class="col-8 col-md-3 site-branding">
						<img src="https://www.destinationgoldcoast.com/Portals/0/Skins/DGC/assets/images/logo-dgc.svg" alt="Destination Gold Coast" width="190">
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="col-4 col-md-9 main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'dgc' ); ?></button>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav><!-- #site-navigation -->
			</div>
		</div>
		<?php do_action( 'hook_bottom_header' ); ?>
	</header><!-- #masthead -->
	<?php do_action( 'hook_after_header' ); ?>

	<?php do_action( 'hook_before_content' ); ?>
	<div id="content" class="site-content">
		<?php do_action( 'hook_top_content' ); ?>
		<div class="container">
			<div class="row">
