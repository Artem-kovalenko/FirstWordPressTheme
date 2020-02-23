<?php 
/*
	Template Name: Pricing Page
	Template Post Type: page
*/
 ?>
<?php get_header(); ?>
<!-- Start Packages Section -->
<section class="packages" id="packages">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="packages__title">
					<h2 class="global_h2">
						<?php the_field('packages_title_1'); ?>
					</h2>
					<h3 class="global_h3">
						<?php the_field('packages_title_2'); ?>
					</h3>
					<p class="global_p">
						<?php the_field('packages_text'); ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="packages__content">
				<?php
				if( have_rows('packages_offer_repeater') ):
					while ( have_rows('packages_offer_repeater') ) : the_row();
						?>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="packages__block">
								<div class="packages__type ">
									<h4><?php the_sub_field('title'); ?></h4>
									<div class="packages__price">
										<span class="dollar">$</span>
										<span class="number"><?php the_sub_field('price'); ?></span>
										<span class="text"><?php the_sub_field('offer_duration'); ?></span>
									</div>
									<div class="packages__rating">
										<i class="fa fa-star-o" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="packages__info">
									<?php
									if( have_rows('text_repeater') ):
										while ( have_rows('text_repeater') ) : the_row();
											?>
											<p><i class="fa fa-check" aria-hidden="true"></i><?php the_sub_field('text'); ?></p>
											<?php
										endwhile;
									else :
									endif;
									?>
								</div>
								<div class="packages__buttonRelative">
									<a href="<?php the_sub_field('offer_button_link'); ?>" class="packages__button" target="_blank"><?php the_sub_field('offer_button_text'); ?></a>
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
	</div>
</section>
<!-- End Packages Section -->

<!-- Start Partners Section -->
<section class="globalBgcColor partners" id="partners">
	<div class="container">
		<div class="row partners__row">
			<div class="col-12 col-md-6 col-lg-6">
				<div class="partners__content">
					<div class="partners__title">
						<h3 class="global_h3"><?php the_field('partners_title'); ?></h3>
						<p class="global_p"><?php the_field('partners_text'); ?></p>
						<a href="<?php the_field('partners_button_link'); ?>" class="button" target="_blank"><?php the_field('partners_button_text'); ?></a>
					</div>
				</div>
			</div>
			<div class="main__col col-12 col-md-6 col-lg6">
				<?php
				if( have_rows('partnerst_imgs') ):
					while ( have_rows('partnerst_imgs') ) : the_row();
						?>
						<div class="col-md-6 col-sm-6">
							<div class="partners__img">
								<img src="<?php the_sub_field('image'); ?>" alt="">
							</div>
						</div>
						<?php
					endwhile;
				else :
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<!-- End Partners Section -->
<?php get_footer(); ?>
