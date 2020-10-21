<?php /* Template Name: Home Page */ get_header(); ?>

<div class="aboutSection">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="<?php the_field('imageHA'); ?>">
			</div>
			<div class="col-md-6">
				<div class="contentabout">
					<h6><?php the_field('sub_headingHA'); ?></h6>
					<h2><?php the_field('headingHA'); ?></h2>
					<p><?php the_field('content_pargraph_1'); ?></p>
					<p><?php the_field('content_para_2'); ?></p>
					<a href="<?php the_field('button_linkHA'); ?>" class="bluebutton"><?php the_field('button_textHA'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="whatwedo">
	<div class="container">
		<h6><?php the_field('subheadingWh'); ?></h6>
		<h2><?php the_field('headingWH'); ?></h2>
		<p><?php the_field('contentWH'); ?></p>
		<a href="<?php the_field('button_linkWH'); ?>" class="bluebutton"><?php the_field('button_textWH'); ?></a>
		<div class="sliderCOntainerwhatwedo">
			<?php 
			    $args = array(  
			        'post_type' => 'services',
			        'post_status' => 'publish',
			    );
			    $loop = new WP_Query( $args );  while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="slideWhat">
						<div class="imgaeCOntainerwhat">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>
						<div class="contentWhatSlider">
							<h3><?php the_title(); ?></h3>
							<div class="contentCOntainerServiceHOmepage">
								<?php the_content(); ?>
							</div>
							<a href="#">Read More</a>
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); 
			?>
		</div>
	</div>
</div>
<div class="bannerinnerCTA" style="background: url('<?php the_field('banner_backgroundCTA'); ?>');">
	<div class="contaienr">
		<div class="contentcontainerCTA">
			<img src="<?php the_field('banner_iconCTA'); ?>">
			<p><?php the_field('banner_contentCTA'); ?></p>
			<a href="<?php the_field('phone_numbera', 'option'); ?>"><i class="fa fa-phone"></i><?php the_field('phone_numbera', 'option'); ?></a>
		</div>
	</div>
</div>
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
<div class="keyfeautres">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="keyFeaturesleft">
					<h2>Our Key Features</h2>
					<ul>
						<li>Our Technicians are highly trained in residential and business locksmithing techniques.</li>
						<li>Our service techs always present themselves in a professional fashion including a uniform.</li>
						<li>Our locskmiths carry current and valid Locksmithing Licenses.</li>
						<li>Our vans are marked with our name, phone number and Locksmithing License number.</li>
					</ul>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="feelFreeToContact">
					<img src="<?php echo get_template_directory_uri(); ?>/images/6.png">
					<h2>Fast Response Time Guaranteed</h2>
					<a href="tel:916-632-3400" class="teleNumber">916-632-3400</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="accessories">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="contentaccessories">
					<h6><?php the_field('sub_headingA'); ?></h6>
					<h2><?php the_field('headingAc'); ?></h2>
					<p><?php the_field('contentAc'); ?></p>
					<a href="<?php the_field('button_linkAC'); ?>" class="bluebutton"><?php the_field('button_textAC'); ?></a>
				</div>
			</div>
			<div class="col-md-8">
				<img src="<?php the_field('image_AC'); ?>">
			</div>
		</div>
	</div>
</div>
<div class="testimonials">
	<div class="container">
		<h6><?php the_field('group_headingtest'); ?></h6>
		<h2><?php the_field('client_headingTest'); ?></h2>
		<div class="sliderCOntainertestimonials">
			<?php if( have_rows('testimonial') ): while( have_rows('testimonial') ) : the_row(); ?>
			<div class="slideItemtestimonials">
				<div class="innerCOntainerslider">
					<img src="<?php the_sub_field('imagetest'); ?>">
					<h6 class="namePerson"><?php the_sub_field('name_test'); ?></h6>
					<p class="designatedPerson"><?php the_sub_field('designationtest'); ?></p>
					<p class="testimonialreview">“<?php the_sub_field('reviewtest'); ?>“</p>
				</div>
			</div>
			<?php endwhile; else : endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>