<?php

/*
Template Name: Product Template
*/
?>

<?php get_header(); ?>

	<main>
		<section class="no-grid">
		<div>
 		<h1><?php the_title(); ?></h1>
		<!-- the content here -->
		<?php 
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					the_content(); 
				}
			} ?>
		</div>
		<div>
			<?php if(has_post_thumbnail()) : ?>
				<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
			<?php endif; ?>

			<hr>
			<h4>Other Product Features</h4>
			<!-- https://digwp.com/2009/07/delicious-recipes-wordpress-page-menus/ -->
			<?php
			if($post->post_parent)
				$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
			else
				$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
			if ($children) { ?>
				<ul>
					<?php echo $children; ?>
				</ul>
			<?php } ?>
			

		
		</div>
	</section>
	</main>
<?php get_footer(); ?>