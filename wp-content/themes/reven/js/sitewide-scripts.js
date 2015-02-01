jQuery(document).ready(function() {

	/**************************************************************************************/
	/**** BEGIN _ goToDivScroll animation - jQuery UI tabs use this function***********/
	/**************************************************************************************/

/* Scroll to Div when #idName in href link 'bikes.php#cross on bikes.php page */
	 jQuery('html, body').hide();
	 if (window.location.hash) {
		 setTimeout(function() {
			 jQuery('html, body').scrollTop(0).show();
			 //jQuery('html, body').scrollTop(0);
			 jQuery('html, body').animate({scrollTop : jQuery(window.location.hash).offset().top}, 2000)
		 }, 0);
	 } else {
		 jQuery('html, body').show();
	 }
 
 /* Scroll to Div from category buttons on bikes.php page */
	 function goToDivScrollRoad(id) {
		 jQuery('html,body').animate({
			 scrollTop : jQuery("#road").offset().top
		 }, 'slow');
	 }
 
	 function goToDivScrollMtb(id) {
		 jQuery('html,body').animate({
			 scrollTop : jQuery("#mtb").offset().top
		 }, 'slow');
	 }
 
	 function goToDivScrollCross(id) {
		 jQuery('html,body').animate({
			 scrollTop : jQuery("#cross").offset().top
		 }, 'slow');
	 }
 
 
	 jQuery('.mtb_lnk').bind('click', goToDivScrollMtb);
	 jQuery('.road_lnk').bind('click', goToDivScrollRoad);
	 jQuery('.cross_lnk').bind('click', goToDivScrollCross);

	/**************************************************************************************/
	/**** BEGIN _ rollover link animation  ***********/
	/**************************************************************************************/

	// Preload all rollovers
	jQuery(".revenLogo img, .roadRollOver img, .crossRollOver img, .mtbRollOver img, #facebook_btn img, #twitter_btn img").each(function() {
		// Set the original src
		rollsrc = jQuery(this).attr("src");
		rollON = rollsrc.replace(/.pngjQuery/ig, "_over.png");
		newImg = new Image();
		// create new image obj
		jQuery(newImg).attr("src", rollON);
		// set new obj's src
	});

	// Navigation rollovers
	jQuery(".revenLogo, .roadRollOver, .crossRollOver, .mtbRollOver, #facebook_btn, #twitter_btn").mouseover(function() {
		imgsrc = jQuery(this).children("img").attr("src");

		if ( typeof (imgsrc) != 'undefined') {
			imgsrcON = imgsrc.replace(/.pngjQuery/ig, "_over.png");
			// strip off extension
			jQuery(this).children("img").attr("src", imgsrcON);
		}

		if (jQuery(this).children("img").attr("src", imgsrcON)) {
			imgsrcON = imgsrc.replace(/.pngjQuery/ig, "_over.png");
			// strip off extension
			jQuery(this).children("img").attr("src", imgsrcON);
		}

	});

	// Handle mouseout
	jQuery(".revenLogo, .roadRollOver, .crossRollOver, .mtbRollOver,  #facebook_btn, #twitter_btn").mouseout(function() {
		if ( typeof (imgsrc) != 'undefined') {
			jQuery(this).children("img").attr("src", imgsrc);
		}
	});
});

// jQuery(function() {
// 
	// var theWindow = jQuery(window), jQuerybg = jQuery("#bg"), aspectRatio = jQuerybg.width() / jQuerybg.height();
// 
	// if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
		// jQuery("#bg").css({
			// 'display' : 'none'
		// });
	// } else {
		// function resizeBg() {
			// if ((theWindow.width() / theWindow.height()) < aspectRatio) {
				// jQuerybg.removeClass().addClass('bgheight');
			// } else {
				// jQuerybg.removeClass().addClass('bgwidth');
			// }
		// }
// 
// 
		// theWindow.resize(function() {
			// resizeBg();
		// }).trigger("resize");
	// }
// 
// });

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