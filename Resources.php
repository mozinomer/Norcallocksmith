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
		<h1>HOW TO VIDEOS</h3>
		<div class="htv-content">
			
			<div class="htv-box">
				<div class="htv-img">
					<img src="<?php echo get_template_directory_uri(); ?>/images/v1.png" alt="">
					<div class="htv-img-overlay">
						<a data-fancybox="" href="https://youtu.be/IdbyTjI1ZFo"><img src="<?php echo get_template_directory_uri(); ?>/images/play.png" alt=""></a>
					</div>
				</div>
				<h6 class="htv-box-title">How To Reset a Kwikset Smart Key Cylinder When No Current Key is Present</h6>
			</div>
			<div class="htv-box">
				<div class="htv-img">
					<img src="<?php echo get_template_directory_uri(); ?>/images/v1.png" alt="">
					<div class="htv-img-overlay">
						<a data-fancybox="" href="https://youtu.be/IdbyTjI1ZFo"><img src="<?php echo get_template_directory_uri(); ?>/images/play.png" alt=""></a>
					</div>
				</div>
				<h6 class="htv-box-title">How To Reset a Kwikset Smart Key Cylinder When No Current Key is Present</h6>
			</div>
			<div class="htv-box">
				<div class="htv-img">
					<img src="<?php echo get_template_directory_uri(); ?>/images/v1.png" alt="">
					<div class="htv-img-overlay">
						<a data-fancybox="" href="https://youtu.be/IdbyTjI1ZFo"><img src="<?php echo get_template_directory_uri(); ?>/images/play.png" alt=""></a>
					</div>
				</div>
				<h6 class="htv-box-title">How To Reset a Kwikset Smart Key Cylinder When No Current Key is Present</h6>
			</div>


		</div>
	</div>
</section>

<!-- Lock Manufactures -->
<section class="lmf-section">
	<div class="container">
		<h6 class="site-cus-title">Lock Manufactures</h6>
		<div class="lmf-content">
			
			<div class="lmf-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/l1.png" alt="">
			</div>
			<div class="lmf-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/l2.png" alt="">
			</div>
			<div class="lmf-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/l3.png" alt="">
			</div>
			<div class="lmf-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/l4.png" alt="">
			</div>

		</div>
	</div>	
</section>

<!-- Local Services -->
<section class="lss-section">
		<h6 class="site-cus-title">Other services</h6>
		<h2 class="site-cus-extra-title">Local Services</h2>	
		<div class="lss-content">
			<div class="lss-box">
				<img src="<?php echo get_template_directory_uri(); ?>/images/lss-img.png" alt="">
				<h3>Carpet Cleaning Roseville, CA </h3>
				<p>EcoSafe is a locally owned and operated carpet and upholstery cleaning company I highly recommend them. Their "green" cleaning products will protect your family's health and the environment while giving you the most thorough cleaning ever.</p>
				<button class="lss-box-btn">Learn More</button>
			</div>
			<div class="lss-box">
				<h3>Child Safety Service Roseville CA</h3>
				<p>Erics Child Safety Service is locally owned and operated. They are fully equiped to deal with homes as well as institutional facilities such as day cares etc. Pool Fencing is also available. I have personally worked on job sites with Eric and would refer him to my family and friends.</p>
				<button class="lss-box-btn">Learn More</button>
			</div>
		</div>
</section>   

<!-- <div class="bc-buy-button" id="bc-sku-PM1202" style="width:295px;height:435px">
        <iframe
          src="https://ad.buybutton.store/card/v1.5/fsapknws37?action=checkout&open_in=popup&src=buy_button&btn_text=Buy Now&title_color=f00&price_color=3a3a3c&ga_id=null&sku=PM1202"
          border="0"
          scrolling="no"
          horizontalscrolling="no"
          verticalscrolling="no"
          allowtransparency="true"
          width="100%"
          height="100%"
          style="overflow: hidden; border: none; width=100%; height=100%;">
        </iframe>
	  </div> -->
	  

<?php get_footer(); ?>