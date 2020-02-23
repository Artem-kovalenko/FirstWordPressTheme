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

<!-- Start Blog Section -->
<section id="blog">
	<div class="container" id="toBlock">
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
