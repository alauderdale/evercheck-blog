<section class="no-padding-bottom">
  <div class='container'>
    <div class="row">
      <div class='col-sm-2'></div>
      <div class='col-sm-8'>
        <h4 class="text-center"> 
          <?php
          if (isset($catType)) {
            echo $catType;
          } else {
            echo 'Topic: not found';
          }
          ?>
        </h4>
        <div class="double-padding-bottom"></div>
        <hr/>
      </div>
      <div class='col-sm-8'></div>
    </div>
  </div>
</section>