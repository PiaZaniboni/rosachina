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
<div id="entrevistas" class="notas-home">
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

	<!-- ///// Entrevista  //// -->
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
	<!-- ///////// -->
	<?php }
	}

	// Restore original post data.
	wp_reset_postdata();

	?>
</div>

</div>

<?php
get_footer();
