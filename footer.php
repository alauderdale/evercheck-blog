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
          <ul class='list-unstyled footer-main-nav'>
            <li>
              <a href='/company'>
                Company
              </a>
            </li>
            <li>
              <a href='#'>
                Blog
              </a>
            </li>
            <li>
              <a href='/jobs'>
                Jobs
              </a>
            </li>
            <li>
              <a href='/pricing#faqs'>
                FAQs
              </a>
            </li>
          </ul>
        </div>
        <div class='col-sm-2 margin-bottom'>
          <p class='small bold-font-name'>
            Features
          </p>
          <ul class='list-unstyled footer-main-nav'>
            <li>
              <a href='/solution'>
                Solution
              </a>
            </li>
            <li>
              <a href='/solution/monitor'>
                Monitor
              </a>
            </li>
            <li>
              <a href='/solution/collaborate'>
                Collaborate
              </a>
            </li>
            <li>
              <a href='/solution/integrate'>
                Integrate
              </a>
            </li>
            <li>
              <a href='/solution/manage'>
                Manage
              </a>
            </li>
          </ul>
        </div>
        <div class='col-sm-2 margin-bottom'>
          <p class='small bold-font-name'>
            Learn More
          </p>
          <ul class='list-unstyled footer-main-nav'>
            <li>
              <a href='/pricing'>
                Pricing
              </a>
            </li>
            <li>
              <a href='/security'>
                Security
              </a>
            </li>
            <li>
              <a href='/demo'>
                Schedule a Demo
              </a>
            </li>
            <li>
              <a href='/privacy'>
                Privacy Policy
              </a>
            </li>
            <li>
              <a href='#'>
                Download the App
              </a>
            </li>
          </ul>
        </div>
        <div class='col-sm-2 margin-bottom'>
          <p class='small bold-font-name'>
            Get in Touch
          </p>
          <ul class='list-unstyled footer-main-nav'>
            <li>
              <a href='/contact'>
                Contact Us
              </a>
            </li>
          </ul>
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
