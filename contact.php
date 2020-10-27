<?php /* Template Name: COntact Page */ get_header(); ?>
<div class="contactpage">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="contentcontactPage">
					<h6 class="blueHeading">
						<?php the_title(); ?>
					</h6>
					<h2 class="underlines">
						<?php the_field('headingco'); ?>
					</h2>
					<p class="contentbigger">
						<?php the_field('contentco'); ?>
					</p>
					<ul class="socialinfocompany">
						<li>
							<img src="<?php the_field('phoneco'); ?>">
							<p>
								<?php the_field('phone_numbersco'); ?>
							</p>
						</li>
						<li>
							<img src="<?php the_field('email_iconco'); ?>">
							<p>
								<?php the_field('email_addresses_co'); ?>
							</p>
						</li>
						<li>
							<img src="<?php the_field('company_addresscoasd'); ?>">
							<p>
								<?php the_field('company_addressco'); ?>
							</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<p>
					<?php the_field('content_for_form'); ?>
				</p>
				<div class="formcontaienr">
					<?php echo do_shortcode('[contact-form-7 id="212" title="C0N7@C7 P@G3"]') ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>