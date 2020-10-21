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
</div>
</div>
<?php get_footer(); ?>