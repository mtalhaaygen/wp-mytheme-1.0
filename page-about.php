<?php 
/* Template Name: ABOUT PAGE*/
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

	<!-- About Us Section -->
	<section id="aboutus" class="section-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 text-center">
					<div class="section-top">
						<h2> <?php the_field('subheader') ?> </h2>
						<hr>
						<p> <?php the_field('sub_text') ?> </p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center no-gutters mb-5 mb-lg-0">
				<div class="col-md-6 p-0">
					<img class="img-fluid" src="<?php the_field('who_we_are_about_image') ?>"  alt="a">
				</div>
				<div class="col-md-6 p-0">
					<div class="bg-mycolor text-center h-100 project">
						<div class="d-flex h-100">
							<div class="project-text w-100 my-auto text-center text-lg-left p-3">
								<p>
								<?php the_field('who_we_are_about_text') ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- team section -->
	<section id="team">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 text-center">
					<div class="section-top">
						<h2> <?php the_field('team_title') ?> </h2>
						<hr>
						<p>
						<?php the_field('team_subtitle') ?>
						</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-4 mb-5">
					<div class="team-member">
						<img src="<?php the_field('person_image_1') ?>" alt="" class="img-fluid mx-auto rounded-circle">
						<h4><?php the_field('person_name_1') ?></h4>
						<p class="text-muted"><?php the_field('person_title_1') ?></p>
						<ul class="list-inline social-buttons">
							<li class="list-inline-item">
								<a href="<?php the_field('person_github_1') ?>">
									<i class="fa-brands fa-github"></i>
								</a>
								<a href="<?php the_field('person_linkedin_1') ?>">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 mb-5">
					<div class="team-member">
						<img src="<?php the_field('person_image_2') ?>" alt="" class="img-fluid mx-auto rounded-circle">
						<h4><?php the_field('person_name_2') ?></h4>
						<p class="text-muted"><?php the_field('person_title_2') ?></p>
						<ul class="list-inline social-buttons">
							<li class="list-inline-item">
								<a href="<?php the_field('person_github_2') ?>">
									<i class="fa-brands fa-github"></i>
								</a>
								<a href="<?php the_field('person_linkedin_2') ?>">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 mb-5">
					<div class="team-member">
						<img src="<?php the_field('person_image_3') ?>" alt="" class="img-fluid mx-auto rounded-circle">
						<h4><?php the_field('person_name_3') ?></h4>
						<p class="text-muted"><?php the_field('person_title_3') ?></p>
						<ul class="list-inline social-buttons">
							<li class="list-inline-item">
								<a href="<?php the_field('person_github_3') ?>">
									<i class="fa-brands fa-github"></i>
								</a>
								<a href="<?php the_field('person_linkedin_3') ?>">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 mb-5">
					<div class="team-member">
						<img src="<?php the_field('person_image_4') ?>" alt="" class="img-fluid mx-auto rounded-circle">
						<h4><?php the_field('person_name_4') ?></h4>
						<p class="text-muted"><?php the_field('person_title_4') ?></p>
						<ul class="list-inline social-buttons">
							<li class="list-inline-item">
								<a href="<?php the_field('person_github_4') ?>">
									<i class="fa-brands fa-github"></i>
								</a>
								<a href="<?php the_field('person_linkedin_4') ?>">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 mb-5">
					<div class="team-member">
						<img src="<?php the_field('person_image_5') ?>" alt="" class="img-fluid mx-auto rounded-circle">
						<h4><?php the_field('person_name_5') ?></h4>
						<p class="text-muted"><?php the_field('person_title_5') ?></p>
						<ul class="list-inline social-buttons">
							<li class="list-inline-item">
								<a href="<?php the_field('person_github_5') ?>">
									<i class="fa-brands fa-github"></i>
								</a>
								<a href="<?php the_field('person_linkedin_5') ?>">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>

<?php get_footer(); ?>
