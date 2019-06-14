<?php get_header(); ?>

	<main>
		<section>
		<div>
			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					the_content();
				}
			} ?>
		</div>
		<div>
			<img class="fit-cover" src="/wp-content/themes/plusplus2019/images/bkg_table_lav.png">
		</div>


		<div class="horiz-left"><?php get_template_part('images/inline', 'bkg_horiz.svg'); ?>
		</div><div>&nbsp;</div>
		</section>

		<!-- Repeating rows ACF for Products -->
		<?php if( have_rows('product_repeater') ): ?>
		    <?php while( have_rows('product_repeater') ): the_row(); ?>
			 	<section class="prod_repeater">
			        <div class="prod_img">
			        	<img src="<?php the_sub_field('product_image'); ?>"/>
			        </div>

			        <div>
			        	<?php the_sub_field('product_content'); ?>
			        </div>
			        <div class="horiz-left"><?php get_template_part('images/inline', 'bkg_horiz.svg'); ?>
					</div>
					<div>&nbsp;</div>
				</section>
		    <?php endwhile; ?>
		<?php endif; ?>
	<!-- /ACF for products -->
	</main>
	<?php get_footer(); ?>
