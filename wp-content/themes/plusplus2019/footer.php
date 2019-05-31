	<div class="full-horiz"><?php get_template_part('images/inline', 'horiz_full.svg'); ?></div>

	<footer>
		<p class="micro">&copy; 2019 PlusPlus, Inc.<br>
			<a href="/privacy">Privacy Policy</a><br>
			<a href="/terms">Terms of Service</a></p>
		<ul>
			<li><a href="/docs">Documentation</a></li>
			<li><a href="/ideas">IDEAS Magazine</a></li>
			<li><a href="/products/live-learning">Live Learning</a></li>
			<li><a href="/products/coaching-and-mentoring">Coaching and Mentoring</a></li>
			<li><a href="/products/platform/">Enterprise Integration</a></li>
			<li><a href="/support-services/">Support &amp; Services</a></li>
			<li><a href="/support-services/submit-an-issue/">Submit an Issue</a></li>
		</ul>
		<ul>
			<li><a href="/hello">Contact Us</a></li>
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