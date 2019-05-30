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
<!-- 
			<h1>Enterprise knowledge sharing platform</h1>
			<h4>Your organization's fast growth depends on your people. And the PlusPlus talent development platform delivers--at scale--what they need: live learning, mentoring, and coaching.</h4> -->
		</div>
		<div>

			<img src="/wp-content/themes/plusplus2019/images/bkg_table_lav.png">
			
		</div>


		<div class="horiz-left"><?php get_template_part('images/inline', 'bkg_horiz.svg'); ?>
			<p>
		</div><div>&nbsp;</div>

		<!-- platform -->
		<div class="platform-img-box">
			<img src="/wp-content/themes/plusplus2019/images/integrations.png">
		</div>
		<div>
			<h2>The PlusPlus Platform offers Enterprise Integration</h2>
			<h3>Make it fit like a glove within your ecosystem</h3>
			<p>
			It is important that this app appears like any other app within your enterprise ecosystem. That’s why we focus heavily on integration so it fits like a glove.</p>

			<p>Whichever Single Sign-on (SSO) system you use, we got you. From Okta, OneLogin, Google, and LDAP to other OAuth2 and SAML solutions.</p>

			<p>PlusPlus plays well with other apps, from Google Calendar to Workday and Slack.
			</p>
			<a href="/platform" class="button">Learn More</a>
			
		</div>
		<!-- // platform -->

		

		<div>&nbsp;</div>
		<div class="horiz-right"><?php get_template_part('images/inline', 'bkg_horiz.svg'); ?>
		</div>
		<div>
			<h2>Coaching and Mentoring</h2>
			<p>Effective knowledge transfer at scale that’s as unique as your organization? Tailored to each employee’s needs? Yes!</p>

			<p>With PlusPlus you can instill a culture of learning that puts your workforce first. Experts schedule time for onboarding and training. Those seeking new skills or advice connect to experts they need. Voila! The effectiveness of tribal knowledge transfer increased without an impact on productivity.</p>
			<a href="coaching-and-mentoring/" class="button">Learn More</a>
		</div>
		<div>
			<img src="/wp-content/themes/plusplus2019/images/products/Coaching-index.png" style="width: 100%;">
		</div>
		

	</section>
	</main>
	<?php get_footer(); ?>
