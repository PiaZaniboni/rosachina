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
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<?php include 'nav-responsive.php';?>
	<div class="site-branding-2">

		<a class="btn-menu-mobile nav-index-responsive" href="javascript:void(0);" style="display:none;">
			<img class="svg icon-bar"  src="<?php echo get_template_directory_uri(); ?>/img/icon-bar.svg" alt="rosachina">
		</a>

		<div class="caja-home">
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

			<div class="frase-home">
				<p>"Nada hay más elevado, más precioso, más sublime que el arte, el cual permite, gracias
				al esplendor que produce, soportar la fealdad del mundo y la mediocridad de la vida"</p>
				<span>Lipovetsky</span>
			</div>

			<header id="masthead" class="site-header" role="banner">
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
		</div>
	</div><!-- .site-branding -->



	<div id="content" class="site-content">

	<div id="primary" class="content-area">

		<div id="entrevistas" class="notas-home">
			<?php if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>

				<div class="post-portada">
					<a href="<?php echo get_permalink( $post->ID ); ?>">
						<?php
						$foto = CFS()->get( 'foto-portada' );
						if ( $foto != '' ){ ?>
							<div class="imagen" style ="background-image:url('<?php echo $foto ?>')"></div>
						<?php }else{ ?>
							<div class="imagen" style ="background-image:url('<?php the_post_thumbnail_url( 'large' ); ?>')"></div>
						<?php } ?>

						<div class="caja-texto-inicio">
							<h3> <?php the_title() ?> </h3>
						</div>
					</a>
				</div>
				<?php endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif; ?>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
