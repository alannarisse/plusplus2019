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
		<div class="timeline">
			<h3>Our journey towards a culture of learning.</h3>
			<ul class="timeline">
				<div class="horiz-timeline"></div>
				<li>
					<div class="odd"><h4>2008-2013</h4>
					<img src="/wp-content/themes/plusplus2019/images/icon-plusdouble.png"> Marakana born.<br>
					<img src="/wp-content/themes/plusplus2019/images/icon-plusdouble.png"> Transformed open source <br>training.</div>
				</li>
				<li>
					<div><h4>2013-2016</h4>
					<img src="/wp-content/themes/plusplus2019/images/icon-plusdouble.png"> Twitter University born.<br>
					<img src="/wp-content/themes/plusplus2019/images/icon-plusdouble.png"> Peer learning.</div>
				</li>
				<li>
					<div><h4>2016-</h4>
					<img src="/wp-content/themes/plusplus2019/images/icon-plusdouble.png"> PlusPlus born.<br>
					<img src="/wp-content/themes/plusplus2019/images/icon-plusdouble.png"> Tribal knowledge sharing <br>at scale.</div>
				</li>
			 </ul>
		</div>
	</section>
	</main>
	<?php get_footer(); ?>
<?php /* I wasn't sure if a horizontal or vertical treatment would work  best. Caption or heading for graphic: Our journey towards a culture of learning.
Text that goes with the three arrows is:
2008-2013
Marakana born.
Transformed open source training.
2013-2016
Twitter University born.
Peer learning.
2016-
PlusPlus born.
Tribal knowledge sharing at scale.*/
?>