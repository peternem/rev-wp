<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ABOUT - REVEN Bicycles - Road, Cyclocross and Mountain Bikes</title>
<?php include_once 'includes/meta_tags_sitewide.php'?>

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<link href="css/cssReset.css" rel="stylesheet" type="text/css" />
		<link href="css/reven_012813.css" rel="stylesheet" type="text/css" />
		<link href="css/cycle-slideshow-style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="themes/base/jquery.ui.all.css">

		<script src="js/jquery-1.9.0.js" type="text/javascript"></script>
		<script src="ui/jquery.ui.core.js"></script>
		<script src="ui/jquery.ui.widget.js"></script>
		<script src="ui/jquery.ui.mouse.js"></script>
		<script src="ui/jquery.ui.draggable.js"></script>
		<script src="ui/jquery.ui.position.js"></script>
		<script src="ui/jquery.ui.resizable.js"></script>
		<script src="ui/jquery.ui.button.js"></script>
		<script src="ui/jquery.ui.dialog.js"></script>

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
				<img src="images/slideshow-home/reven_main_image_04.jpg" alt="Reven on Guardsman Pass near Park City, Utah" class="mainImage"/>
			</div>
			<div id="mainContent">
				<div class="imageCenter clearfix">
					<img src="images/lifestyle/IMG_4185_TWEAKED_485x356.jpg" alt="Ride Reven" class="imageStyleLeft"/>
					<img src="images/lifestyle/DSCN1003_485x386.jpg" alt="Reven Jack" class="imageStyleLeft"/>
					<img src="images/lifestyle/IMG_4234_TWEAKED_155x130.jpg" alt="Ride Reven Bikes" class="imageStyleUpperRh"/>
					<img src="images/lifestyle/DSCN0832_155x130.jpg" alt="" class="imageStyleLowerRh"/>

					<!-- <div class="caption">
					<em>caption</em>
					</div> -->
				</div>
				<h2>About Reven Bicyles</h2>
				<p class="bikeModel"> Founded in Flanders, Belgium, Reven was created by a group of passionate cyclists who live to ride and
					dream of big challenges. Reven is rider-owned, and we obsess about minor details We want our bikes to be quick,
					responsive, light, and suited to long day in the saddle.</p>
				<p class="bikeModel">Being located in Belgium gives us some unique advantages. Notoriously one of the hardest places to
					ride, the conditions are, we’ll admit, a bit more grim than most places. It rains most of the year, there
					is always grit on the road, there are heaps of cobbles, and on group rides nobody uses fenders on group
					rides.</p>
				<p class="bikeModel">Here it’s the hard man who wins, who can fly over the cobbles the fastest, who puts in the most hours
					training in the winter rain. Bike racers are heroes and cycling is a way of life, a religion. It’s in this
					setting that bikes are developed, tested, and thrashed.</p>
				<h2>Contact Reven Bicyles</h2>
				<p class="bikeModel contact"><a id="email_btn" href="contact.php">Email Reven</a></p>
				<?php include_once 'includes/main_bike_category_subnav_menu.php'?>
			</div>
			<footer>
				<?php include_once 'includes/main_footer_sitewide.php'?>
			</footer>

		</div>
		<?php include_once 'includes/main_credit_sitewide.php'?>
		<div id="dialog" title="An Image!" style="display: none;">
			<img id="image" src=""/>
		</div>
	</body>
</html>
