<?php

/*
Template Name: Docs Template
*/
?>
<?php get_header(); ?>

	<main>
		<section>
			<div>
				<h2>Support &amp; Services</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi harum illo officia, eveniet aut corporis porro, ut fugiat veniam omnis ratione suscipit sit enim. Neque non reprehenderit quae dolore impedit unde ducimus perspiciatis consequuntur iure ratione nisi, harum, quam consequatur autem, itaque odio id. Quaerat reiciendis mollitia possimus maiores sequi.</p>
				<button>Call to Action</button>
			</div>
			<div><?php get_template_part('images/inline', 'bkg-pluses_lg_grey.svg'); ?></div>
		</section>
		<section class="no-grid">
			<?php 
			$args = array('post_type' => 'docs', 'post_per_page' => 20);
			$loop = new WP_Query( $args );

			if($loop->have_posts()) : ?>
				<ul class="docs-cards">
			<?php while($loop->have_posts()) : $loop->the_post(); ?>
				<?php if (get_post_status($status->ID) !== "private") : ?>
					<li><h1><?php the_title(); ?></h1>
					<!-- Category: <?php the_category( ', ' ); ?> -->
					<?php /* $content = get_the_content(); echo mb_strimwidth($content, 0, 300, '...'); */?>
					<?php  echo wp_trim_words( get_the_content(), 40, '...' );  ?>
					<p><a class="btn-read-more" href="<?php the_permalink(); ?>" ><img src="/wp-content/themes/plusplus2019/images/icon-plusdouble.png"> Read more <img src="/wp-content/themes/plusplus2019/images/icon-plusdouble.png"></a></p>
					</li>
				<?php endif; ?>
			<?php endwhile; ?>
 				</ul>
			<?php else : ?>
				<?php echo wpautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
		</section>
	</main>
<?php get_footer(); ?>