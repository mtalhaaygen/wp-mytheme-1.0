<?php 
/* Template Name: BLOG PAGE*/
get_header(); ?>
<!-- BU SAYFA KULLANILMIYOR -->

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

	<!-- blog section -->
	<section id="blog" class="section-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 text-center ">
					<div class="section-top">
						<h2><?php the_field('subheader') ?></h2>
						<hr>
						<p><?php the_field('sub_text') ?></p>
					</div>
				</div>
			</div>
				<div class="container row d-flex justify-content-evenly">


					<div class="col-md-3 card blog-item">
						<img class="card-img-top" src="img/company3.jpeg" alt="Title">
						<div class="card-body">
							<h4 class="card-title">Title</h4>
							<p class="card-text">Text</p>
						</div>
					</div>
					<div class="col-md-3 card blog-item">
						<img class="card-img-top" src="img/company3.jpeg" alt="Title">
						<div class="card-body">
							<h4 class="card-title">Title</h4>
							<p class="card-text">Text</p>
						</div>
					</div>
					<div class="col-md-3 card blog-item">
						<img class="card-img-top" src="img/company3.jpeg" alt="Title">
						<div class="card-body">
							<h4 class="card-title">Title</h4>
							<p class="card-text">Text</p>
						</div>
					</div>
					<div class="col-md-3 card blog-item">
						<img class="card-img-top" src="img/company3.jpeg" alt="Title">
						<div class="card-body">
							<h4 class="card-title">Title</h4>
							<p class="card-text">Text</p>
						</div>
					</div>

				</div>
		</div>
	</section>

<?php get_footer(); ?>