<?php get_header(); ?>

	<main>
<section>
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php get_template_part('content'); ?>
				<aside>Aside</aside>
		<?php endwhile; ?>
		<?php else : ?>
			<?php echo wpautop('Sorry, no posts were found'); ?>
		<?php endif; ?>
			
			</section>
		</main>

	<?php get_footer(); ?>