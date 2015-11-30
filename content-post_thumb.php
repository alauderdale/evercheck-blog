<div class="post-thumb">
	<div class='padded'>
		<h2 class='text-center'>
			<a href='<?php the_permalink();?>'>
				<?php the_title();?>
			</a>
		</h2>
	</div>
	<p class='small medium-font-name'>
		Posted by <?php the_author();?> on <?php the_date();?>
	</p>
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<a href='<?php the_permalink();?>'>
			<img 
			class='img-responsive margin-bottom no-padding' 
			src='<?php echo $image[0]; ?>' 
			width='620'>
		</a>
	<?php endif; ?>

	<?php the_excerpt();?>
	<div class='margin-top'>
		<p class='small regular-font-name light-text-color'>
			Posted in:
			<?php the_category(', '); ?>
			 <?php the_tags( '| Tags: ', ', ', '<br />' ); ?> 
		</p>
	</div>
	<div class='half-padding-top'>
		<a class='next-up pull-left regular-font-name' href='<?php the_permalink();?>'>
			Read More
			<small>
				<i class='fa fa-long-arrow-right primary-text-color'></i>
			</small>
		</a>
	</div>
	<div class='double-margin-top'></div>
	<hr>
	<div class='double-margin-bottom'></div>
</div>