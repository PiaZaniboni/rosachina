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


<?php $fields = CFS()->get( 'perfil' ); $count = 0;
foreach ( $fields as $field ) {?>

<?php $fondoColor = ''; $claseAlineacion = ''; $idCaja = '';

	if ( $count == 0  ){
		$fondoColor = '#DBDCDE';
		$idCaja = 'caja-0';
	}else if ( $count == 1 ){
		$fondoColor = '#913944';
		$idCaja = 'caja-1';
	}else if ( $count == 2 ){
		$fondoColor = '#A7A9AB';
		$idCaja = 'caja-2';
	}else if ( $count == 3 ){
		$fondoColor = '#DBDCDE';
		$idCaja = 'caja-3';
	}

	if ( $count%2 == 0 ) {
		$claseAlineacion = "align-right";
	}else {
		$claseAlineacion = "align-left";
	}

?>


<div class="caja-perfil <?php echo $claseAlineacion; ?>" style="background-color: <?php echo $fondoColor ; ?> ;">
	<div class="cajita-texto  <?php echo $idCaja; ?>">
		<h2> <?php  echo $field['nombre']; ?></h2>
		<h3><?php  echo $field['frase']; ?></h3>
		<p><?php  echo $field['biografia']; ?></p>
	</div>
	<div class="img-perfil"><img src="<?php $thumb = wp_get_attachment_image_src( $field['foto'], 'large' );$url = $thumb['0']; echo $url; ?>"></div>
</div>
<?php $count++; }?>

<img src="<?php echo get_template_directory_uri(); ?>/img/cuadraditos-perfil2.png" class="img-perfil-cuadraditos2">
<img src="<?php echo get_template_directory_uri(); ?>/img/cuadraditos-perfil2.png" class="img-perfil-cuadraditos">




<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>



<?php
get_footer();
