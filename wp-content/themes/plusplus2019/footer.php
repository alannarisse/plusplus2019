	<div class="full-horiz"><?php get_template_part('images/inline', 'horiz_full.svg'); ?></div>

	<footer>
		<div class="micro">&copy; 2019 PlusPlus, Inc.<br><br>
		<?php
			$args = array(
				'theme_location' => 'footer1'
			);
		?>
		<?php wp_nav_menu($args); ?>
	</div>
			<?php
			$args2 = array(
				'theme_location' => 'footer2'
			);
		?>
		<?php wp_nav_menu($args2); ?>

			<?php
			$args3 = array(
				'theme_location' => 'footer3'
			);
		?>
		<?php wp_nav_menu($args3); ?>

			<?php
			$args4 = array(
				'theme_location' => 'footer4'
			);
		?>
		<?php wp_nav_menu($args4); ?>
	</footer>
	<?php wp_footer(); ?>
	<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>	
  <script>
  	$(document).ready(function(){
  		$('.icon').click(function(){
  			$('.icon').toggleClass('active');
  			$('.desktop').toggleClass('mobile');
  		})
  	})
  </script>
	  <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-74501443-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-74501443-1');
	</script>
</body>
</html>