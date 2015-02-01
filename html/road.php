<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ROAD - REVEN Bicycles</title>
<?php include_once 'includes/meta_tags_sitewide.php'?>

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<link href="css/cssReset.css" rel="stylesheet" type="text/css" />
		<link href="css/reven_012813.css" rel="stylesheet" type="text/css" />
		<link href="css/cycle-slideshow-style.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery-1.9.0.js" type="text/javascript"></script>
		<script src="js/sitewide-scripts.js" type="text/javascript"></script>
		<script src="js/jquery.cycle2.js"></script>
		<!--[if lt IE 9]><script src=http://html5shiv.googlecode.com/svn/trunk/html5.js></script><![endif]-->
	</head>

	<body class="oneColFixCtr">
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
					<img src="images/slideshow-road/road_slide_01.jpg" class="mainImage"/>
					<img src="images/slideshow-home/reven_main_image.jpg" class="mainImage"/>
				</div>
				<div id="slideControl" class="slideControl-right">
					<a href="#" id="next" title="Next">&nbsp;</a>
				</div>
				<div id="heroImageTxtCell" class="txtCell">
					<h2>SLIDE SHOW! CLICK THE ARROWS!</h2><p> THIS HTML BASED TEXT OVERLAY CAN BE DYNAMICALY CREATED: Bacon ipsum dolor sit amet hamburger ball tip ea, dolor pancetta velit swine jerky ribeye do salami consequat prosciutto.</p>
				</div>
			</div>
			<div id="mainContent">
				<div class="imageCenter frameImgLink clearfix">
				<section class="framebox1">
					<a href="road_frame_a.php" title="Frame A" class="roadRollOver"><img src="images/road/road_frame_01.jpg"/></a>
				</section>
				<section class="framebox2 clearfix">
					<a href="road_frame_a.php" title="Frame B" class="crossRollOver"><img src="images/road/road_frame_02.jpg"/></a>
				</section>
				</div>
				<p>Venison strip steak jerky beef, pork loin doner andouille ball tip drumstick tail hamburger pastrami meatloaf brisket. Venison tail beef ribs shank pig short ribs shankle kielbasa meatball short loin. Fatback sirloin andouille doner beef ribs tongue jerky turducken pork loin capicola. Shoulder shankle filet mignon, short loin tenderloin beef ball tip short ribs meatloaf tri-tip hamburger. Pig short loin turkey biltong flank. Doner hamburger beef ribeye corned beef biltong brisket. Swine meatball pancetta, rump short ribs shank strip steak short loin pork belly tongue flank shankle drumstick.</p>
				<?php include_once 'includes/main_bike_category_subnav_menu.php'?>
			</div>
			<footer>
				<?php include_once 'includes/main_footer_sitewide.php'?>
			</footer>

		</div>
		<?php include_once 'includes/main_credit_sitewide.php'?>

	</body>
</html>
