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



<?php get_footer(); ?>