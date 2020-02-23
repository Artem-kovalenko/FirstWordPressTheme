<?php 
/*
	Template Name: Portfolio Page
	Template Post Type: page
*/
 ?>
<?php get_header(); ?>
<!-- Start Portfolio Section -->
<section class="portfolio globalBgcColor" id="portfolio">
	<div class="row no-gutters">
		<div class="col-12">
			<div class="portfolio__title">
				<h2 class="global_h2">
					<?php the_field('portfolio_title_1'); ?>
				</h2>
				<h3 class="global_h3">
					<?php the_field('portfolio_title_2'); ?>
				</h3>
				<p class="global_p">
					<?php the_field('portfolio_text'); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="filtersMain">
		<?php
		if( have_rows('filters_repeater') ):
			while ( have_rows('filters_repeater') ) : the_row();
				?>
				<div class="filters">
					<div class="filters__content">
						<p>
							<?php the_sub_field('filters_text'); ?>
						</p>
						<span>
							<i class="fa fa-square" aria-hidden="true"></i>
						</span>
					</div>
				</div>
				<?php
			endwhile;
		else :
		endif;
		?>
	</div>
	<div class="gallery__col-main">
		<div class="gallery__col-1">
			<div class="gallery__row-1">
				<div class="gallery__img-big-1" style="background-image: url(<?php the_field('big_image_1');?>);">
					<div class="img-big-1__innerBlock">
						<a target="_blank" href="">
							<i class="fa fa-arrow-right" aria-hidden="true"></i>
						</a>
						<div class="img-big-1__content">
							<p><?php the_field('big_image_1_text'); ?></p>
							<h3><?php the_field('big_image_1_title'); ?></h3>

						</div>
					</div>
				</div>
			</div>
			<div class="gallery__row-2">
				<?php
				if( have_rows('small_images_repeater_1') ):
					while ( have_rows('small_images_repeater_1') ) : the_row();
						?>
						<div class="gallery__img-small-1" style="background-image: url(<?php the_sub_field('image'); ?>);">
							<div class="img-small-1__innerBlock">
								<a target="_blank" href="">
									<i class="fa fa-arrow-right" aria-hidden="true"></i>
								</a>
								<div class="img-small-1__content">
									<p><?php the_sub_field('image_text'); ?></p>
									<h3><?php the_sub_field('image_title'); ?></h3>
								</div>
							</div>
						</div>
						<?php
					endwhile;
				else :
				endif;
				?>
			</div>
		</div>
		<div class="gallery__col-2">
			<div class="gallery__row-3">
				<?php
				if( have_rows('small_images_repeater_2') ):
					while ( have_rows('small_images_repeater_2') ) : the_row();
						?>
						<div class="gallery__img-small-3" style="background-image: url(<?php the_sub_field('image_2'); ?>);">
							<div class="img-small-3__innerBlock">
								<a target="_blank" href="">
									<i class="fa fa-arrow-right" aria-hidden="true"></i>
								</a>
								<div class="img-small-3__content">
									<p><?php the_sub_field('image_2_text'); ?></p>
									<h3><?php the_sub_field('image_2_title'); ?></h3>
								</div>
							</div>
						</div>
						<?php
					endwhile;
				else :
				endif;
				?>
			</div>
			<div class="gallery__row-4">
				<div class="gallery__img-big-2" style="background-image: url(<?php the_field('big_image_2'); ?>);">
					<div class="img-big-2__innerBlock">
						<a target="_blank" href="">
							<i class="fa fa-arrow-right" aria-hidden="true"></i>
						</a>
						<div class="img-big-2__content">
							<p><?php the_field('big_image_2_text'); ?></p>
							<h3><?php the_field('big_image_2_title'); ?></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Portfolio Section -->

<!-- Start Journey Section -->
<section class="journey globalBgcColor">
	<div class="container ">
		<div class="row">
			<div class="col-12">
				<div class="journey__title">
					<h2 class="global_h2">
						<?php the_field('journey_title_1'); ?>
					</h2>
					<h3 class="global_h3">
						<?php the_field('journey_title_2'); ?>
					</h3>
					<p class="global_p">
						<?php the_field('journey_text'); ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 ">
				<div class="video__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/iphone-img.png" alt="">
					<div class="video__bgc__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/iphone-bg1.jpg" alt="">
						<a href="<?php the_field('video_link'); ?>" target="_blank">
							<i class="fa fa-play" aria-hidden="true"></i>
						</a>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Journey Section -->
<?php get_footer(); ?>
