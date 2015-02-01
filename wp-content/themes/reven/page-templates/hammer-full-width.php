<?php
/**
 * Template Name: Hammer - Full-width Page Template, No Sidebar
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
	<div id='slideshow' class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true"  data-cycle-speed="1000"  data-cycle-timeout="6000" data-cycle-prev="#prev" data-cycle-next="#next">
<?php 
                    //or insert the ID of your fields Group.
                    $groupID='151';
                    $custom_field_keys = get_post_custom_keys($groupID);
                    foreach ( $custom_field_keys as $key => $fieldkey )
                    {
                        if (stristr($fieldkey,'field_'))
                        {
                           
                           //echo $key . " => " . $fieldkey . " , ";
                           //echo $field['label'] . ': ' . $field['value'];
                            //echo $fieldkey . " , ";
                            $field = get_field_object($fieldkey, $groupID); 


                            $acf_field_name = $field['name'];

                            $attachment = get_field($acf_field_name);
                            echo "<img class='mainImage' src='".$attachment['url']."' title='".$attachment['title']."'/>";


                        }
                    }

?>		
	</div>
	<div class="slideControl-right">
		<a href="#" id="next" title="Next">&nbsp;</a>
	</div>
</div>
	<div class="imageCenter clearfix">
		<img src="<?php bloginfo('template_directory');?>/images/lifestyle/DSCN1003_485x386.jpg" alt="Reven Rides Bends Big Fat Tour" class="imageStyleLeft"/>
		<img src="<?php bloginfo('template_directory');?>/images/mtb/hammer/IMG_4289_485x386.jpg" title="Reven Hammer - Seat Tube and Downtube Detail" alt="The Reven Hammer" class="imageStyleLeft hvr" />
		<img src="<?php bloginfo('template_directory');?>/images/lifestyle/DSC06619_155x130.jpg"  alt="Ride Reven Bikes" class="imageStyleUpperRh"/>
		<img src="<?php bloginfo('template_directory');?>/images/mtb/hammer/IMG_4290_465x390.jpg" title="Reven Hammer - Head Tube Detail" alt="Hammer Head Tube" class="imageStyleLowerRh hvr"/>

		<!-- <div class="caption">
		<em>caption</em>
		</div> -->
	</div>
	 
	<div id="primary" class="site-content full-bleed">

		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			<?php

			if(get_field('geometry_copy'))
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
									<th>Head Tube Angle</th>
									<th>Seat Tube Angle</th>
									<th>Bottom Bracket Drop</th>
									<?php
								} else if ( pll_current_language('slug')=="de") { ?>
									<th>Größe</th>
									<th>Sitzrohrl&auml;nge<br>(mitte-mitte)</th>
									<th>Effektive Oberrohrl&auml;nge</th>
									<th>Steuerrohr L&auml;nge</th>
									<th>Kettenstreben L&auml;nge</th>
									<th>Front Center</th>
									<th>Steuerrohr Winkel</th>
									<th>Sitzrohr Winkel</th>
									<th>Tretlager Versatz</th>
									
								<?php } ?> 
							
						</tr>

						<?php
						$currentThemeUrl = get_template_directory_uri();
						$xmlUrl = $currentThemeUrl . '/xml/geometry_DA012415.xml';
						// load the XML document into an Object
						$xml = simplexml_load_file($xmlUrl);

						// loop through each product
						foreach ($xml->model as $model) {
							if ($model -> attributes() -> name == 'HAMMER 29') {
								//echo "<div id=\"geoTitle\" >" . $model -> attributes() -> name . "</div>";
								echo "<tr><td id=\"geoTitle\" colspan=\"10\" >" . $model -> attributes() -> name . "</td></tr>";
								foreach ($model->frame_sizes as $frame_sizes) {
									echo '<tr class="alternate">';
									echo "<td>" . $frame_sizes -> size . "</td>";
									echo "<td>" . $frame_sizes -> seat_tube . "</td>";
									echo "<td>" . $frame_sizes -> eff_top_tube . "</td>";
									echo "<td>" . $frame_sizes -> head_tube . "</td>";
									echo "<td>" . $frame_sizes -> chain_stay . "</td>";
									echo "<td>" . $frame_sizes -> front_center . "</td>";
									echo "<td>" . $frame_sizes -> ht_angle . "</td>";
									echo "<td>" . $frame_sizes -> st_angle . "</td>";
									echo "<td>" . $frame_sizes -> bb_drop . "</td>";
									echo "<td>" . $frame_sizes -> reach . "</td>";
									echo "<td>" . $frame_sizes -> stack . "</td>";
									echo "</tr>";
								}
							}
							if ($model -> attributes() -> name == 'HAMMER 27.5') {
								echo "<tr><td id=\"geoTitle\" colspan=\"10\" >" . $model -> attributes() -> name . "</td></tr>";
								foreach ($model->frame_sizes as $frame_sizes) {
									echo '<tr class="alternate">';
									echo "<td>" . $frame_sizes -> size . "</td>";
									echo "<td>" . $frame_sizes -> seat_tube . "</td>";
									echo "<td>" . $frame_sizes -> eff_top_tube . "</td>";
									echo "<td>" . $frame_sizes -> head_tube . "</td>";
									echo "<td>" . $frame_sizes -> chain_stay . "</td>";
									echo "<td>" . $frame_sizes -> front_center . "</td>";
									echo "<td>" . $frame_sizes -> ht_angle . "</td>";
									echo "<td>" . $frame_sizes -> st_angle . "</td>";
									echo "<td>" . $frame_sizes -> bb_drop . "</td>";
									echo "<td>" . $frame_sizes -> reach . "</td>";
									echo "<td>" . $frame_sizes -> stack . "</td>";
									echo "</tr>";
								}
							}
						}
						?>
					</tbody>
				</table>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>