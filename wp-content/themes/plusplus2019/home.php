<?php get_header(); ?>
	<main>
		<section>
<!-- 			is_tag( 'featured' );
 -->
		<?php 
		$args = array(
        'posts_per_page' => 1,
        'post__in' => get_option( 'sticky_posts' ),
        'ignore_sticky_posts' => 1);
		$sticky_query = new WP_Query( $args );
		?>
		<?php if(have_posts()) : ?>
			<?php while($sticky_query->have_posts()) : $sticky_query->the_post(); ?>
			<div>
				<strong>Featured Post</strong>
				<?php get_template_part('content'); ?>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</section>
		<section>
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php get_template_part('content'); ?>
			<?php endwhile; ?>
			<?php else : ?>
			<?php echo wpautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
		</section>
		<section>
			
			<div style="height:120px;">&nbsp;</div>
			<div>
				<img src="images/horiz_single_pluses.svg" style="width: 246px"></div>
			<div><img src="images/bkg_horiz.svg" style="margin-left: -120px;"></div>


		</section>



	</main>
	<?php get_footer(); ?>
