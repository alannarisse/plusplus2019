<?php get_header(); ?>

	<main>
		<section>
		<div>
<!-- 		<h1><?php the_title(); ?></h1>
 -->		<!-- the content here -->
		<?php 
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					the_content(); 
				}
			} ?>
		</div>
		<div>
			<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
			<script>
			  hbspt.forms.create({
			portalId: "3109109",
			formId: "39d98718-f400-4d94-ae07-3df53bebecbc"
			});
			</script>
		</div>
	</section>
	</main>
	<?php get_footer(); ?>
