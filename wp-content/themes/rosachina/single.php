<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rosachina
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
		while ( have_posts() ) : the_post(); ?>

		<div class="contenedor-nota">

			<!--<div class="encabezado-nota set-height">

			</div>-->

			<div class="caja-texto-nota">
				<h1><?php the_title() ?></h1>
			</div>
			<img class="encabezado-img" src="<?php the_post_thumbnail_url( 'large' ); ?>">


		<?php $fields = CFS()->get( 'linea-tiempo' );
		if ($fields != ''){ ?>
			<div class="maqueta-caja-carousel-linea-tiempo">
					<div class="caja-carousel-linea-tiempo">
						<div class="carousel-linea-tienpo">

									<?php foreach ( $fields as $field ) { ?>
											<div>
												<div class="item-contenido">
													<h2><?php echo $field['anio']; ?></h2>
													<p><?php echo $field['texto-breve']; ?></p>
											</div>
										</div>
									<?php } ?>

						</div>
					</div>
			</div>
		<?php }?>

			<div class="caja-contenido-blanco">

				<div class="caja-contenido">
							<?php the_content(); ?>
				</div>

			</div>

			<?php $fields = CFS()->get( 'datos-color' );
				if ($fields != '') {?>
				<div class="caja-preguntas">

					<?php foreach ( $fields as $field ) {  ?>
					<div class="caja-conjunto">

						<span><?php echo $field['icono_fondo']; ?></span>
						<div class="caja-pregunta"><?php echo $field['texto']; ?></div>

					</div>
					<?php } ?>

				</div>
			<?php } ?>

			<?php $fields = CFS()->get( 'galeria' );
				if ($fields != '') {?>
				<div class="galeria">

					<?php foreach ( $fields as $field ) {  ?>
					<div class="imagen" style="background-image:url('<?php echo $field['imagen']; ?>')">

					</div>
					<?php } ?>

				</div>
			<?php } ?>

			<h5 class="titulo-video arriba"><?php echo CFS()->get( 'titulo_video' ); ?></h5>
			<div class="caja-video">
				<?php $video = CFS()->get( 'video' );
					if( $video !=  '' ){
						echo $video;
					}
				?>
			</div>
			<h5 class="titulo-video abajo"><?php echo CFS()->get( 'abajo_video' ); ?></h5>

			<div class="caja-aclaracion">
				<?php echo CFS()->get( 'aclaracion' ); ?>
			</div>





		</div>

			<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
