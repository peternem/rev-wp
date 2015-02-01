<?php
/**
 * Template Name: Crowbar - Full-width Page Template, No Sidebar
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
		<img src="<?php bloginfo('template_directory');?>/images/cross/crowbar/crowbar_illustration_940x425.jpg" style="width: 100%;" alt="Reven on Guardsman Pass near Park City, Utah" class="mainImage"/>
	</div>

<!-- 	<div class="imageCenter clearfix">
		<img src="<?php bloginfo('template_directory');?>/images/lifestyle/IMG_4185_TWEAKED_485x356.jpg" alt="Ride Reven" class="imageStyleLeft"/>
		<a href="#" class="ajaxImg"><img src="<?php bloginfo('template_directory');?>/images/road/frame-a/frame_a_detail_rear_brake_485x356.jpg" title="Reven Fury - Seat tube and Rear Brake Detail" alt="Reven Fury Seat Tube" class="imageStyleLeft hvr" /></a>
		<img src="<?php bloginfo('template_directory');?>/images/lifestyle/IMG_4234_TWEAKED_155x130.jpg"  alt="Ride Reven Bikes" class="imageStyleUpperRh"/>
		<a href="#" class="ajaxImg"><img src="<?php bloginfo('template_directory');?>/images/road/frame-a/frame_a_detail_downtube_465x390.jpg" title="Reven Fury - Downtube Detail" alt="Reven Fury Downtube" class="imageStyleLowerRh hvr"/></a>
		</div>  -->
	<div id="primary" class="site-content full-bleed">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			<?php if(get_field('geometry_copy'))
			{
				echo "<div class='geoChart'>" . get_field('geometry_copy') . "</div>";
			}
			
			?>
			<div class="geoChart">
				<table class="geoList">
					<tbody>
						<tr>
							 <?php 
								$slug_value =  pll_current_language('slug');	
								if ( pll_current_language('slug')=="en") {
									?>
									<th>Size</th>
									<th>Seat Tube (C-C)</th>
									<th>Effective Top Tube Length</th>
									<th>Head Tube Length</th>
									<th>Chain Stay Length</th>
									<th>Front-Center</th>
									<th>Wheelbase</th>
									<th>Head Tube Angle</th>
									<th>Seat Tube Angle</th>
									<th>Bottom Bracket Drop</th>
<!-- 									<th>Reach</th> -->
<!-- 									<th>Stack</th> -->
									<?php
								} else if ( pll_current_language('slug')=="de") {
									?>
									<th>Gr&ouml;&szlig;e</th>
									<th>Sitzrohrl&auml;nge<br>(mitte-mitte)</th>
									<th>Effektive Oberrohrl&auml;nge</th>
									<th>Steuerrohr L&auml;nge</th>
									<th>Kettenstreben L&auml;nge</th>
									<th>Wheelbase</th>
									<th>Front Center</th>
									<th>Steuerrohr Winkel</th>
									<th>Sitzrohr Winkel</th>
									<th>Tretlager Versatz</th>
<!-- 									<th>Reach</th> -->
<!-- 									<th>Stack</th> -->
									<?php
								}
							 ?> 
							
						</tr>

						<?php
						$currentThemeUrl = get_template_directory_uri();
						$xmlUrl = $currentThemeUrl . '/xml/geometry_DA012415.xml';
						// load the XML document into an Object
						$xml = simplexml_load_file($xmlUrl);

						// loop through each product
						foreach ($xml->model as $model) {
							if ($model -> attributes() -> name == 'CROWBAR') {
								//echo "<div id=\"geoTitle\" >" . $model -> attributes() -> name . "</div>";
								foreach ($model->frame_sizes as $frame_sizes) {
									echo '<tr class="alternate">';
									echo "<td>" . $frame_sizes -> size . "</td>";
									echo "<td>" . $frame_sizes -> seat_tube . "</td>";
									echo "<td>" . $frame_sizes -> eff_top_tube . "</td>";
									echo "<td>" . $frame_sizes -> head_tube . "</td>";
									echo "<td>" . $frame_sizes -> chain_stay . "</td>";
									echo "<td>" . $frame_sizes -> front_center . "</td>";
									echo "<td>" . $frame_sizes -> wheelbase . "</td>";
									echo "<td>" . $frame_sizes -> ht_angle . "</td>";
									echo "<td>" . $frame_sizes -> st_angle . "</td>";
									echo "<td>" . $frame_sizes -> bb_drop . "</td>";
									//echo "<td>" . $frame_sizes -> reach . "</td>";
									//echo "<td>" . $frame_sizes -> stack . "</td>";
									echo "</tr>";
								}
							}
						}
						?>
					</tbody>
				</table>
			</div>
			<?php

			if(get_field('frame_details_copy'))
			{
				echo "<div class='geoChart'>" . get_field('frame_details_copy') . "</div>";
			}
			
			?>	
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>