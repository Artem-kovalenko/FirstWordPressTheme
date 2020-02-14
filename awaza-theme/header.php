<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>Awaza</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="https://use.fontawesome.com/2df7266bbc.js"></script>

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<!-- Start preloader -->
	<div class="preloader">
		<div class="preloader__loading"></div>
	</div>
	<!-- End preloader -->

	<!-- Start Header -->
	<header class="header">
		<a href="<?php echo home_url(); ?>" class="header__logo"></a>
		<nav class="header__nav">
			<ul>
				<li><a class="header__nav__a anchor" href="#hero">home</a></li>
				<li><a class="header__nav__a anchor" href="#about">about</a></li>
				<li><a class="header__nav__a anchor" href="#creative">team</a></li>
				<li><a class="header__nav__a anchor" href="#portfolio">work</a></li>
				<li><a class="header__nav__a anchor" href="#packages">pricing</a></li>
				<li><a class="header__nav__a anchor" href="#blog">blog</a></li>
				<li><a class="header__nav__a anchor" href="#contact">contact</a></li>
				
				<ul class="icons">
					<li>
						<a target="_blank" class="header__nav__a" href="">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a target="_blank" class="header__nav__a" href=""><i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a target="_blank" class="header__nav__a" href=""><i class="fa fa-linkedin" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</ul>
		</nav>
		<a href="" class="burger " id="burger">
			<span class="burger__menu"></span>
			<span class="burger__menu"></span>
			<span class="burger__menu"></span>
		</a>
		<div class="burger__navigation_menu">
			<div class="container">
				<div class="burger__navigation_menu__closeBtn">
					<a href="" class="burgerClose"><i class="fa fa-times" aria-hidden="true"></i></a>
				</div>
				<div class="row text-center">
					<div class="col-12">
						<div class="burger__navigation_menu__img">
							<img src="http://www.themesindustry.com/html/awaza-2019/images/side-logo-black.png" alt="">
						</div>
					</div>
					<div class="navigation__container">
						<div class="col-6">
							<a href="#hero" class="anchor close__nav">
								<div class="navigation">
									<span>01.</span>
									Home
								</div>
							</a>
						</div>
						<div class="col-6">
							<a href="#about" class="anchor close__nav">
								<div class="navigation">
									<span>02.</span>
									About
								</div>
							</a>
						</div>
						<div class="col-6">
							<a href="#creative" class="anchor close__nav">
								<div class="navigation">
									<span>03.</span>
									Team
								</div>
							</a>
						</div>
						<div class="col-6">
							<a href="#portfolio" class="anchor close__nav">
								<div class="navigation">
									<span>04.</span>
									Work
								</div>
							</a>
						</div>
						<div class="col-6">
							<a href="#packages" class="anchor close__nav">
								<div class="navigation">
									<span>05.</span>
									Pricing
								</div>
							</a>
						</div>
						<div class="col-6">
							<a href="#">
								<div class="navigation">
									<span>06.</span>
									Client
								</div>
							</a>
						</div>
						<div class="col-6">
							<a href="#blog" class="anchor close__nav">
								<div class="navigation ">
									<span>07.</span>
									Blog
								</div>
							</a>
						</div>
						<div class="col-6">
							<a href="#contact" class="anchor close__nav">
								<div class="navigation">
									<span>08.</span>
									Contact
								</div>
							</a>
						</div>
						<div class="findUs">
							<ul>
								<li><a target="_blank" class="facebook" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a target="_blank" class="twitter" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a target="_blank" class="linkedin" href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a target="_blank" class="google" href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->