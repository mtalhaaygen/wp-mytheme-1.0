<?php 
/* Template Name: BLOG LIST ARCHIVE PAGE*/
get_header(); ?>

	<!-- inside hero -->
	<section class="page-image page-image-default section-box" style="	background: linear-gradient(rgba(20, 20, 20, .8));
	background-image: url('<?php the_field('image') ?>');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: initial;
	background-position: center center;
	background-size: cover;">
		<h1 class="page-title"> BLOG </h1>
	</section>

	<!-- blog section -->
	<section id="blog" class="section-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 text-center ">
					<div class="section-top">
						<h2>Blog Posts</h2>
						<hr>
						<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta laudantium consequuntur voluptatum nostrum? Temporibus dignissimos nesciunt modi dicta id repudiandae.</p>
					</div>
				</div>
			</div>
				<div class="row d-flex justify-content-evenly">

<?php while(have_posts()) : the_post() ?>
					<a class="col-md-3 card blog-item p-2" href="<?php the_permalink() ?>">
						<img class="card-img-top " src="<?php the_field('image') ?>" alt="Title">
						<div class="card-body">
							<h4 class="card-title"><?php the_title(); ?></h4>
							<p class="card-text">
                                <?php the_excerpt(); ?>
                            </p>
						</div>
					</a>
<?php endwhile; ?>
				</div>
		</div>
	</section>

<?php get_footer(); ?>