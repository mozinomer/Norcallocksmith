<?php /* Template Name: blog Page */ get_header(); ?>

<div class="aboutcontainer">
	<div class="container">
		<div id="servicesAbout">
			<?php 
			    $args = array(  
			        'post_type' => 'post',
			    );
			    $loop = new WP_Query( $args );  while ( $loop->have_posts() ) : $loop->the_post(); ?>
			  		<div class="row">
						<div class="col-md-6">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>
						<div class="col-md-6">
							<div class="contentServicesAbout">
								<h3><?php the_title(); ?></h3>
								<h6 class="authorInforDate">
									<?php echo get_the_date(); ?> | <?php echo get_the_time(); ?>
								</h6>
								<div class="contentBlogPost"><?php the_content(); ?></div>
								<a href="<?php the_permalink(); ?>" class="bluebutton">Read more</a>
							</div>
						</div>
					</div>  	
			    <?php endwhile; wp_reset_postdata(); 
			?>
		</div>
	</div>
</div>


<?php get_footer(); ?>
