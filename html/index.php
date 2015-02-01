<!DOCTYPE html>
<html lang="en">
	<head>
		<title>REVEN Bicycles - High Performance Carbon Fiber Bicycles - Road, Cyclocross and Mountain bikes</title>
<?php include_once 'includes/meta_tags_sitewide.php'?>

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" href="apple-touch-icon.png" />
		<link href="css/cssReset.css" rel="stylesheet" type="text/css" />
		<link href="css/reven_012813.css" rel="stylesheet" type="text/css" />
		<link href="css/cycle-slideshow-style.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery-1.9.0.js" type="text/javascript"></script>
		<script src="js/sitewide-scripts.js" type="text/javascript"></script>
		<script src="js/jquery.cycle2.js"></script>
		<!--[if lt IE 9]><script src=http://html5shiv.googlecode.com/svn/trunk/html5.js></script><![endif]-->
		<?php include_once("includes/analyticstracking.php") ?>
	</head>

	<body class="oneColFixCtr" >
		<img alt="" id="bg" src="images/backgrounds/reven_background_v1.jpg" class="bgwidth">
		<div id="container">
			<header>
				<h1><a href="index.php" class="revenLogo"><img src="images/rollovers/reven_logo_281x85.png" alt="REVEN Bicycles" title="REVEN Bicycles"></a></h1>
			</header>
			<nav>
				<?php include_once 'includes/main_nav_sitewide.php'?>
			</nav>
			<div id="heroImage">
				<div id="slideControl" class="slideControl-left">
					<a href="#" id="prev" title="Previous">&nbsp;</a>
				</div>
				<div id='slideshow' class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true"  data-cycle-speed="1000"  data-cycle-timeout="6000" data-cycle-prev="#prev" data-cycle-next="#next">
					<!-- empty element for caption -->
					<div class="cycle-caption"></div>
					<img src="images/slideshow-home/reven_main_hero_image_940x425.jpg" alt="Reven Race Bikes" class="mainImage"/>
					<img src="images/slideshow-home/road_grafiti_quote_slide_940x425.jpg" alt="Reven Carbon Bikes" class="mainImage"/>
					<img src="images/slideshow-home/IMG_4185_slide_940x425.jpg" alt="Reven Bikes Belgium" class="mainImage"/>
					<img src="images/slideshow-home/IMG_4194_940x425.jpg" alt="Reven Bikes Belgium" class="mainImage"/>
				</div>
				<div id="slideControl" class="slideControl-right">
					<a href="#" id="next" title="Next">&nbsp;</a>
				</div>
				<!-- <div id="heroImageTxtCell" class="txtCell">
				<h2>SLIDE SHOW! CLICK THE ARROWS!</h2><p> THIS HTML BASED TEXT OVERLAY CAN BE DYNAMICALY CREATED: Bacon ipsum dolor sit amet hamburger ball tip ea, dolor pancetta velit swine jerky ribeye do salami consequat prosciutto.</p>
				</div> -->
			</div>
			<div id="mainContent">
				<?php include_once 'includes/main_bike_category_subnav_menu.php'?>
			</div>
			<footer>
				<?php include_once 'includes/main_footer_sitewide.php'?>
			</footer>

		</div>
		<?php include_once 'includes/main_credit_sitewide.php'?>
	</body>
</html>
