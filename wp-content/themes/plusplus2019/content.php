<?php if(is_search() || is_archive()) : ?>
	<article>
		<?php if(has_post_thumbnail()) : ?>
			<div class="post-thumbnail"><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail(); ?></a></div>
		<?php endif; ?>
		<h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
		<?php /* the_category( ', ' );  */?>
		<p><?php the_content(); ?></p>
		<p>
			Category: <?php the_category( ', ' ); ?> Author: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> Date: <?php the_time('F j, Y g:i a'); ?></p>
	</article>

<?php else : ?>
	<article>
		<?php if(has_post_thumbnail() && 'docs' !== get_post_type() ) : ?>
			<div class="post-thumbnail"><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail(); ?></a></div>
		<?php endif; ?>
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>
		
		<p>
			Category: <?php the_category( ', ' ); ?> Author: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> Date: <?php the_time('F j, Y g:i a'); ?></p>
	</article>

<?php endif; ?>

