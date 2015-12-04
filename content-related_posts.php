<?php
	//for use in the loop, list 5 post titles related to first tag on current post
	$args=array(
	'post__not_in' => array($post->ID),
	'posts_per_page'=>3,
	'orderby' => 'asc'
	);
	$my_query = new WP_Query($args); ?>
<?php

if( $my_query->have_posts() ) { ?>

		<div class='row'>
			<div class='col-lg-12'>
				<h5 class='text-center'>
					You Might Also Like...
				</h5>
				<div class='double-margin-bottom'></div>
			</div>
		</div>

<?php

while ($my_query->have_posts()) : $my_query->the_post(); ?>


<div class='col-sm-4 text-center'>
	<a href='<?php the_permalink() ?>'>

								<?php if (has_post_thumbnail( $post->ID ) ): ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

										<div class="related-thumb" style="background-image:url('<?php echo $image[0]; ?>');"></div>
<!-- 										<img 
										class='img-responsive margin-auto half-margin-bottom' 
										src='<?php echo $image[0]; ?>' 
										width='320px'> -->

								<?php else : ?>
									

									<div class="related-thumb" style="background-image:url(<?php bloginfo('template_url'); ?>/images/placeholder@2x.png)"></div>

<!-- 										<img 
										class='img-responsive margin-auto half-margin-bottom' 
										src='<?php bloginfo('template_url'); ?>/images/placeholder@2x.png' 
										width='320px'> -->
									
								<?php endif; ?>


		<h4 class='text-center secondary-text-color'>
			<?php the_title(); ?>
		</h4>
	</a>
</div>

<?php
endwhile;
}
wp_reset_query();

?>