<?php 
/* Template Name: CONTACT PAGE*/
get_header(); ?>

	<!-- inside hero -->
	<section class="page-image page-image-default section-box" style="	background: linear-gradient(rgba(20, 20, 20, .8));
	background-image: url('<?php the_field('image') ?>');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: initial;
	background-position: center center;
	background-size: cover;">
		<h1 class="page-title"><?php the_field('title') ?></h1>
	</section>

	<!-- contact section -->
	<section id="contact" class="section-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 text-center ">
					<div class="section-top">
						<h2>Contact With Us</h2>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus impedit fuga ipsum!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- <form action="" id="contactForm" name="sentMessage">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="name" placeholder="Your Name *">
									<p class="help-block text-danger"></p>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="email" placeholder="Your Email *">
									<p class="help-block text-danger"></p>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="subject" placeholder="Subject *">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									 name="" cols="30" rows="10"
									<textarea id="message" class="form-control" placeholder="Your Message *" cols="30"
										rows="6"></textarea>
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-12 text-center">
								<button id="sendMessageButton" class="btn btn-main btn-contact text-uppercase"
									type="submit">
									submit
								</button>
							</div>
						</div>
					</form> -->
				<?php the_content(); ?>
				</div>
			</div>
			<br>
		</div>
	</section>

<?php get_footer(); ?>
