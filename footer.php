<?php if(! is_page('contact-us')) { ?>
	
<div class="getintouch">
	<div class="container">
		<div class="contentlefttouch">
			<div class="ctasu">
			<h2><?php the_field('cta_heading_footer', 'option'); ?></h2>
			<p><?php the_field('cta_footer_content', 'option'); ?></p>
			</div>
			<!-- <button ></button> -->

			<a href="tel:<?php the_field('phone_numbera', 'option'); ?>" class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="<?php the_field('phone_numbera', 'option'); ?>">
				<span><i class="fa fa-phone"></i><?php the_field('phone_numbera', 'option'); ?><span>
			</a>
		</div>
	</div>
</div>
<?php } ?>

<?php if (is_front_page() || is_page('about') || is_page('services')  ) { ?>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2426.910396706753!2d13.388001115716332!3d52.535055342865995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a851f217b14267%3A0xea53fe8afbc1b1ac!2sBerlin%20Wall%20Memorial!5e0!3m2!1sen!2s!4v1603467582237!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<?php } ?>


<footer>
	<div class="footertop">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h6>Contact</h6>
					<h2><?php the_field('footer_black_top_heading', 'option'); ?></h2>
					<p><?php the_field('fell_free_link', 'option'); ?></p>
					<div class="infoLInks">
						<a href="mailto:<?php the_field('email_company', 'option'); ?>"><?php the_field('email_company', 'option'); ?></a>
						<a href="tel:<?php the_field('phone_numbera', 'option'); ?>"><?php the_field('phone_numbera', 'option'); ?></a>
					</div>
				</div>
				<div class="col-md-4">
					<a href="#" class="letsTalks">
						Let’s Talk
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="mainfooter">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="logocontainer">
						<a href="<?php echo site_url(); ?>">
		                     <?php 
		                        $custom_logo_id = get_theme_mod( 'custom_logo' );
		                        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
		                        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
		                     ?>
		                 </a>
					</div>
					<ul class="socialLInksFooter">
						<li><a href="<?php the_field('facebook', 'option'); ?>">FB</a></li>
						<li><a href="<?php the_field('linkedin', 'option'); ?>">In</a></li>
						<li><a href="<?php the_field('twitter', 'option'); ?>">tw</a></li>
						<li><a href="<?php the_field('ig', 'option'); ?>">ig</a></li>
						<li><a href="<?php the_field('youtube', 'option'); ?>">yt</a></li>
					</ul>
				</div>
				<div class="col-md-8">
					<div class="contaienrmenufooter">
						<div class="menucontainer">
							<h6>Company</h6>
							<?php
			                    wp_nav_menu( array( 
			                        'theme_location' => 'header-menu', 
			                        'container_class' => 'custom-menu-class','container'=> false, ) ); 
			                ?>
						</div>
						<div class="menucontainer">
							<h6>Services</h6>
							<ul>
								<?php 
								    $args = array(  
								        'post_type' => 'services',
								        'post_status' => 'publish',
								    );
								    $loop = new WP_Query( $args );  while ( $loop->have_posts() ) : $loop->the_post(); ?>
										<li>
											<a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</li>
								    <?php endwhile; wp_reset_postdata(); 
								?>
							</ul>
						</div>
						<div class="menucontainer">
							<h6>Policies</h6>
							<ul>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms of use</a></li>
							</ul>
							<div class="joinTeam">
								<h4>Join our team</h4>
								<a href="mailto:<?php the_field('career_email', 'option'); ?>" class="mailjanu"><?php the_field('career_email', 'option'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyrights">
		<div class="container">
			<p>
				<?php the_field('copy_rights_line', 'option'); ?>
			</p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
<script src="<?php echo get_template_directory_uri(); ?>/chamanHutiye.js"></script>
</html>