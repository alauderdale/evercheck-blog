<div class='main blog-main'>
	<section>
		<div class='container'>
			<div class="row">
				<div class='col-sm-2'></div>
				<div class='col-sm-8'>

					<!-- the loop -->
					<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'content', 'post_thumb' ); ?>

						<?php endwhile; // end of the loop. ?>
						<?php else : ?>
	        		<!-- No posts found -->
					<?php endif; ?>
				<!-- Pager -->
				<nav>
					<ul class='pager'>
						<li>
							<?php next_posts_link('&larr; Older Posts'); ?>
						</li>
						<li>
							<?php previous_posts_link('Newer Posts &rarr;'); ?>
						</li>
					</ul>
				</nav>


			</div>
			<div class='col-sm-2'></div>
		</div>
	</div>
</section>
</div>