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
		<div class="jumbotron">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <p> Reven was created by a group of passionate cyclists<br/>who live to ride and dream of big challenges. </p>
    </div>
		<div id='slideshow' class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true"  data-cycle-speed="1000"  data-cycle-timeout="8000" data-cycle-prev="#prev" data-cycle-next="#next" data-cycle-caption="#adv-custom-caption"
    data-cycle-caption-template="Slide {{slideNum}}: {{cycleTitle}}">
			<!-- empty element for caption -->
			<div class="cycle-caption"></div>
			<img src="/wp-content/uploads/2015/06/reven_DM37961_1.jpg" alt="Reven Race Bikes" class="mainImage" data-cycle-title=""/>
			<img src="/wp-content/uploads/2015/06/reven_DSC_4384_1.jpg" alt="Reven Carbon Bikes" class="mainImage" data-cycle-title=""/>
			<img src="/wp-content/uploads/2015/06/reven_DSC_0551.jpg" alt="Reven Bikes Belgium" class="mainImage" data-cycle-title=""/>
			<img src="/wp-content/uploads/2015/06/reven_DSC_5005.jpg" alt="Reven Bikes Belgium" class="mainImage" data-cycle-title=""/>
		</div>
		<!-- empty element for caption -->
        <div id="adv-custom-caption" class="center"></div>
		<div class="slideControl-right">
			<a href="#" id="next" title="Next">&nbsp;</a>
		</div>
		<!-- <div id="heroImageTxtCell" class="txtCell">
		<h2>SLIDE SHOW! CLICK THE ARROWS!</h2><p> THIS HTML BASED TEXT OVERLAY CAN BE DYNAMICALY CREATED: Bacon ipsum dolor sit amet hamburger ball tip ea, dolor pancetta velit swine jerky ribeye do salami consequat prosciutto.</p>
		</div> -->
	</div>
	<div id="primary" class="site-content full-bleed">

		<div id="content" role="main" class="home-page-content">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
            <div class="img-container">
                <img src="/wp-content/uploads/2015/06/reven_IMG_5466_450x450.jpg" class="img-responsive"/>
            </div
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>