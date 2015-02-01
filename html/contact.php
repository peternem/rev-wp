<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CONTACT - REVEN Bicycles - Road, Cyclocross and Mountain Bikes</title>
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
			<div id="mainContent" class="contactBgImage">
				<h2>Contact Reven Bicyles</h2>
				<p class="bikeModel">Send us an email if you are interested in finding a Reven bike, or interested in becoming a dealer. We
					are a globally distributed brand with expanding distribution.</p>
				<!-- <p class="bikeModel contact"><a id="email_btn" href="javascript:void(0);" onclick="emailContactInfo();">Email Reven</a></p> -->
				<script type="text/javascript">
					function validate(thisForm) {
						if (thisForm.senderName.value == "") {
							window.alert("Please enter your first name!");
							thisForm.senderName.focus();
							return false;
						}
						if (thisForm.senderEmail.value == "") {
							window.alert("Please enter your email address!");
							thisForm.senderEmail.focus();
							return false;
						} else {
							var emailexp = /.*\@.*\..*/;
							if (!emailexp.test(thisForm.senderEmail.value)) {
								window.alert("Invalid email address!\n\nPlease enter your correct email address!\n\nExample yourname@example.com");
								thisForm.senderEmail.focus();
								return false;
							}
						}
						if (thisForm.senderComments.value == "") {
							window.alert("Please enter a comment!");
							thisForm.senderComments.focus();
							return false;
						}
						return true;
					}

				</script>
				<script>
					$(function() {
						$("input[type=submit]").button({
							icons : {
								secondary : "ui-icon-triangle-1-e"
							},
							text : "Submit"
						})
					});
				</script>
				<div id="contactForm">
					
				<form action="contact-submitted.php" method="POST" onsubmit="return validate(this);">
					<p><b>Name</b></p>
					<p><input type="text" name="senderName" size=40></p>
					<p><b>Email</b></p>
					<p><input type="text" name="senderEmail" size=40></p>
					<p><b>Message</b</p>
					<p><textarea cols='90' rows='10' name="senderComments"></textarea></p>
					<p><br>
				<?php
					require_once('recaptchalib.php');
					$publickey = "6LenFd0SAAAAANrxCvNfKOOuFzQNRC2A5WvSevF-"; // you got this from the signup page
					echo recaptcha_get_html($publickey);
				?><br></p>
					<p><input type="submit" value="Send" name="submit"></p>
				</form>
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
