<?php

/*
Template Name: Releases Template
*/
?>
<?php get_header(); ?>

	<main>
		<section class="featured">
			<h2>Release Notes</h2>
		<?php 
		$args = array(
        	'posts_per_page' => 2,
        	'post_type' => 'releases', 
        	'post__in' => get_option( 'sticky_posts' ),
        	'ignore_sticky_posts' => 2);
		$sticky_query = new WP_Query( $args );
		?>
		<?php if(have_posts()) : ?>
			<?php while($sticky_query->have_posts()) : $sticky_query->the_post(); ?>
			<div>
				<?php get_template_part('content'); ?>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</section>
		<?php get_template_part('content-release-cards'); ?>
	</main>
<?php get_footer(); ?>