<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rosachina
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<meta property="og:image" content="http://www.rosachinamag.com/wp-content/themes/rosachina/screenshot.png"/>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<?php include 'nav-responsive.php';?>
	<!-- <div class="site-branding">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">  <img class="logo-desktop" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="rosachina">
			<img class="logo-mobile" style="display:none;" src="<?php echo get_template_directory_uri(); ?>/img/logo-principal.png" alt="rosachina">
		</a>
	</div>.site-branding -->
	<div class="caja-marca">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php
			if ( wp_is_mobile() ) {
				/* Display and echo mobile specific stuff here */
			}else{ ?>
				<video autoplay muted loop id="video">
				  <source src="<?php echo get_template_directory_uri(); ?>/img/video-fondo.mp4" type="video/mp4">
				</video>
			<?php }
			?>
			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/nuevo-logo.png" alt="rosachina">
		</a>
	</div>

	<header id="masthead" class="site-header" role="banner">
		<a class="btn-menu-mobile" href="javascript:void(0);" style="display:none;">
			<img class="icon-bar"  src="<?php echo get_template_directory_uri(); ?>/img/icon-bar.svg" alt="rosachina">
		</a>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'after' => '<span></span>',
				) );
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
