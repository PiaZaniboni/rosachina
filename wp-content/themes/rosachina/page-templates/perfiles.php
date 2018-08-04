<?php /* Template Name: Perfiles */ ?>

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

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<p> <?php the_content(); ?> </p>


<?php $fields = CFS()->get( 'perfil' ); ;
foreach ( $fields as $field ) {?>

<div class="caja-perfil">
	<div class="img-perfil"><img src="<?php $thumb = wp_get_attachment_image_src( $field['foto'], 'large' );$url = $thumb['0']; echo $url; ?>"></div>
	<div class="cajita-texto ">
		<h2> <?php  echo $field['nombre']; ?></h2>
		<p><?php  echo $field['biografia']; ?></p>
	</div>

</div>
<?php }?>

<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>



<?php
get_footer();
