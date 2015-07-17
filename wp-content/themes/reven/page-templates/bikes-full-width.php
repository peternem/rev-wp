<?php
/**
 * Template Name: Bikes - Full-width Page Template, No Sidebar
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

get_header();
?>
<div id="heroImage">
	<div class="slideControl-left">
		<a href="#" id="prev" title="Previous">&nbsp;</a>
	</div>
	<div id='slideshow' class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true"  data-cycle-speed="1000"  data-cycle-timeout="8000" data-cycle-prev="#prev" data-cycle-next="#next">
		<!-- empty element for caption -->
		<div class="cycle-caption"></div>
		<img src="<?php bloginfo('template_directory'); ?>/images/road/fury/IMG_4194_940x425_v1.jpg" alt="Reven Fury Race Road Bike" class="mainImage"/>
		<img src="<?php bloginfo('template_directory'); ?>/images/slideshow-bikes/mosesCoulee-PalisadesRd_941x427_v1.jpg" alt="Reven Rivet High performance Road Bike" class="mainImage"/>
		<img src="<?php bloginfo('template_directory'); ?>/images/slideshow-bikes/DSC06624_941x427_v1.jpg" alt="Reven Jack 29er Race Rig" class="mainImage"/>
		<img src="<?php bloginfo('template_directory'); ?>/images/slideshow-bikes/DSCN0832_941x427_v1.jpg" alt="Reven Hammer 27.5\"/650B Race rig" class="mainImage"/>
	</div>
	<div class="slideControl-right">
		<a href="#" id="next" title="Next">&nbsp;</a>
	</div>
</div>
    <div class="breadcrumb-container">
        <?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
    </div> 
<div id="primary" class="site-content full-bleed">

	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('content', 'page'); ?>
		<?php //comments_template( '', true ); ?>
		<?php endwhile; // end of the loop. ?>
		<div id="mainContent" class="bike_cat">
			<div class="cat_container">
				<ul id="scrollToCategory" class="category_types">
					<?php 
					$slug_value =  pll_current_language('slug');	
						if ( pll_current_language('slug')=="en") {
							?>
							<li><a href="#" class="road_lnk">Road</a></li>
							<li>|</li>
							<li><a href="#" class="cross_lnk">Cross</a></li>
							<li>|</li>
							<li><a href="#" class="mtb_lnk">Mountain</a></li>
							<?php
						} else if ( pll_current_language('slug')=="de") {
							?>
							<li><a href="#" class="road_lnk">Stra&szlig;e</a></li>
							<li>|</li>
							<li><a href="#" class="cross_lnk">Cross</a></li>
							<li>|</li>
							<li><a href="#" class="mtb_lnk">Mountain</a></li>
							<?php
						}
					 ?> 
					
				</ul>
				 <?php 
					$slug_value =  pll_current_language('slug');	
					if ( pll_current_language('slug')=="en") {
						$lang_value = get_bloginfo('url').'/';
					} else if ( pll_current_language('slug')=="de") {
						$lang_value = get_bloginfo('url').'/';
					}
				 ?> 
				<?php 
					$slug_value =  pll_current_language('slug');	
						if ( pll_current_language('slug')=="en") {
							?>
							<h2 id="road">Road</h2>
							<?php
						} else if ( pll_current_language('slug')=="de") {
							?>
							<h2 id="road">Stra&szlig;e</h2>
							<?php
						}
					 ?> 
				<section class="framebox">
					<header><h3>Fury</h3><span class="smallPrint">- Race Road Bike</span></header>
					<a href="<?php echo $lang_value; ?>fury/" title="Fury" class="roadRollOver"><img src="http://revenbikes.com/wp-content/uploads/2014/11/IMG_4104_revised_2015charcandsilver_fury-3.jpg" alt="Reven Fury"/></a>
				</section>
				<section class="framebox clearfix">
					<header><h3>Rivet</h3><span class="smallPrint">- High performance Road Bike</span></header>
					<a href="<?php echo $lang_value; ?>rivet" title="Rivet" class="crossRollOver"><img src="http://revenbikes.com/wp-content/uploads/2014/11/IMG_4089_revised_green_rivet-1.jpg" alt="Reven Rivet"/></a>
				</section>
				<h2 id="cross">Cross</h2>
				<section class="framebox">
					<header><h3>Crowbar</h3><span class="smallPrint">- Race Cyclocross Bike</span></header>
					<a href="<?php echo $lang_value; ?>crowbar" title="Crowbar" class="roadRollOver"><img src="<?php bloginfo('template_directory');?>/images/cross/crowbar/crowbar_illustration_blue_frame_380x253.jpg" alt="Crowbar"/></a>
				</section>
				<section class="framebox clearfix">
					&nbsp;
				</section>
				<h2 id="mtb">Mountain</h2>
				<section class="framebox">
					<header><h3>Jack</h3><span class="smallPrint">- 29er Race Rig</span></header>
					<a href="<?php echo $lang_value; ?>jack" title="Jack" class="roadRollOver"><img src="<?php bloginfo('template_directory');?>/images/mtb/jack/IMG_4262_380x253.jpg" alt="Jack 29er Race Rig"/></a>
				</section>
				<section class="framebox clearfix">
					<header><h3>Hammer</h3><span class="smallPrint">- 27.5"/650B Race rig</span></header>
					<a href="<?php echo $lang_value; ?>hammer" title="Hammer" class="crossRollOver"><img src="<?php bloginfo('template_directory');?>/images/mtb/hammer/HERO_IMG_4172_380x253.jpg" alt="Hammer 650B Race rig"/></a>
				</section>
			</div>
		</div>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>