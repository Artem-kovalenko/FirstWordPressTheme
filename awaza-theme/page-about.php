<?php 
/*
	Template Name: About Page
	Template Post Type: page
*/
 ?>
<?php get_header(); ?>
<!-- Start About Section -->
<section class="about" id="about">
	<div class="row align-items-center no-gutters">
		<div class="col-12 col-lg-6">
			<div class="about__img">
				<img src="<?php the_field('about_image'); ?>" alt="#">
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="about__skillbox" >
				<div class="about__main-title">
					<h2 class="global_h2"><?php the_field('about_title_1'); ?></h2>
					<h3 class="global_h3"><?php the_field('about_title_2'); ?></h3>
					<p class="global_p"><?php the_field('about_text'); ?></p>
				</div>
				<ul>
					<li class="progress">
						<h6>
							Mobile app designs 
							<span>
								<b>
									<span class="counter">95</span>%
								</b>
							</span>
						</h6>
					</li>
					<div class="progress-bar">
						<div class="progress-bar-2"></div>
					</div>
					<li class="progress">
						<h6>
							Design And Branding
							<span>
								<b >
									<span class="counter">88</span>%
								</b>
							</span>
						</h6>
					</li>
					<div class="progress-bar">
						<div class="progress-bar-3"></div>
					</div>
					<li class="progress">
						<h6>
							Custom Web Solutions
							<span>
								<b>
									<span class="counter">83</span>%
								</b>
							</span> 
						</h6>
					</li>
					<div class="progress-bar">
						<div class="progress-bar-4"></div>
					</div>
					<li class="progress">
						<h6>
							Risk management
							<span>
								<b>
									<span class="counter">91</span>%
								</b>
							</span>
						</h6>
					</li>
					<div class="progress-bar">
						<div class="progress-bar-5"></div>
					</div>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- End About Section -->

<!-- Start Services Section -->
<section class="services globalBgcColor" id="services">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="services__title">
					<h2 class="global_h2"><?php the_field('services_title_1'); ?></h2>
					<h3 class="global_h3"><?php the_field('services_title_2'); ?></h3>
					<p class="global_p"><?php the_field('services_text'); ?></p>
				</div>
			</div>
		</div>
		<div class="row services__info">
			<?php
			if( have_rows('services_info') ):
				while ( have_rows('services_info') ) : the_row();
					?>
					<div class="col-12 col-md-6 col-lg-4 services__info__content <?php the_sub_field('hover_color'); ?>">
						<div class="services__icon">
							<?php the_sub_field('icon'); ?>
						</div>
						<h3 class="global_h3">	
							<?php the_sub_field('title'); ?>
						</h3>
						<p class="global_p">
							<?php the_sub_field('text'); ?>
						</p>
						<a class="<?php the_sub_field('color_of_button'); ?>" href="" target="_blank">
							Learn More
						</a>
					</div>
					<?php
				endwhile;
			else :
			endif;
			?>
		</div>
	</div>
</section>
<!-- End Services Section -->

<!-- Start Creative Section -->
<section class="creative" id="creative">
	<div class="container">
		<div class="row creative__info">
			<div class="col-12">
				<div class="creative__title">
					<h2 class="global_h2"><?php the_field('creative_title_1'); ?></h2>
					<h3 class="global_h3"><?php the_field('creative_title_2'); ?></h3>
					<p class="global_p"><?php the_field('creative_text'); ?></p>
				</div>
			</div>
		</div>
		<div class="slider" >
			<?php
			if( have_rows('slider') ):
				while ( have_rows('slider') ) : the_row();
					?>
					<div class="slide">
						<div class="creative__team">
							<div class="creative__team__img">
								<img src="<?php the_sub_field('slide_img'); ?>" alt="">
							</div>
							<h4><?php the_sub_field('slide_name'); ?></h4>
							<p><?php the_sub_field('slide_skill'); ?></p>
							<span></span>
							<ul>
								<li>
									<a target="_blank" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
								</li>
								<li>
									<a target="_blank" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
								</li>
								<li>
									<a target="_blank" href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<?php
				endwhile;
			else :
			endif;
			?>
		</div>
	</div>
</section>
<!-- End Creative Section -->
<?php get_footer(); ?>
