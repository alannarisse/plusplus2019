<?php

/*
Template Name: Releases Template
*/
?>
<?php get_header(); ?>

	<main>
		<section class="featured">
			<h2>Release Notes Nothing herer</h2>
			<?php 
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					the_content(); 
				}
			} ?>
		<?php 
		$args = array(
        	'posts_per_page' => 2,
        	'post_type' => 'release', 
        	'post__in' => get_option( 'sticky_posts' ),
        	'ignore_sticky_posts' => 2);
		$sticky_query = new WP_Query( $args );
		?>
		<?php if(have_posts()) : ?>
			<?php while($sticky_query->have_posts()) : $sticky_query->the_post(); ?>
			<div>
				<?php get_template_part('content-release-cards'); ?>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</section>
		<?php get_template_part('content-release-cards'); ?>
	</main>
<?php get_footer(); ?>