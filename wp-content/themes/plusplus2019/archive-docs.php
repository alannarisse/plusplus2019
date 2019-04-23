<?php get_header(); ?>

<main>
	<div class="top-horiz">
			<h3>Featured Documents</h3>
			<?php get_template_part('images/inline', 'bkg_horiz.svg'); ?>
		</div>
		<section>
			

			<?php 
			$args = array('post_type' => 'docs',
				'post_per_page' => 20,
				'post__in' => get_option( 'sticky_posts' ),
				'ignore_sticky_posts' => 2
			);
			$sticky_loop = new WP_Query( $args );

			if($sticky_loop->have_posts()) : ?>
			<?php while($sticky_loop->have_posts()) : $sticky_loop->the_post(); ?>
				<?php get_template_part('content'); ?>
			<?php endwhile; ?>
			<?php else : ?>
				<?php echo wpautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
		</section>
<div class="mid-horiz"><?php get_template_part('images/inline', 'bkg_horiz.svg'); ?></div>

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
