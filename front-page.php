<?php get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>


	<section class="full-page site-banner" id="home">
		<article class="site-banner-info wow animated fadeIn">
			<h1>My Business Is To Help Your Business!</h1>
			<p>I am a Developer based in Manchester.</p>
			<p>I specialize in Web Development, i also have experience with Software and Mobile Development.</p>
			<p>I work with both Companies & Individuals.</p>
		</article>
		<a data-scroll href="#services"><i class="animated bounce fa fa-angle-down"></i></a>
	</section>

	<section class="services" id="services">
		<div class="services-wrapper">
			<h2 class="sub-heading">Services</h2>

			<div class="service-box-wrapper">

<!--				<article class="service-box">-->
<!--					<header class="service-box-header clearfix">-->
<!--						<i class="fa fa-user"></i>-->
<!--						<h3>IT Consultancy</h3>-->
<!--					</header>-->
<!--					<div>-->
<!--					<p>-->
<!--						I can identify IT requirements for your business. I can analyse existing application, we can work togeather to find solutions to existing problems.-->
<!--						I can provide on going support and honest advice to tackle challenges you might face moving forward.-->
<!--					</p>-->
<!--					</div>-->
<!--				</article>-->

				<article class="service-box">
					<header class="service-box-header clearfix">
						<i class="fa fa-globe"></i>
						<h3>Web Development</h3>
					</header>
					<div>
						<p>I can develop bespoke websites for you or your business. Tailored to your exact needs.</p>

						<ul>
							<li>A basic website</li>
							<li>Content Management System e.g. Wordpress</li>
							<li>E-commerce website</li>
							<li>Database Driven Web Application</li>
						</ul>

						<p>The final product will be responsive to different devices, cross browser compatible, search engine optimised and hand coded from scratch.</p>
					</div>
				</article>
<!---->
<!--				<article class="service-box">-->
<!--					<header class="service-box-header clearfix">-->
<!--						<i class="fa fa-table"></i>-->
<!--						<h3>IT Solutions</h3>-->
<!--					</header>-->
<!--					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
<!--						A amet animi consequatur cupiditate dolorem enim esse, et-->
<!--						facilis harum magni natus nulla obcaecati, odio quae quaerat-->
<!--						quas qui, quo ut.-->
<!--						Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
<!--						A amet animi consequatur cupiditate dolorem enim esse, et-->
<!--						facilis harum magni natus nulla obcaecati, odio quae quaerat-->
<!--						quas qui, quo ut.-->
<!--						Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
<!--						A amet animi consequatur cupiditate dolorem enim esse, et-->
<!--						facilis harum magni natus nulla obcaecati, odio quae quaerat-->
<!--						quas qui, quo ut.-->
<!--					</p>-->
<!--				</article>-->
<!---->
<!--				<article class="service-box">-->
<!--					<header class="service-box-header clearfix">-->
<!--						<i class="fa fa-cog"></i>-->
<!--						<h3>IT Services</h3>-->
<!--					</header>-->
<!--					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
<!--						A amet animi consequatur cupiditate dolorem enim esse, et-->
<!--						facilis harum magni natus nulla obcaecati, odio quae quaerat-->
<!--						quas qui, quo ut.-->
<!--						Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
<!--						A amet animi consequatur cupiditate dolorem enim esse, et-->
<!--						facilis harum magni natus nulla obcaecati, odio quae quaerat-->
<!--						quas qui, quo ut.-->
<!--						Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
<!--						A amet animi consequatur cupiditate dolorem enim esse, et-->
<!--						facilis harum magni natus nulla obcaecati, odio quae quaerat-->
<!--						quas qui, quo ut.-->
<!--					</p>-->
<!--				</article>-->
			</div>
			<i id="more">More Services Coming Soon!</i>
		</div>
	</section>

	<section class="skills" id="skills">
		<div class="skills-wrapper">
			<h2 class="sub-heading">Skills</h2>

			<article class="skills-list">
				<p>If you are interested in hiring me, my development skills are listed below.</p>
				<p>HTML, CSS, JavaScript, MySQL & PHP.</p>
			</article>

			<article class="skills-frameworks">
			<p>Additionally i have experience in the following technologies, libraries, packages, platforms & frameworks.</p>
				<div class="skills-logo">
					<ul>
						<li><i class="fa fa-html5"></i>HTML5</li>
						<li><i class="fa fa-css3"></i>CSS3</li>
						<li><i class="fa fa-stop"></i>JQuery</li>
						<li><i class="fa fa-stop"></i>Bootstrap</li>
						<li><i class="fa fa-stop"></i>SASS</li>
						<li><i class="fa fa-git"></i>Git</li>
						<li><i class="fa fa-github"></i>GitHub</li>
						<li><i class="fa fa-wordpress"></i>Wordpress</li>
						<li><i class="fa fa-stop"></i>Laravel</li>
					</ul>
				</div>
				<div class="skills-learning">
					<p>Currently Learning...</p>
					<ul>
						<li><i class="fa fa-stop"></i>MongoDB</li>
						<li><i class="fa fa-stop"></i>NodeJS</li>
						<li><i class="fa fa-stop"></i>ExpressJS</li>
						<li><i class="fa fa-stop"></i>AngularJS</li>
					</ul>
				</div>
			</article>
		</div>
	</section>


	<section class="projects" id="projects">
		<div class="projects-wrapper">
			<h2 class="sub-heading">Projects</h2>
			<p>Coming Soon!</p>
			</div>
	</section>

	<section class="testimonials" id="testimonials">
		<div class="testimonials-wrapper">

			<h2 class="sub-heading">Testimonials</h2>
			<p>Coming Soon!</p>
		</div>
	</section>


	<section class="contact" id="contact">
		<div class="contact-wrapper">

		<h2 class="sub-heading">Contact</h2>


		<?php echo do_shortcode('[KHAN_Contact_Form]'); ?>

		<div id="contact-social">
			<ul id="contact-social-links">
				<li><a href=""><i class="fa fa-linkedin"></i><br><i class="fa fa-linkedin"></i></a></li>
				<li><a><i class="fa fa-envelope-o"></i><br><i class="fa fa-envelope-o"></i></a></li>
				<li><a><i class="fa fa-twitter"></i><br><i class="fa fa-twitter"></i></a></li>
				<li><a><i class="fa fa-youtube"></i><br><i class="fa fa-youtube"></i></a></li>
			</ul>
		</div>

<!--			--><?php //echo do_shortcode( '[contact-form-7 id="18" title="Contact form 1"]' ); ?>

		<!--		--><?php //echo do_shortcode('[contact_form_dm]'); ?>

		<!--		--><?php //include_once('contact-form.php') ?>

		<!--		--><?php //the_widget( 'myContactForm' ); ?>

		</div>
	</section>



<?php endwhile;  ?>
<?php get_footer(); ?>
