<?php get_header(); ?>

	<main>
		<section class="no-grid">
		<div>
<!-- 		<h1><?php the_title(); ?></h1>
 -->		<!-- the content here -->
		<?php 
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					the_content(); 
				}
			} ?>
		</div>
	</section>
	</main>
	<?php get_footer(); ?>
