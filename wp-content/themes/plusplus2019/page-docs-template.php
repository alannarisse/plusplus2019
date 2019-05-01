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
	
		
		<?php get_template_part('content-docs-cards'); ?>
	</main>
<?php get_footer(); ?>