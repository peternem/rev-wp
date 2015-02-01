<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Road - REVEN Bicycles</title>
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
					<img src="images/slideshow-road/road_frame_a_slide_01.jpg" alt="Reven Frame A" class="mainImage"/>
					<img src="images/slideshow-road/road_slide_01.jpg" class="mainImage"/>
					<img src="images/slideshow-home/reven_main_image.jpg" class="mainImage"/>
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
					<a href="#" class="ajaxImg"><img src="images/road/frame-a/frame_a_detail_rear_brake_485x356.jpg" title="Reven Frame A - Seat tube and Rear Brake Detail" alt="The Stoemper Darrell" class="imageStyleLeft hvr" /></a>
					<img src="images/lifestyle/IMG_6665_155x130.jpg"  alt="Ride Reven Bikes" class="imageStyleUpperRh"/>
					<a href="#" class="ajaxImg"><img src="images/road/frame-a/frame_a_detail_downtube_465x390.jpg" title="Reven Frame A - Downtube Detail"alt="Road Frame A" class="imageStyleLowerRh hvr"/></a>

					<!-- <div class="caption">
					<em>caption</em>
					</div> -->
				</div>
				<h2>Frame Model A</h2>
				<p class="bikeModel">Venison strip steak jerky beef, pork loin doner andouille ball tip drumstick tail hamburger pastrami meatloaf brisket. Venison tail beef ribs shank pig short ribs shankle kielbasa meatball short loin. Fatback sirloin andouille doner beef ribs tongue jerky turducken pork loin capicola. Shoulder shankle filet mignon, short loin tenderloin beef ball tip short ribs meatloaf tri-tip hamburger. Pig short loin turkey biltong flank. Doner hamburger beef ribeye corned beef biltong brisket. Swine meatball pancetta, rump short ribs shank strip steak short loin pork belly tongue flank shankle drumstick.</p>
				<p class="bikeModel">Venison strip steak jerky beef, pork loin doner andouille ball tip drumstick tail hamburger pastrami meatloaf brisket. Venison tail beef ribs shank pig short ribs shankle kielbasa meatball short loin. Fatback sirloin andouille doner beef ribs tongue jerky turducken pork loin capicola. Shoulder shankle filet mignon, short loin tenderloin beef ball tip short ribs meatloaf tri-tip hamburger. Pig short loin turkey biltong flank. Doner hamburger beef ribeye corned beef biltong brisket. Swine meatball pancetta, rump short ribs shank strip steak short loin pork belly tongue flank shankle drumstick.</p>

				<div id="geoChart" class="clearfix">
					<div id="geoTitle" >
						Geometry
					</div>
					<table id="geoList">
						<tbody>
							<tr>
								<th>Size (inches)</th>
								<th>Effective Top Tube Length</th>
								<th>Seat Tube (Center-Center)</th>
								<th>Head Tube Length</th>
								<th>Head Tube Angle</th>
								<th>Seat Tube Angle</th>
								<th>Chain Stay Length</th>
								<th>Bottom Bracket Drop</th>
							</tr>
							<tr class="alternate">
								<td>45</td><td>490</td><td>430</td><td>116</td><td>72</td><td>75</td><td>408</td><td>70</td>
							</tr>
							<tr class="alternate">
								<td>47</td><td>505</td><td>450</td><td>116</td><td>72</td><td>74.5</td><td>408</td><td>70</td>
							</tr>
							<tr class="alternate">
								<td>50</td><td>520</td><td>480</td><td>125</td><td>72</td><td>74</td><td>408</td><td>70</td>
							</tr>
							<tr class="alternate">
								<td>52</td><td>525</td><td>500</td><td>125</td><td>72.5</td><td>74</td><td>408</td><td>70</td>
							</tr>
							<tr class="alternate">
								<td>54</td><td>540</td><td>520</td><td>138</td><td>73</td><td>73.5</td><td>408</td><td>70</td>
							</tr>
							<tr class="alternate">
								<td>55</td><td>550</td><td>530</td><td>145</td><td>73</td><td>73.5</td><td>408</td><td>70</td>
							</tr>
							<tr class="alternate">
								<td>56</td><td>560</td><td>540</td><td>160</td><td>73.5</td><td>73</td><td>408</td><td>70</td>
							</tr>
							<tr class="alternate">
								<td>57</td><td>565</td><td>550</td><td>160</td><td>73.5</td><td>73</td><td>408</td><td>70</td>
							</tr>
							<tr class="alternate">
								<td>58</td><td>575</td><td>560</td><td>180</td><td>73.5</td><td>73</td><td>408</td><td>70</td>
							</tr>
							<tr class="alternate">
								<td>60</td><td>585</td><td>580</td><td>200</td><td>73.5</td><td>72.5</td><td>408</td><td>70</td>
							</tr>
							<tr class="alternate">
								<td>62</td><td>600</td><td>600</td><td>215</td><td>73.5</td><td>72.5</td><td>408</td><td>70</td>
							</tr>
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
