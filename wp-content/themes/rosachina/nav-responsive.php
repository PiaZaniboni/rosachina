<div class="nav-responsive">
  <a href="javascript:void(0);" class="btn-mobile-close"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-close.svg"></a>
  <nav class="main-mobile" role="navigation">
    <?php
      wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
        'after' => '<span></span>',
      ) );
    ?>
  </nav><!-- #site-navigation -->

  <div class="redes-responsive">
    <a class="btn-instagram" href="https://www.instagram.com/rosachinamag/"> <img class="svg icon-footer" src="<?php echo get_template_directory_uri(); ?>/img/icon-instagram.svg"> </a>
    <a class="btn-facebook" href="https://www.facebook.com/Rosachina-151319665439539"> <img class="svg icon-footer" src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.svg"> </a>
  </div>

</div>
