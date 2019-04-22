<?php

/*
Template Name: Docs Template
*/
?>
<?php get_header(); ?>

	<main>
		<section>
			<?php 
			$args = array('post_type' => 'docs', 'post_per_page' => 20);
			$loop = new WP_Query( $args );

			if($loop->have_posts()) : ?>
			<?php while($loop->have_posts()) : $loop->the_post(); ?>
				<?php get_template_part('content'); ?>
			<?php endwhile; ?>
			<?php else : ?>
				<?php echo wpautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
		</section>
	</main>
<?php get_footer(); ?>