<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
	<style>
		body .site {
		    background: url("<?php bloginfo('template_directory');?>/images/sprites/header_background.png") no-repeat scroll center 0 #202020;
		}
		.nav-menu {
		    background: url("<?php bloginfo('template_directory');?>/images/sprites/diagnal_background.png") no-repeat scroll center 18px;
		}
		#heroImage {
		    background: url("<?php bloginfo('template_directory');?>/images/sprites/diagnal_background.png") no-repeat scroll center 381px rgba(0, 0, 0, 0);
		    padding-bottom: 20px;
		}
		.cycle-slideshow {
		    background: url("<?php bloginfo('template_directory');?>/images/sprites/diagnal_background.png") no-repeat scroll center 381px;
		    padding-bottom:20px;
		}
		.slideControl-left a {
	    	background: url("<?php bloginfo('template_directory');?>/images/sprites/prev_next_arrows.png") no-repeat scroll -13px -100px transparent;
		}
		.slideControl-left a:hover {
		    background: url("<?php bloginfo('template_directory');?>/images/sprites/prev_next_arrows.png") no-repeat scroll -13px 0 rgba(0, 0, 0, 0);
		}
		.slideControl-right a {
	    	background: url("<?php bloginfo('template_directory');?>/images/sprites/prev_next_arrows.png") no-repeat scroll -60px -100px transparent;
		}
		.slideControl-right a:hover {
		    background: url("<?php bloginfo('template_directory');?>/images/sprites/prev_next_arrows.png") no-repeat scroll -61px 0 rgba(0, 0, 0, 0);
		}
		.cycle-slideshow-bikePg {
	    	background: url("<?php bloginfo('template_directory');?>/images/animated/spinner.gif") no-repeat scroll 50% 50% transparent;
		}
		.cycle-slideshow {
	    	background: url("<?php bloginfo('template_directory');?>/images/animated/spinner.gif") no-repeat scroll 50% 50% transparent;
		}
    </style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		
		<?php
		if (function_exists('pll_the_languages')) {
			echo "<div class='local_lang'>";
			echo "<ul>";
		    pll_the_languages(array('show_flags'=>1,'show_names'=>1));
		    echo "</ul>";
		    echo "</div>";
		} 
		?>
		
			<div class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="revenLogo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img title="REVEN Bicycles" alt="REVEN Bicycles" src="<?php bloginfo('template_directory');?>/images/rollovers/reven_logo_281x85.png"></a></div>
			<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			
		</nav><!-- #site-navigation -->

		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">