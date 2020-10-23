<?php get_header(); ?>

<div class="singlePageBanner" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="container">
		<h2><?php the_title(); ?></h2>
		<p><?php echo get_the_date(); ?> | <?php echo get_the_time(); ?></p>
	</div>
</div>
<div class="blogcontent">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php the_content(); ?>
			</div>
			<div class="col-md-4">
				<div class="searchFrom">
					
				</div>
				<div class="recentPostContainer">
					<h4>
						Recent Article
					</h4>
					<ul>
					<?php 
				    $args = array( 'post_type' => 'post', 'posts_per_page' => 6 ); $loop = new WP_Query( $args );  while ( $loop->have_posts() ) : $loop->the_post(); ?>
				    	<li>
				    		<h5><?php the_title(); ?></h5>
				    		<p><?php echo get_the_date(); ?></p>
				    	</li>
				    <?php endwhile; wp_reset_postdata(); ?>
				    </ul>
				</div>
				<div class="newsletterForm">
					<?php echo do_shortcode('[contact-form-7 id="183" title="Contact form 1"]') ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>