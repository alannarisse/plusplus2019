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

		<!-- live-learning -->
		<div>
			<img src="/wp-content/themes/plusplus2019/images/products/live-learning.png" style="width:100%;">
		</div>
		<div>
			<h2>Live Learning</h2>
			<p>
			Work can be frustrating when the lack of “know how” blocks your people from being successful. They have the “know what” or they wouldn’t have been hired. But they need the how specifically your tribal knowledge or how your organization works.</p>

			<p>With PlusPlus, your people have one location for all their live-learning needs. And they can do all of this without having to wait for a manager’s recommendation!</p>

			<p>Those new to your organization or seeking to learn new skills can find upcoming events and enroll (or get added to a waitlist if a session is full). They can even take control of their career development by viewing the profile of a peer or a senior team member who they respect and finding classes relevant to their own needs. They’re also able to request that presenters repeat popular events or hold events in another location or online.</p>
			<a href="/products/live-learning" class="button">Learn More</a>
			
		</div>
		<!-- // live-learning -->

		
		<!-- Coaching  Mentoring -->
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
		<!-- // Coaching  Mentoring -->
		
		
		<div class="horiz-left"><?php get_template_part('images/inline', 'bkg_horiz.svg'); ?>
		</div>
		<div>&nbsp;</div>
		<div class="platform-img-box">
			<img src="/wp-content/themes/plusplus2019/images/integrations.png">
		</div>
		<div>
			<h2>Hassle-free Administration</h2>
			<p>
			Context switching wastes a lot of time and consumes a lot of your mental energy (approximately 1.5 hours a day!). We want you to do what you do best, so it’s important to us that our platform appears like any other app within your enterprise ecosystem.</p>

			<p>Our enterprise integration ensures we fit like a glove. Whichever Single Sign-on (SSO) system you use, we’ve got you--from Okta, OneLogin, Google, and LDAP to other OAuth2 and SAML solutions. We also play well with many other apps, from Google Calendar to Workday and Slack.</p>

			<p>With PlusPlus, your people get more deep focus time while we handle the routine--from virtual introductions between mentors and mentees, coaches and coachees to calendar invites, reminders, and waitlist management.
			</p>
			<a href="/products/platform" class="button">Learn More</a>
			
		</div>


		
	</section>
	</main>
	<?php get_footer(); ?>
