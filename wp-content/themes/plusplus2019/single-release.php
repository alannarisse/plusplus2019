<?php get_header(); ?>

<main>

	<section>
		<?php if(have_posts()) : ?>
<!-- 		<div class="breadcrumb">Support &amp; Services > Documents > <?php the_title(); ?></div><div>&nbsp;</div> -->
		<?php while(have_posts()) : the_post(); ?>
			<?php get_template_part('content'); ?>
		<?php endwhile; ?>
		<?php else : ?>
			<?php echo wpautop('Sorry, no posts were found'); ?>
		<?php endif; ?>
		<aside>
			<?php 
			$args = array('post_type' => 'release', 'post_per_page' => 30);
			$loop = new WP_Query( $args );
			
			if($loop->have_posts()) : ?>
				<h4>More Documents</h4>
				<ul class="docs-aside">
					<?php while($loop->have_posts()) : $loop->the_post(); ?>
						<?php if (get_post_status($status->ID) !== "private") : ?>
							<li><h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							<?php  echo wp_trim_words( get_the_content(), 20, '...' );  ?>
							</li>
						<?php endif; ?>
					<?php endwhile; ?>
 				</ul>
			<?php else : ?>
				<?php echo wpautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
		</aside>
	
	</section>
</main>

	<?php get_footer(); ?>