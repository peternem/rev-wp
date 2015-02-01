<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CONTACT - REVEN Bicycles  - Road, Cyclocross and Mountain Bikes</title>
		<!--[if lt IE 9]><script src=http://html5shiv.googlecode.com/svn/trunk/html5.js></script><![endif]-->
	</head>

	<body class="oneColFixCtr">
		<img alt="" id="bg" src="images/backgrounds/reven_background_v1.jpg" class="bgwidth">
		<div id="container">
			<header>
				<h1><a href="index.php" class="revenLogo"><img src="images/rollovers/reven_logo_281x85.png" alt="REVEN Bicycles" title="REVEN Bicycles"></a></h1>
			</header>
			<div id="heroImage">
				<img src="images/slideshow-home/reven_main_image_04.jpg" alt="Reven on Guardsman Pass near Park City, Utah" class="mainImage"/>
			</div>
			<div id="mainContent">
				<h2>Contact Reven Bicyles</h2>
				<p class="bikeModel">Send us an email if you are interested in finding a Reven bike, or interested in becoming a dealer. We
					are a globally distributed brand with expanding distribution.</p>

				<?php
				require_once('recaptchalib.php' );
				$privatekey = "6LenFd0SAAAAAFvkxbSGJ4VsIDBOSBgmMqNCwPBt";
				$resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);

				if (!$resp -> is_valid) {
					// What happens when the CAPTCHA was entered incorrectly
					die("The reCAPTCHA wasn't entered correctly. Go back and try it again." . "(reCAPTCHA said: " . $resp -> error . ")");
				} else {
					// Your code here to handle a successful verification

					/*** EMAIL Setup***/
					$submit = stripslashes($_POST['submit']);
					$senderName = stripslashes($_POST['senderName']);
					$senderEmail = $_POST['senderEmail'];
					$senderComments = stripslashes($_POST['senderComments']);

					$subject = "Reven Bicycle Contact/Request Form";

					//$to ="rideharder@revenbikes.com";
					$to = "mjpeternell@gmail.com, ";
					$to .="information@revenbikes.com";

					$headers = "From: revenbikes.com contact form\r\n";
					$headers .= "Reply-To: $senderEmail\r\n";
					$headers .= "X-Mailer: PHP/" . phpversion();

					$message = "$senderName just completed the Revenbikes.com contact form.\n";
					$message .= "Email: $senderEmail\n";
					$message .= "Comments:\n" . wordwrap($senderComments, 70);
					;

					if (mail($to, $subject, $message, $headers)) {
						echo "<h2>Your Email was sent to Reven!</h2>";
						echo "<p>Shortly, Reven should be in contact with you to answer any questions you may have regarding our products.";
						echo "<h2>The following informations was emailed to Reven.</h2>";
						echo "<p>$senderName</p>";
						echo "<p>$senderEmail</p>";
						echo "<p>$senderComments</p>";
					} else {
						echo "<h4>Error!</h4> <p>You have reached this page without clicking the submit button.  The Contact Reven Request Form!";
					}

				}
				?>

			</div>
		</div>
	</body>
</html>
