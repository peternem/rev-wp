<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rivet - High Performance Road Bike - REVEN Bicycles</title>
<?php include_once 'includes/meta_tags_sitewide.php'?>

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<link href="css/cssReset.css" rel="stylesheet" type="text/css" />
		<link href="css/reven_012813.css" rel="stylesheet" type="text/css" />
		<link href="css/cycle-slideshow-style.css" rel="stylesheet" type="text/css" />
		<!-- <link href="css/smoothness/jquery-ui-1.10.0.custom-original.css" rel="stylesheet"> -->

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
				<div id='slideshow' class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true"  data-cycle-speed="1000"  data-cycle-timeout="6000" data-cycle-prev="#prev" data-cycle-next="#next">
					<img src="images/road/rivet/rivet_frame_940x425.jpg" alt="Reven Rivet" class="mainImage"/>
					<img src="images/slideshow-road/IMG_6665_940x425.jpg" class="mainImage"/>
					<img src="images/slideshow-road/IMG_376_940x425.jpg" class="mainImage"/>
				</div>
				<div id="slideControl" class="slideControl-right">
					<a href="#" id="next" title="Next">&nbsp;</a>
				</div>
				<!-- <div id="heroImageTxtCell" class="txtCell">
				<h2>SLIDE SHOW! CLICK THE ARROWS!</h2><p> THIS HTML BASED TEXT OVERLAY CAN BE DYNAMICALY CREATED: Bacon ipsum dolor sit amet hamburger ball tip ea, dolor pancetta velit swine jerky ribeye do salami consequat prosciutto.</p>
				</div> -->
			</div>
			<div id="mainContent">
				<div class="imageCenter clearfix">
					<img src="images/lifestyle/IMG_3762_375x275.jpg" title="Reven Frame A - Bacon ipsum dolor sit amet ball tip" alt="Ride Reven" class="imageStyleLeft"/>
					<a href="#" class="ajaxImg"><img src="images/road/rivet/IMG_4089_drivetrain_485x356.jpg" title="Reven Rivet - Drivetrain" alt="The Reven Rivet" class="imageStyleLeft hvr" /></a>
					<img src="images/lifestyle/IMG_6665_155x130.jpg"  alt="Ride Reven Bikes" class="imageStyleUpperRh"/>
					<a href="#" class="ajaxImg"><img src="images/road/rivet/IMG_4089_465x390.jpg" title="Reven Rivet - Head Tube Detail" alt="Reven Rivet Head Tube" class="imageStyleLowerRh hvr"/></a>

					<!-- <div class="caption">
					<em>caption</em>
					</div> -->
				</div>
				<h2>RIVET</h2>
				<p class="bikeModel">High performance frame, with a slightly more relaxed riding position, the Rivet was designed to have a more 
					compliant ride than the Fury.  It’s also designed for speed and has all the bells and whistles you need – internal cable 
					routing, oversized tapered head tube and fork steerer, full carbon dropouts, and more.</p>
				
				<!-- <h3>Technology: TBD</h3>
				<p class="bikeModel">Venison strip steak jerky beef, pork loin doner andouille ball tip drumstick tail hamburger pastrami meatloaf brisket. Venison tail beef ribs shank pig short ribs shankle kielbasa meatball short loin. Fatback sirloin andouille doner beef ribs tongue jerky turducken pork loin capicola. Shoulder shankle filet mignon, short loin tenderloin beef ball tip short ribs meatloaf tri-tip hamburger. Pig short loin turkey biltong flank. Doner hamburger beef ribeye corned beef biltong brisket. Swine meatball pancetta, rump short ribs shank strip steak short loin pork belly tongue flank shankle drumstick.</p> -->
				<h3>Geometry</h3>
				<p class="bikeModel">Our geometry is aggressive, yet comfortable for long stages in the saddle.  Available in 6 sizes
					to help you find the best possible fit.</p>
				<div id="geoChart" class="clearfix">
					<table id="geoList">
						<tbody>
							<tr>
								<th>Size</th>
								<th>Seat Tube (C-C)</th>
								<th>Effective Top Tube Length</th>
								<th>Head Tube Length</th>
								<th>Chain Stay Length</th>
								<th>Front-Center</th>
								<th>Head Tube Angle</th>
								<th>Seat Tube Angle</th>
								<th>Bottom Bracket Drop</th>
								<!-- <th>Reach</th>
								<th>Stack</th> -->
							</tr>

							<?php

							// load the XML document into an Object
							$xml = simplexml_load_file("geometry_021413.xml");

							// loop through each product
							foreach ($xml->model as $model) {
								if ($model -> attributes() -> name == 'RIVET') {
									//echo "<div id=\"geoTitle\" >" . $model -> attributes() -> name . "</div>";
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
