<?php get_header(); ?>
<!-- Start Hero Section -->
<section class="hero" id="hero" style="background-image: url(<?php the_field('hero_background_image'); ?>);">
	<div class="hero__title">
		<h1><?php the_field('hero_title'); ?></h1>
		<h2>
			<span class="typedText"><?php the_field('hero_subtitle_1'); ?></span>
			<span class="typedText2"><?php the_field('hero_subtitle_2'); ?></span>
			<span class="typedText3"><?php the_field('hero_subtitle_3'); ?></span>
		</h2>
	</div>
	<a href="" id="scrollBottomBtn">
		<div class="hero__button">
			<div class="hero__button__animate"></div>
		</div>
	</a>
</section>
<!-- End Hero Section -->

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

<!-- Start Blog Section -->
<section  id="blog">
	<div class="container">
		<div class="row">
			<div class="blog__title">
				<h2 class="global_h2">
					<?php the_field('blog_title_1'); ?>
				</h2>
				<h3 class="global_h3">
					<?php the_field('blog_title_2'); ?>
				</h3>
				<p class="global_p">
					<?php the_field('blog_text'); ?>
				</p>
			</div>
		</div>
		<div class="row">
			<?php
			if( have_rows('blog_repeater') ):
				while ( have_rows('blog_repeater') ) : the_row();
					?>
					<div class="col-12 col-md-6 col-lg-6">
						<div class="blog__info">
							<div class="blog__info-img">
								<img src="<?php the_sub_field('image'); ?>" alt="">
							</div>
							<div class="blog__info-text">
								<h3 class="global_h3">
									<?php the_sub_field('title'); ?>
								</h3>
								<ul>
									<li><a href=""><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_sub_field('date'); ?></a></li>
									<li><a href=""><i class="fa fa-user" aria-hidden="true"></i> <?php the_sub_field('name'); ?></a></li>
									<li><a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> <?php the_sub_field('comments_amount'); ?></a></li>
								</ul>
								<p class="global_p">
									<?php the_sub_field('text'); ?>
								</p>
								<a href="<?php the_sub_field('button_link'); ?>"
								class="button" target="_blank"><?php the_sub_field('button_text'); ?></a>
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
</section>
<!-- End Blog Section -->

<!-- Start Contact Section -->
<section class="contact globalBgcColor" id="contact">
	<div class="container-fluid">
		<div class="contact__title">
			<div>
				<h2 class="global_h2">
					<?php the_field('contact_title_1'); ?>
				</h2>
				<h3 class="global_h3">
					<?php the_field('contact_title_2'); ?>
				</h3>
				<p class="global_p">
					<?php the_field('contact_text'); ?>
				</p>
				<ul>
					<li><i class="fa fa-mobile" aria-hidden="true"></i><?php the_field('contact_phone'); ?></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="<?php the_field('contact_email_link'); ?>"><?php the_field('contact_email'); ?></a></li>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php the_field('contact_adress'); ?></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 contact_form_center">
				<div class="row contact__form">
					<div class="col-md-6 col-sm-12">
						<div class="contact__form_text-field">
							<input type="text" placeholder="Name" class="form_control" id="name">
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="contact__form_text-field">
							<input type="email" placeholder="Email" class="form_control" id="email">
						</div>
					</div>
					<div class="col-md-6 col-sm-12"> 
						<div class="contact__form_text-field">
							<input type="tel" placeholder="Contact No" class="form_control" id="phone">
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="contact__form_text-field">
							<input type="text" placeholder="Subject" class="form_control" id="subject">
						</div>
					</div>
					<div class="col-lg-12">
						<textarea placeholder="Message" class="form_control" id="message" ></textarea>
					</div>
				</div>
			</div> 
		</div>
		<input type="button" value="<?php the_field('contact_button_text'); ?>" id="button">
	</div>
</section>
<!-- End Contact Section -->
<?php get_footer(); ?>
