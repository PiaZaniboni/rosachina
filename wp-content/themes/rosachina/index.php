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
	<div class="site-branding-2 set-height">

		<a class="btn-menu-mobile nav-index-responsive" href="javascript:void(0);" style="display:none;">
			<img class="svg icon-bar"  src="<?php echo get_template_directory_uri(); ?>/img/icon-bar.svg" alt="rosachina">
		</a>

		<div class="caja-home">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/nuevo-logo.png" alt="rosachina"></a>

			<div class="frase-home">
				<p>"Nada hay más elevado, más precioso, más sublime que el arte, el cual permite, gracias
				al esplendor que produce, soportar la fealdad del mundo y la mediocridad de la vida"</p>
				<span>Lipovetsky</span>
			</div>

			<div class="nav-footer nav-home">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'after' => '<span></span>',
				) );
			?>
			</div>
		</div>
	</div><!-- .site-branding -->

	<!--	<div class="nav-redes">
			<a class="btn-facebook" href="www.facebook.com" target="_blank" > <img src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.svg"> </a>
			<a class="btn-instagram" href="www.instagram.com" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/icon-instagram.svg"> </a>
		</div> -->


	<div id="content" class="site-content">

	<div id="primary" class="content-area">

		<div id="entrevistas" class="slider-galeria">
			<?php if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>

				<div class="post-portada set-height">
					<a href="<?php echo get_permalink( $post->ID ); ?>">
						<img src="<?php the_post_thumbnail_url( 'large' ); ?>">
						<div class="caja-texto-inicio">
							<h3> <?php the_title() ?> </h3>

							<?php
							$frase = CFS()->get( 'frase' );
							if ( $frase != ' ' ){ ?>
								<h5><?php echo $frase; ?> </h5>
							<?php } ?>


						</div>
					</a>
					<a class="btn-leer-mas" href="<?php echo get_permalink( $post->ID ); ?>">Leer m&aacute;s</a>
				</div>
				<?php endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif; ?>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
