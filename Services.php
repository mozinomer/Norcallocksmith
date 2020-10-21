<?php /* Template Name: Services Page */ get_header(); ?>
<div class="serviceContaienr">
	<div class="AboutSection">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contentAboutSection">
						<h6 class="blueHeading">
							 <?php the_field('small_headingServices'); ?>
						</h6>
						<h2 class="underlines">
							 <?php the_field('small_headingServices'); ?>
						</h2>
						<p>
							 <?php the_field('small_headingServices'); ?>
						</p>
						<a href=" <?php echo site_url(); ?>/contact-us">
							Contact us
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<img src="<?php the_field('small_headingServices'); ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="<?php the_field('small_headingServices'); ?>">
				</div>
				<div class="col-md-6">
					<h2 class="underlines">
						<?php the_field('small_headingServices'); ?>
					</h2>
					<p>
						<?php the_field('small_headingServices'); ?>
					</p>
					<ul>
						<?php if( have_rows('repeater_field_name') ): while( have_rows('repeater_field_name') ) : the_row(); ?>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images.14.png">
								<?php the_sub_field('small_headingServices'); ?>
							</li>
						<?php endwhile; else : endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>