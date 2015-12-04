<?php
/**
 * The Template for displaying all single posts.
 *
 * @package boiler
 */

get_header(); ?>



<section>
	<div class='container'>
		<div class='col-sm-2'></div>
		<div class='col-sm-8'>
			<div class='padded'>
				<h2 class='text-center'>
					<?php the_title();?>
				</h2>
			</div>
			<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
				<p class='small medium-font-name'>
					Posted by <?php the_author();?> on <?php the_date();?>
				</p>
				<?php the_content();?>
			<?php endwhile; // end of the loop. ?>
		<?php endif; ?>
		<div class='margin-top'>
			<?php get_template_part( 'content', 'post_meta' ); ?>
		</div>
	</div>
	<div class='col-sm-8'></div>
</div>
</section>
<section>
	<div class='container'>
		<div class='row'>
			<?php get_template_part( 'content', 'related_posts' ); ?>
		</div>
	</div>
</section>
</div>



<?php get_footer(); ?>