<?php 
/*
	Template Name: About Page
	Template Post Type: page
*/
 ?>
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
				<img src=" <?php echo bloginfo('template_url'); ?>/assets/img/about-img.jpg" alt="#">
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="about__skillbox" >
				<div class="about__main-title">
					<h2 class="global_h2">Basic info about us</h2>
					<h3 class="global_h3">We provide high quality and cost effective services!</h3>
					<p class="global_p">Awaza is a design studio founded in London. Nowadays, we've grown and expanded our services, and have become a multinational firm, offering a variety of services and solutions Worldwide.</p>
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
					<h2 class="global_h2">Heros of our company</h2>
					<h3 class="global_h3">Our Services</h3>
					<p class="global_p">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.</p>
				</div>
			</div>
		</div>
		<div class="row services__info">
			<div class="col-12 col-md-6 col-lg-4 services__info__content hover1">
				<div class="services__icon">
					<i class="fa fa-balance-scale" aria-hidden="true"></i>
				</div>
				<h3 class="global_h3">
					Trendy Design
				</h3>
				<p class="global_p">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.
				</p>
				<a class="redBtnColor" href="" target="_blank">
					Learn More
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-4 services__info__content hover2">
				<div class="services__icon">					
					<i class="fa fa-window-restore" aria-hidden="true"></i>
				</div>
				<h3 class="global_h3">
					Trendy Design
				</h3>
				<p class="global_p">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.
				</p>
				<a class="yellowBtnColor" href="" target="_blank">
					Learn More
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-4 services__info__content hover3">
				<div class="services__icon">
					<i class="fa fa-desktop" aria-hidden="true"></i>
				</div>
				<h3 class="global_h3">
					Trendy Design
				</h3>
				<p class="global_p">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices max
					imus.
				</p>
				<a class="blackBtnColor" href="" target="_blank">
					Learn More
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-4 services__info__content hover2">
				<div class="services__icon">
					<i class="fa fa-database" aria-hidden="true"></i>
				</div>
				<h3 class="global_h3">
					Trendy Design
				</h3>
				<p class="global_p">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.
				</p>
				<a class="yellowBtnColor" href="" target="_blank">
					Learn More
				</a>	
			</div>
			<div class="col-12 col-md-6  col-lg-4 services__info__content hover3">
				<div class="services__icon">
					<i class="fa fa-play" aria-hidden="true"></i>
				</div>
				<h3 class="global_h3">
					Trendy Design
				</h3>
				<p class="global_p">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.
				</p>
				<a class="blackBtnColor" href="" target="_blank">
					Learn More
				</a>	
			</div>
			<div class="col-12 col-md-6 col-lg-4 services__info__content hover1">
				<div class="services__icon">
					<i class="fa fa-gift" aria-hidden="true"></i>
				</div>
				<h3 class="global_h3">
					Trendy Design
				</h3>
				<p class="global_p">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.
				</p>
				<a class="redBtnColor" href="" target="_blank">
					Learn More 
				</a>
			</div>
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
					<h2 class="global_h2">
						Heros of our company
					</h2>
					<h3 class="global_h3">
						Creative Team
					</h3>
					<p class="global_p">
						Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.
					</p>
				</div>
			</div>
		</div>
		<div class="slider" >
			<div class="slide">
				<div class="creative__team">
					<div class="creative__team__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team1.jpg" alt="">
					</div>

					<h4>David Melan</h4>
					<p>Creative Lead</p>
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
			<div class="slide">
				<div class="creative__team">
					<div class="creative__team__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team2.jpg" alt="">
					</div>
					<h4>Maria Jhonson</h4>
					<p>Lead Designer</p>
					<span></span>
					<ul>
						<li>
							<a target="_blank" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</li>
						<li>
							<a target="_blank" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</li>
						<li>
							<a target="_blank" href=""><i class="fa fa-google-plus" aria-hidden="true"></i>	</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="slide">
				<div class="creative__team">
					<div class="creative__team__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team3.jpg" alt="">
					</div>

					<h4>Alex Walkin</h4>
					<p>Marketing Head</p>
					<span></span>
					<ul>
						<li>
							<a target="_blank" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</li>
						<li>
							<a target="_blank" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</li>
						<li>
							<a target="_blank" href=""><i class="fa fa-google-plus" aria-hidden="true"></i>	</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="slide">
				<div class="creative__team">
					<div class="creative__team__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team4.jpg" alt="">
					</div>
					<h4>Jessica Jhonson</h4>
					<p>Creative Lead</p>
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
			<div class="slide">
				<div class="creative__team">
					<div class="creative__team__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team1.jpg" alt="">
					</div>

					<h4>David Melan</h4>
					<p>Creative Lead</p>
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

			<div class="slide">
				<div class="creative__team">
					<div class="creative__team__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team2.jpg" alt="">
					</div>

					<h4>Maria Jhonson</h4>
					<p>Lead Designer</p>
					<span></span>
					<ul>
						<li>
							<a target="_blank" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</li>
						<li>
							<a target="_blank" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</li>
						<li>
							<a target="_blank" href=""><i class="fa fa-google-plus" aria-hidden="true"></i>	</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="slide">
				<div class="creative__team">
					<div class="creative__team__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team3.jpg" alt="">
					</div>

					<h4>Alex Walkin</h4>
					<p>Marketing Head</p>
					<span></span>
					<ul>
						<li>
							<a target="_blank" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</li>
						<li>
							<a target="_blank" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</li>
						<li>
							<a target="_blank" href=""><i class="fa fa-google-plus" aria-hidden="true"></i>	</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="slide">
				<div class="creative__team">
					<div class="creative__team__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team4.jpg" alt="">
					</div>

					<h4>Jessica Jhonson</h4>
					<p>Creative Lead</p>
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
		</div>
	</div>
</section>
<!-- End Creative Section -->
<?php get_footer(); ?>
