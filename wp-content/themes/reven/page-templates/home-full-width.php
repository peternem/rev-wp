<?php
/**
 * Template Name: Home - Full-width Page Template, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div id="heroImage">
		<div class="slideControl-left">
			<a href="#" id="prev" title="Previous">&nbsp;</a>
		</div>
		<div id='slideshow' class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true"  data-cycle-speed="1000"  data-cycle-timeout="8000" data-cycle-prev="#prev" data-cycle-next="#next">
			<!-- empty element for caption -->
			<div class="cycle-caption"></div>
			<img src="<?php bloginfo('template_directory');?>/images/slideshow-home/reven_main_hero_image_940x425.jpg" alt="Reven Race Bikes" class="mainImage"/>
			<img src="<?php bloginfo('template_directory');?>/images/slideshow-home/road_grafiti_quote_slide_940x425.jpg" alt="Reven Carbon Bikes" class="mainImage"/>
			<img src="<?php bloginfo('template_directory');?>/images/slideshow-home/IMG_4185_slide_940x425.jpg" alt="Reven Bikes Belgium" class="mainImage"/>
			<img src="<?php bloginfo('template_directory');?>/images/slideshow-home/IMG_4194_940x425.jpg" alt="Reven Bikes Belgium" class="mainImage"/>
		</div>
		<div class="slideControl-right">
			<a href="#" id="next" title="Next">&nbsp;</a>
		</div>
		<!-- <div id="heroImageTxtCell" class="txtCell">
		<h2>SLIDE SHOW! CLICK THE ARROWS!</h2><p> THIS HTML BASED TEXT OVERLAY CAN BE DYNAMICALY CREATED: Bacon ipsum dolor sit amet hamburger ball tip ea, dolor pancetta velit swine jerky ribeye do salami consequat prosciutto.</p>
		</div> -->
	</div>
	<div id="primary" class="site-content full-bleed">

		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>