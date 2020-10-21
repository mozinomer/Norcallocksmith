<?php /* Template Name: About Page */ get_header(); ?>
<div class="aboutcontainer">
	<div class="container">
		<div class="contentaboutContainer">
			<div class="headerAboutCOntent">
				<h6 class="blueHeading">
					 <?php the_field('small_headingServices'); ?>
				</h6>
				<h2 class="underlines">
					<?php the_field('headingServices'); ?>
				</h2>
				<p>
					 <?php the_field('contentServices'); ?>
				</p>
			</div>
		</div>
		<div id="servicesAbout">
			<?php 
			    $args = array(  
			        'post_type' => 'services',
			        'post_status' => 'publish',
			    );
			    $loop = new WP_Query( $args );  while ( $loop->have_posts() ) : $loop->the_post(); ?>
			  		<div class="row">
						<div class="col-md-6">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>
						<div class="col-md-6">
							<div class="contentServicesAbout">
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
								<a href="<?php echo site_url(); ?>/contact-us" class="bluebutton">Contact Us</a>
							</div>
						</div>
					</div>  	
			    <?php endwhile; wp_reset_postdata(); 
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>