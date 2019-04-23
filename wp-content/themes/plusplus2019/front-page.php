<?php get_header(); ?>

	<main>
		<section>
		<div>
		<h1>Evolve Today</h1>

		<h3>With our cloud-based, flexible knowledge sharing platform evolve your organization.</h3>

		<ul class="plus">
			<li>Get your people up to speed quickly on how today's technologies work in your organization and are used by your teams.</li>
			<li>Extend learning and development opportunities with organization-wide access to face-to-face, peer-to-peer, live learning and development opportunities.</li>
			<li>Keep new hires and long-term employees engaged today and primed for tomorrow's challenges through a culture of continuous learning.</li>
		</ul>

		<p><button class="button">Schedule a Demo</button></p>
		</div>
		<div><?php get_template_part('images/inline', 'bkg_pluses_lg.svg'); ?></div>
		</section>

	<?php if( have_rows('homepage_sections')): ?>
	<section>
	<?php while( have_rows('homepage_sections')): the_row(); ?>

		<div>
			<h2><?php the_sub_field('header'); ?>
			<?php the_sub_field('content1'); ?>
		</div>
		<div style="margin-right: -80px;"><?php get_template_part('images/inline', 'bkg_triangle.svg'); ?></div>
		
		<div class="hidesm"  style="margin-left: -80px;"><?php get_template_part('images/inline', 'bkg_horiz.svg'); ?></div>
		<div>
			<?php the_sub_field('content2'); ?>

			<p class="hidesm" style="margin: 2em -80px 2em 0;"><?php get_template_part('images/inline', 'bkg_horiz.svg'); ?></p>

			<?php the_sub_field('content3'); ?>

			<p><a class="button" href="<?php the_sub_field('button_url'); ?>"><?php the_sub_field('button_text'); ?></a></p>
		</div>


<?php endwhile; ?>
		</section>

<?php endif; ?>		

		<section>
	<div>
		<h2>What Customers Have Done with PlusPlus</h2>
	</div>
	<div>
		<h3>Peer Learning</h3>
		<p>Face-to-face live learning from peers is the most effective way to transfer tribal knowledge. Tribal knowledge, or "know how," is knowledge gained from time spent at your organization within a specific context and specific roles. PlusPlus increases the personal impact of eager engineering staff at Shopify by providing tools to scale their unofficial lunch-and-learns and spontaneous training sessions.</p>
		<p><a class="button" href="https://plusplus.co/ideas/3-steps-to-drive-adoption-of-a-new-cultural-concept/">read more</a></p>
	</div>

	<div>
		<blockquote>
		The wellbeing ingredient is something that sets coaching at Shopify apart from what may be
		offered in other companies. The coaches want to develop the whole person, not just the person
		who comes to work. It's a dual situation – helping with the work problems as well as the how:
		How can I be my best self at work in a way that's healthy for me?</blockquote>
		<cite>Rene Moortgat, Talent Development Operations Specialist at Shopify</cite>
	</div>
	<div>
		<h3>Whole Person Development</h3>
		<p>At Shopify, anyone, at any level—not just executives, can sign up for coaching sessions as often as they want. Without the automation provided by the PlusPlus platform, they'd be unable to offer 1000s of coaching sessions globally per year eliminating physical location as a barrier. Delivering what's good for people, in addition to just what's profitable for their organization, gives Shopify a competitive advantage.</p>
		<a href="https://plusplus.co/ideas/democratizing-coaching-at-shopify/" class="button">learn how</a>
	</div>
	<div>
		<blockquote>
		For most engineers, a one-hour session at a conference about the specifics of how to use a
		technology is far less valuable than learning how that particular concept is applied at your
		company. SSENSE University is a great way to train folks on new tools that we've adopted, as
		well as an opportunity to make a case for different tooling.
		</blockquote>
		<cite>Tuan Bach, Application Development Director at SSENSE</cite>
	</div>


	<div>
		<h3>A Culture of Learning</h3>
		<p>Vibrant engineering cultures that attract, grow, and empower world-class talent take care and feeding. SSENSE increased employee engagement by balancing external conferences and classes with peer-to-peer learning. They ask everyone who attends conferences to host live sessions distilling what they've learned. This fosters a sense of teamwork, team spirit, and inter-team collaborations.</p>
		<a href="balancing-peer-to-peer-learning-with-external-conferences/" class="button">discover how</a>
		<button>schedule a demo</button>
	</div>
	<div>
			<blockquote>
				The wellbeing ingredient is something that sets coaching at Shopify apart from what may be offered in other companies. The coaches want to develop the whole person, not just the person who comes to work. It's a dual situation—helping with the work problems as well as the how: How can I be my best self at work in a way that's healthy for me?
			</blockquote>
			<cite>Rene Moortgat, <br>Talent Development Operations Specialist at Shopify</cite>
			</div>
		</section>

	</main>
	<?php get_footer(); ?>
