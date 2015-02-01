$(document).ready(function() {

	/**************************************************************************************/
	/**** BEGIN _ goToDivScroll animation - jQuery UI tabs use this function***********/
	/**************************************************************************************/

/* Scroll to Div when #idName in href link 'bikes.php#cross on bikes.php page */
	$('html, body').hide();
	if (window.location.hash) {
		setTimeout(function() {
			$('html, body').scrollTop(0).show();
			//$('html, body').scrollTop(0);
			$('html, body').animate({
				scrollTop : $(window.location.hash).offset().top
			}, 2000)
		}, 0);
	} else {
		$('html, body').show();
	}

/* Scroll to Div from category buttons on bikes.php page */
	function goToDivScrollRoad(id) {
		$('html,body').animate({
			scrollTop : $("#road").offset().top
		}, 'slow');
	}

	function goToDivScrollMtb(id) {
		$('html,body').animate({
			scrollTop : $("#mtb").offset().top
		}, 'slow');
	}

	function goToDivScrollCross(id) {
		$('html,body').animate({
			scrollTop : $("#cross").offset().top
		}, 'slow');
	}


	$('.mtb_lnk').bind('click', goToDivScrollMtb);
	$('.road_lnk').bind('click', goToDivScrollRoad);
	$('.cross_lnk').bind('click', goToDivScrollCross);

	/**************************************************************************************/
	/**** BEGIN _ rollover link animation  ***********/
	/**************************************************************************************/

	// Preload all rollovers
	$(".revenLogo img, .roadRollOver img, .crossRollOver img, .mtbRollOver img, #facebook_btn img, #twitter_btn img").each(function() {
		// Set the original src
		rollsrc = $(this).attr("src");
		rollON = rollsrc.replace(/.png$/ig, "_over.png");
		newImg = new Image();
		// create new image obj
		$(newImg).attr("src", rollON);
		// set new obj's src
	});

	// Navigation rollovers
	$(".revenLogo, .roadRollOver, .crossRollOver, .mtbRollOver, #facebook_btn, #twitter_btn").mouseover(function() {
		imgsrc = $(this).children("img").attr("src");

		if ( typeof (imgsrc) != 'undefined') {
			imgsrcON = imgsrc.replace(/.png$/ig, "_over.png");
			// strip off extension
			$(this).children("img").attr("src", imgsrcON);
		}

		if ($(this).children("img").attr("src", imgsrcON)) {
			imgsrcON = imgsrc.replace(/.png$/ig, "_over.png");
			// strip off extension
			$(this).children("img").attr("src", imgsrcON);
		}

	});

	// Handle mouseout
	$(".revenLogo, .roadRollOver, .crossRollOver, .mtbRollOver,  #facebook_btn, #twitter_btn").mouseout(function() {
		if ( typeof (imgsrc) != 'undefined') {
			$(this).children("img").attr("src", imgsrc);
		}
	});
});

$(function() {

	var theWindow = $(window), $bg = $("#bg"), aspectRatio = $bg.width() / $bg.height();

	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
		$("#bg").css({
			'display' : 'none'
		});
	} else {
		function resizeBg() {
			if ((theWindow.width() / theWindow.height()) < aspectRatio) {
				$bg.removeClass().addClass('bgheight');
			} else {
				$bg.removeClass().addClass('bgwidth');
			}
		}


		theWindow.resize(function() {
			resizeBg();
		}).trigger("resize");
	}

});

/* ------------------------------- */
/*  Begin -- Email script - contact.php */
/* ------------------------------- */

function emailContactInfo() {

	var email = "rideharder";
	var emailHost = "revenbikes.com"
	var errorMsg = "Email Error";
	var subject = "revenmfg.com - Contact Us and Sales Inquiries";
	var body_message = " ";

	var mailto_link = 'mailto:' + email + '@' + emailHost + '?subject=' + subject + '&body=' + body_message;

	var win = (parent.location = mailto_link);

}

function emailContactPage() {

	var email = "info";
	var emailHost = "revenbikes.com"
	var errorMsg = "Email Error";
	var subject = "revenmfg.com - Contact Us and Sales Inquiries";
	var body_message = " ";

	var mailto_link = 'mailto:' + email + '@' + emailHost + '?subject=' + subject + '&body=' + body_message;

	var win01 = (parent.location = mailto_link);

}	