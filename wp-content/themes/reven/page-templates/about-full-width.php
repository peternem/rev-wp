<?php
/**
 * Template Name: About - Full-width Page Template, No Sidebar
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
		<img src="<?php bloginfo('template_directory');?>/images/slideshow-home/reven_main_image_04.jpg" style="width: 100%;" alt="Reven on Guardsman Pass near Park City, Utah" class="mainImage"/>
	</div>
	<div id="mainContent">
		<div class="imageCenter clearfix">
			<img src="<?php bloginfo('template_directory');?>/images/lifestyle/IMG_4185_TWEAKED_485x356.jpg" alt="Ride Reven" class="imageStyleLeft"/>
			<img src="<?php bloginfo('template_directory');?>/images/lifestyle/DSCN1003_485x386.jpg" alt="Reven Jack" class="imageStyleLeft"/>
			<img src="<?php bloginfo('template_directory');?>/images/lifestyle/IMG_4234_TWEAKED_155x130.jpg" alt="Ride Reven Bikes" class="imageStyleUpperRh"/>
			<img src="<?php bloginfo('template_directory');?>/images/lifestyle/DSCN0832_155x130.jpg" alt="" class="imageStyleLowerRh"/>
		</div>
	</div>
	<div id="primary" class="site-content">

		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>