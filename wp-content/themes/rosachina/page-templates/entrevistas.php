<?php /* Template Name: Entrevistas */ ?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rosachina
 */

get_header(); ?>

	<?php

	$args = array(
		'post_type' => 'post'
	);

	// Custom query.
	$query = new WP_Query( $args );

	// Check that we have query results.
	if ( $query->have_posts() ) {

	// Start looping over the query results.
	while ( $query->have_posts() ) {

		$query->the_post(); ?>

	<!-- ///// PROPIEDAD  //// -->
	<div class="post-portada set-height">
		<a href="<?php echo get_permalink( $post->ID ); ?>">
			<img src="<?php the_post_thumbnail_url( 'large' ); ?>">
			<div class="caja-texto-inicio">
				<!--<h2>Entrevista a</h2>-->
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
	<!-- ///////// -->
	<?php }
	}

	// Restore original post data.
	wp_reset_postdata();

	?>


</div>

<?php
get_footer();
