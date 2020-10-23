<?php /* Template Name: Resources Page */ get_header(); ?>
<div class="serviceContaienr">
	<div class="AboutSection">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contentAboutSection">
						<h6 class="blueHeading">
							 <?php the_field('small_headingR'); ?>
						</h6>
						<h2 class="underlines">
							 <?php the_field('headingR'); ?>
						</h2>
						<p>
							 <?php the_field('contentR'); ?>
						</p>
						<a class="bluebutton" href=" <?php echo site_url(); ?>/contact-us">
							Contact us
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<img src="<?php the_field('image_R'); ?>">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- HOW TO VIDEOS -->
<section class="htv-section">
	<div class="container">
		<h1><?php the_field('headingHTV'); ?></h3>
		<div class="htv-content">
			<?php if( have_rows('videos') ): while( have_rows('videos') ) : the_row(); ?>
			<div class="htv-box">
				<div class="htv-img">
					<img src="<?php the_sub_field('display_image'); ?>" alt="">
					<div class="htv-img-overlay">
						<a data-fancybox="" href="<?php the_sub_field('youtube_link'); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/play.png" alt="">
						</a>
					</div>
				</div>
				<h6 class="htv-box-title"><?php the_sub_field('titleHVT'); ?></h6>
			</div>
			<?php endwhile; else : endif; ?>
		</div>
	</div>
</section>

<!-- Lock Manufactures -->
<section class="lmf-section">
	<div class="container">
		<h6 class="site-cus-title"><?php the_field('headingLOCK'); ?></h6>
		<div class="lmf-content">
			<?php if( have_rows('images_lock') ): while( have_rows('images_lock') ) : the_row(); ?>
			<div class="lmf-img">
				<img src="<?php the_sub_field('imageasdqwe'); ?>" alt="">
			</div>
			<?php endwhile; else : endif; ?>
		</div>
	</div>	
</section>

<!-- Local Services -->
<section class="lss-section">
		<h6 class="site-cus-title"><?php the_field('headinglcoal'); ?></h6>
		<h2 class="site-cus-extra-title"><?php the_field('sub_headingLocal'); ?></h2>	
		<div class="lss-content">
			<div class="lss-box">
				<img src="<?php echo get_template_directory_uri(); ?>/images/lss-img.png" alt="">
				<h3><?php the_field('heading_left_box'); ?></h3>
				<p><?php the_field('content_left_box'); ?></p>
				<button class="lss-box-btn"><?php the_field('buuton_textLiasd'); ?></button>
			</div>
			<div class="lss-box">
				<h3><?php the_field('right_heading'); ?></h3>
				<p><?php the_field('content_right_box'); ?></p>
				<button class="lss-box-btn"><?php the_field('button_right_boxa'); ?></button>
			</div>
		</div>
</section>   

	  

<?php get_footer(); ?>