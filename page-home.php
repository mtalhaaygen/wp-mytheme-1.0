<?php 
/* Template Name: HOME PAGE*/
get_header(); ?>



	<!-- Hero section -->
	<header id="hero" style="text-align: center; color: white; 
	background: linear-gradient(rgba(20, 20, 20, .8), rgba(20, 20, 20, .8));
	background-image: url('<?php the_field('hero_image') ?>');
	background-repeat: no-repeat;
	background-position: center center;
	background-attachment: scroll;
	background-size: cover;
	height: 100vh">
		<div class="container">
			<div class="intro-text text-dark pb-5">
				<div class="intro-heading text-uppercase">
					<?php the_field('main_slogan') ?>
				</div>
				<br><br>
				<a href="#whoweare" class="btn btn-main"><?php the_field('main_button_text') ?></a>
				<br><br><br><br><br>
			</div>
		</div>
	</header>

	<!-- Biz kimiz? -->
	<section id="whoweare" class="section-box">
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
			<div class="row">
				<div class="col-md-4 mb-4">
					<div class="whoweare-item text-center">
						<?php the_field('icon_1') ?>
						<h3 class="text-uppercase"> <?php the_field('section_header_1') ?> </h3>
						<hr>
						<p>
							<?php the_field('section_text_1') ?>
						</p> 
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="whoweare-item text-center">
						<?php the_field('icon_2') ?>
						<h3 class="text-uppercase"><?php the_field('section_header_2') ?></h3>
						<hr>
						<p>
							<?php the_field('section_text_2') ?>
						</p>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="whoweare-item text-center">
						<?php the_field('icon_3') ?>
						<h3 class="text-uppercase"> <?php the_field('section_header_3') ?> </h3>
						<hr>
						<p><?php the_field('section_text_3') ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Statement section-->
	<section id="statement" class="section-box" style="background: linear-gradient(rgba(20, 20, 20, .8), rgba(20, 20, 20, .8));
	background-image: url('<?php the_field('statement_image') ?>');
	background-repeat: no-repeat;
	background-position: center center;
	background-attachment: fixed;
	background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h4 class="lead">
					<?php the_field('statement_section_text') ?>
					</h4>
				</div>
			</div>
		</div>
	</section>

	<!-- Last Projects Section -->,
	<section id="latestprojects" class="section-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 text-center">
					<div class="section-top">
						<h2><?php the_field('last_projects_title') ?></h2>
						<hr>
						<p> <?php the_field('last_projects_title') ?> </p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center no-gutters mb-0 mb-lg-0">
				<!-- align-items-center g-2 -->
				<div class="d-flex col-md-6 mx-0 p-0 align-items-center">
					<img src="<?php the_field('project_image_1') ?>" alt="proje01." class="img-fluid">
				</div>
				<div class="col-md-6 mb-0 p-0">
					<div class="bg-mycolor text-center h-100 project p-5">
						<div class="d-flex h-100">
							<div class="project-text w-100 my-auto text-lg-left">
								<h3 class="text-uppercase"><?php the_field('project_title_1') ?></h3>
								<hr class="d-none d-lg-block mb-3 ml-0">
								<p class="mb-3"><?php the_field('project_text_1') ?>
								</p>
								<a href="#" class="btn btn-white"><?php the_field('project_1_button_text') ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center no-gutters mb-0 mb-lg-0">
				<!-- align-items-center g-2 -->
				<div class="d-flex col-md-6 mx-0 p-0 align-items-center">
					<img src="<?php the_field('project_image_1') ?>" alt="proje01." class="img-fluid">
				</div>
				<div class="col-md-6 p-0 order-lg-first">
					<div class="bg-mycolor text-center h-100 project p-5">
						<div class="d-flex h-100">
							<div class="project-text w-100 my-auto text-lg-left">
								<h3 class="text-uppercase"><?php the_field('project_title_2') ?></h3>
								<hr class="d-none d-lg-block mb-3 ml-0">
								<p class="mb-3"><?php the_field('project_text_2') ?></p>
								<a href="#" class="btn btn-white"> <?php the_field('project_2_button_text') ?> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- main
    <main class="container">
    </main> -->



<?php get_footer(); ?>
