<?php 
/* Template Name: PORTFOLIO PAGE*/
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

	<!-- portfolio section -->
	<section id="portfolio" class="section-box">
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
			<div class="row justify-content-center">
			
			<?php $query = new WP_Query('post_type=gallery'); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

				<div class="col-md-4 portfolio-item">
					<a href="<?php the_field('gallery_item_big_image'); ?>" class="portfolio-link" data-lightbox="<?php the_field('gallery_item_category'); ?>"
						data-title="<?php the_field('gallery_item_description'); ?>">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fas fa-search fa-2x"></i>
							</div>
						</div>
						<img src="<?php the_field('gallery_item_image'); ?>" alt="" class="img-fluid">
					</a>
					<div class="portfolio-caption">
						<h4><?php the_field('gallery_item_heading'); ?></h4>
						<p class="text-muted">
						<?php the_field('gallery_item_mute_heading'); ?>
						</p>
					</div>
				</div>

				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
