<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BIKES - Road, Cyclocross and Mountain - REVEN Bicycles</title>
<?php include_once 'includes/meta_tags_sitewide.php'?>

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		
		
		<link href="css/cssReset.css" rel="stylesheet" type="text/css" />
		<link href="css/reven_012813.css" rel="stylesheet" type="text/css" />
		<link href="css/cycle-slideshow-style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="themes/base/jquery.ui.all.css">

		<script src="js/jquery-1.9.0.js" type="text/javascript"></script>
		<!-- <script src="js/jquery-ui-1.10.0.custom.js"></script> -->

		<script src="ui/jquery.ui.core.js"></script>
		<script src="ui/jquery.ui.widget.js"></script>
		<script src="ui/jquery.ui.mouse.js"></script>
		<script src="ui/jquery.ui.draggable.js"></script>
		<script src="ui/jquery.ui.position.js"></script>
		<script src="ui/jquery.ui.resizable.js"></script>
		<script src="ui/jquery.ui.button.js"></script>
		<script src="ui/jquery.ui.dialog.js"></script>

		<script src="js/jquery.cycle2.js"></script>

		<script src="js/sitewide-scripts.js" type="text/javascript"></script>
		<script src="js/sitewide-scripts-jquery-ui.js" type="text/javascript"></script>
		
		<!--[if lt IE 9]><script src=http://html5shiv.googlecode.com/svn/trunk/html5.js></script><![endif]-->
		<?php include_once("includes/analyticstracking.php") ?>
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
				<div id='slideshow' class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true"  data-cycle-speed="2000"  data-cycle-timeout="6000" data-cycle-prev="#prev" data-cycle-next="#next">
					<img src="images/road/fury/IMG_4194_940x425_v1.jpg" alt="Reven Fury Race Road Bike" class="mainImage"/>
					<img src="images/slideshow-bikes/mosesCoulee-PalisadesRd_941x427_v1.jpg" alt="Reven Rivet High performance Road Bike" class="mainImage"/>
					<img src="images/slideshow-bikes/DSC06624_941x427_v1.jpg" alt="Reven Jack 29er Race Rig" class="mainImage"/>
					<img src="images/slideshow-bikes/DSCN0832_941x427_v1.jpg" alt="Reven Hammer 27.5\"/650B Race rig" class="mainImage"/>
				</div>
				<div id="slideControl" class="slideControl-right">
					<a href="#" id="next" title="Next">&nbsp;</a>
				</div>
			</div>
			<div id="mainContent" class="contactBgImage">
				<h2>Bikes</h2>
				<p>Whichever your poison – road, mountain, or cross - choose from one of our race machines below.</p>
				<ul id="scrollToCategory">
					<!-- <li><p>Choose a Category:</p></li> -->
					<li><a href="#" class="road_lnk">Road</a></li>
					<li>|</li>
					<li><a href="#" class="cross_lnk">Cross</a></li>
					<li>|</li>
					<li><a href="#" class="mtb_lnk">Mountain</a></li>
				</ul>
				<h3 id="road">Road</h3>
				<section class="framebox1">
					<h3>Fury - <span class="smallPrint">Race Road Bike</span></h3>
					<a href="fury.php" title="Fury" class="roadRollOver"><img src="images/road/fury/REVEN_LIGHT_380x253.jpg" alt="Reven Fury"/></a>
				</section>
				<section class="framebox2 clearfix">
					<h3>Rivet - <span class="smallPrint">High performance Road Bike</span></h3>
					<a href="rivet.php" title="Rivet" class="crossRollOver"><img src="images/road/rivet/REVEN_SINGLECOLOR_380x253.jpg" alt="Reven Rivet"/></a>
				</section>
				<h3 id="cross">Cross</h3>
				<section class="framebox1">
					<h3>Crowbar - <span class="smallPrint">Race Cyclocross Bike</span></h3>
					<a href="crowbar.php" title="Crowbar" class="roadRollOver"><img src="images/cross/crowbar/crowbar_illustration_blue_frame_380x253.jpg" alt="Crowbar"/></a>
				</section>
				<section class="framebox2 clearfix">
					&nbsp;
				</section>
				<h3 id="mtb">MTB</h3>
				<section class="framebox1">
					<h3>Jack - <span class="smallPrint">29er Race Rig</span></h3>
					<a href="jack.php" title="Jack" class="roadRollOver"><img src="images/mtb/jack/IMG_4262_380x253.jpg" alt="Jack 29er Race Rig"/></a>
				</section>
				<section class="framebox2 clearfix">
					<h3>Hammer - <span class="smallPrint">27.5"/650B Race rig</span></h3>
					<a href="hammer.php" title="Hammer" class="crossRollOver"><img src="images/mtb/hammer/HERO_IMG_4172_380x253.jpg" alt="Hammer 650B Race rig"/></a>
				</section>
				
				<?php include_once 'includes/main_bike_category_subnav_menu.php'?>
			</div>
			<footer>
				<?php include_once 'includes/main_footer_sitewide.php'?>
			</footer>

		</div>
		<?php include_once 'includes/main_credit_sitewide.php'?>

	</body>
</html>
