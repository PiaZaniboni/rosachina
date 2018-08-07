<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rosachina
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="nav-footer nav-footer2">
				<div class="footer-redes">
						<a class="btn-mensaje" href="http://www.rosachinamag.com/contacto/"> <img class="svg icon-footer" src="<?php echo get_template_directory_uri(); ?>/img/icon-mensaje.svg"> </a>
						<a class="btn-facebook" href="https://www.facebook.com/Rosachina-151319665439539" target="_blank" > <img class="svg icon-footer" src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.svg"> </a>
						<a class="btn-instagram" href="https://www.instagram.com/rosachinamag/" target="_blank"> <img class="svg icon-footer" src="<?php echo get_template_directory_uri(); ?>/img/icon-instagram.svg"> </a>
						</div>
		</div>




		<div class="site-info">® 2018. La Plata, Buenos Aires</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript">
                    jQuery(document).ready(function() {
                        /*
                         * Replace all SVG images with inline SVG
                         */
                            jQuery('img.svg').each(function(){
                                var $img = jQuery(this);
                                var imgID = $img.attr('id');
                                var imgClass = $img.attr('class');
                                var imgURL = $img.attr('src');

                                jQuery.get(imgURL, function(data) {
                                    // Get the SVG tag, ignore the rest
                                    var $svg = jQuery(data).find('svg');

                                    // Add replaced image's ID to the new SVG
                                    if(typeof imgID !== 'undefined') {
                                        $svg = $svg.attr('id', imgID);
                                    }
                                    // Add replaced image's classes to the new SVG
                                    if(typeof imgClass !== 'undefined') {
                                        $svg = $svg.attr('class', imgClass+' replaced-svg');
                                    }

                                    // Remove any invalid XML tags as per http://validator.w3.org
                                    $svg = $svg.removeAttr('xmlns:a');

                                    // Replace image with new SVG
                                    $img.replaceWith($svg);
                                });

                            });
                    });
    </script>

<?php wp_footer(); ?>

</body>
</html>
