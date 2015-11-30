<?php get_header(); ?>

  <section>
    <div class='container'>
      <div class="row">
        <div class='col-sm-2'></div>
        <div class='col-sm-8'>
          <h4 class="text-center">Tag: <?php single_tag_title( '', true ); ?> </h4>
        </div>
        <div class='col-sm-8'></div>
      </div>
    </div>
  </section>
  <div class='container'>
    <div class="row">
      <div class='col-sm-2'></div>
      <div class='col-sm-8'>
        <hr/>
      </div>
      <div class='col-sm-8'></div>
    </div>
  </div>


<?php get_template_part( 'content', 'post_list' ); ?>



<?php get_footer(); ?>