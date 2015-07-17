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
            <div class="image-left">
              <img src="/wp-content/uploads/2015/06/reven_IMG_4185_365x365.jpg" alt="Ride Reven" class="img-responsive"/>
            </div>
            <div class="image-middle">
              <img src="/wp-content/uploads/2015/06/DSCN1003_365x365.jpg" title="Ride Reven MTB's" alt="Ride Reven MTB" class="img-responsive"/>
            </div>
            <div class="image-right">
                <img src="/wp-content/uploads/2015/06/mosesCoulee-PalisadesRd_365x365.jpg"  alt="Ride Reven Bikes" class="img-responsive"/>
            </div>
        </div> 
	</div>
    <div class="breadcrumb-container">
        <?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
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