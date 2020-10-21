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
							 <?php the_field('headingServices'); ?>
						</h2>
						<p>
							 <?php the_field('contentServices'); ?>
						</p>
						<a class="bluebutton" href=" <?php echo site_url(); ?>/contact-us">
							Contact us
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<img src="<?php the_field('imageServices'); ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img class="contentAboutSectionS" src="<?php the_field('image_Services2'); ?>">
				</div>
				<div class="col-md-6">
					<div class="contentsection2about">
						<h2 class="underlines">
							<?php the_field('headingServices2'); ?>
						</h2>
						<p>
							<?php the_field('contentServices2'); ?>
						</p>
						<ul>
							<?php if( have_rows('list_itemsServices') ): while( have_rows('list_itemsServices') ) : the_row(); ?>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/images/14.png">
									<?php the_sub_field('itemServices'); ?>
								</li>
							<?php endwhile; else : endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="TeamSectionAboutPage">
		<div class="teamSection">
			<div class="container">
				<h6>OUR TEAM</h6>
				<h2>Meet Our Experts</h2>
				<div class="teamslider">
					<?php 
					    $args = array(  
					        'post_type' => 'team',
					        'post_status' => 'publish',
					    );
					    $loop = new WP_Query( $args );  while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="teammember">
								<div class="imageAndSocialCOntainer">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>">
									<div class="socialMediaCOntentTeam">
										<a href="<?php the_field('facebookLiink'); ?>"><i class="fa fa-facebook"></i></a>
										<a href="?php the_field('linkedin_link'); ?>"><i class="fa fa-linkedin"></i></a>
										<a href="?php the_field('twitter_link'); ?>"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
								<h3><?php the_title(); ?></h3>
								<span class="designation"><?php the_field('designation'); ?> </span>
							</div>
					    <?php endwhile; wp_reset_postdata(); 
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>