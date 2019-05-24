	<div class="full-horiz"><?php get_template_part('images/inline', 'horiz_full.svg'); ?></div>

	<footer>
		<p class="micro">&copy; 2018 PlusPlus, Inc. </p>
		<ul>
			<li><a href="/docs">Documentation</a></li>
			<li><a href="/ideas">IDEAS Magazine</a></li>
			<!-- <li><a href="#">TechKnowCon</a></li>
			<li><a href="#">Events</a></li> -->
		</ul>
		<ul>
			<li><a href="/demo">Contact Us</a></li>
			<!-- <li><a href="#">YouTube</a></li> -->
			<li><a href="https://twitter.com/PlusPlusHQ" target="_blank">Twitter</a></li>
			<li><a href="https://www.linkedin.com/company/plusplus/" target="_blank">LinkedIn</a></li>
		</ul>
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
</body>
</html>