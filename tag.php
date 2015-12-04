<?php get_header(); ?>




  <section class="no-padding-bottom">
    <div class='container'>
      <div class="row">
        <div class='col-sm-2'></div>
        <div class='col-sm-8'>
          <h4 class="text-center"> <?php single_cat_title('Tag: '); ?> </h4>
          <div class="double-padding-bottom"></div>
          <hr/>
        </div>
        <div class='col-sm-8'></div>
      </div>
    </div>
  </section>




<?php get_template_part( 'content', 'post_list' ); ?>



<?php get_footer(); ?>