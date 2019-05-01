<?php get_header(); ?>
	<main>
		
		<div class="top-horiz">
			<div>
				<h2>IDEAS Magazine</h2>
			</div>
			<div>&nbsp;</div>
			<h3>Featured Articles</h3>
			<?php get_template_part('images/inline', 'bkg_horiz.svg'); ?>
		</div>
		<section class="featured">
		<?php 
		$args = array(
        	'posts_per_page' => 2,
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
		<div class="mid-horiz"><?php get_template_part('images/inline', 'bkg_horiz.svg'); ?></div>
		<section>
			<?php
				$query = new WP_Query( array( 'post__not_in' => get_option( 'sticky_posts' ) ) ); ?>
			<?php if(have_posts()) : ?>
				
			<?php while($query->have_posts()) : $query->the_post(); ?>
				<?php get_template_part('content'); ?>
			<?php endwhile; ?>
			<?php else : ?>
			<?php echo wpautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
		</section>




	</main>
	<?php get_footer(); ?>
