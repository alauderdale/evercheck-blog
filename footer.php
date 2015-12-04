<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>

<!-- end main content -->
<div class='container'>
  <hr class='no-margin-top'>
</div>
<footer class='global-footer text-center-sm'>
  <section>
    <div class='container'>
      <div class='row'>
        <div class='col-sm-3 col-xs-12'>
          <div class='logo-container margin-bottom'>
            <a href='/'>
              <img class='half-margin-bottom' src='<?php bloginfo('template_url'); ?>/images/logo_footer@2x.png' width='137px'>
            </a>
            <p class='copyright small'>
              © Evercheck 2014
              <br>
              1-888-404-7996
              <br>
              Support@evercheck.com
            </p>
          </div>
        </div>
        <div class='col-sm-2 margin-bottom'>
          <p class='small bold-font-name'>
            About
          </p>
          <?php wp_nav_menu( array( 
            'theme_location' => 'menu-about', 
            'container' => false, 
            'menu_class' => 'list-unstyled footer-main-nav',
            'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
          )); ?>
        </div>
        <div class='col-sm-2 margin-bottom'>
          <p class='small bold-font-name'>
            Features
          </p>
          <?php wp_nav_menu( array( 
            'theme_location' => 'menu-features', 
            'container' => false, 
            'menu_class' => 'list-unstyled footer-main-nav',
            'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
          )); ?>
        </div>
        <div class='col-sm-2 margin-bottom'>
          <p class='small bold-font-name'>
            Learn More
          </p>
          <?php wp_nav_menu( array( 
            'theme_location' => 'menu-more', 
            'container' => false, 
            'menu_class' => 'list-unstyled footer-main-nav',
            'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
          )); ?>
        </div>
        <div class='col-sm-2 margin-bottom'>
          <p class='small bold-font-name'>
            Get in Touch
          </p>
          <?php wp_nav_menu( array( 
            'theme_location' => 'menu-contact', 
            'container' => false, 
            'menu_class' => 'list-unstyled footer-main-nav',
            'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
          )); ?>
        </div>
      </div>
    </div>
  </section>
</footer>
<script>
  transformicons.add('.tcon')
</script>



<?php wp_footer(); ?>

</body>
</html>
