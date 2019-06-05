<section class="no-grid">
	<?php 
	$args = array(
		'post_type' => 'docs', 
		'posts_per_page' => 50,
		'paged' => get_query_var('page') ? get_query_var('page') : 1
	);
	$loop = new WP_Query( $args );

	if($loop->have_posts()) : ?>
		<ul class="docs-cards">
	<?php while($loop->have_posts()) : $loop->the_post(); ?>
		<?php /* if (get_post_status($status->ID) !== "private") : */?>
			<li><h1><?php the_title(); ?></h1>
			<!-- Category: <?php the_category( ', ' ); ?> -->
			<?php /* $content = get_the_content(); echo mb_strimwidth($content, 0, 300, '...'); */?>
			<?php  echo wp_trim_words( get_the_content(), 40, '...' );  ?>
			<p><a class="btn-read-more" href="<?php the_permalink(); ?>" ><img src="/wp-content/themes/plusplus2019/images/icon-plusdouble.png"> Read more <img src="/wp-content/themes/plusplus2019/images/icon-plusdouble.png"></a></p>
			</li>
		<?php /* endif; */ ?>
	<?php endwhile; ?>
			</ul>

            <?php /* previous_posts_link(); */ ?>
            <?php //next_posts_link(); ?>
            
	<?php else : ?>
		<?php echo wpautop('Sorry, no posts were found'); ?>
	<?php endif; ?>
</section>