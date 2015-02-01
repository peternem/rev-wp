<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
		<div class="bike_cat">
			<div class="cat_container">
				<div class="framebox cat">
					<a href="/bikes#road" title="Road" class="roadRollOver" id="rd"><img src="<?php bloginfo('template_directory');?>/images/rollovers/home_rollover_road.png" alt="Road"/></a>
				</div>
				<div class="framebox cat">
					<a href="/bikes#cross" title="Cross" class="crossRollOver" id="cx"><img src="<?php bloginfo('template_directory');?>/images/rollovers/home_rollover_cross.png" alt="Cross"/></a>
				</div>
				<div class="framebox cat clearfix">
					<a href="/bikes#mtb" title="MTB" class="mtbRollOver" id="MB"><img src="<?php bloginfo('template_directory');?>/images/rollovers/home_rollover_mtb.png" alt="MTB"/></a>
				</div>
			</div>
		</div>
	</div><!-- #main .wrapper -->

</div><!-- #page -->
	<footer id="colophon" role="contentinfo" class="site_footer">
		<div class="site-info">
			<p>Site Design: IWISHIKNEWKUNGFU, Photo Credit: Motofishimages and Web Development: MATTPETERNELL.com</p>
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>