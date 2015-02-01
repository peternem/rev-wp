<?php
/**
 * Template Name: Contact - Google Captcha - Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div id="heroImage">
		<img src="<?php bloginfo('template_directory');?>/images/slideshow-home/reven_main_image_04.jpg" style="width: 100%;" alt="Reven on Guardsman Pass near Park City, Utah" class="mainImage"/>
	</div>
		<div id="primary" class="site-content">
			<div id="content" role="main">
	
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
					<?php //comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>
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
				<?php 
					$slug_value =  pll_current_language('slug');	
						if ( pll_current_language('slug')=="en") {
							 $my_slug = "en";
						} else if ( pll_current_language('slug')=="de") {
							$my_slug = "de";
						}
					 ?> 	
				<form action="http://revenbikes.com/en/contact-submitted" method="POST" onsubmit="return validate(this);">
					<ul class="contact_form">
					<li><b>Name</b></li>
					<li><input type="text" name="senderName"></li>
					<li><b>Email</b></li>
					<li><input type="text" name="senderEmail"></li>
					<li><b>Message</b></li>
					<li><textarea rows='10' name="senderComments"></textarea></li>
					<li>
				<?php
					require_once( trailingslashit( get_template_directory() ). 'recaptchalib.php' );
					$publickey = "6LenFd0SAAAAANrxCvNfKOOuFzQNRC2A5WvSevF-"; // you got this from the signup page
					echo recaptcha_get_html($publickey);
				?></li>
					<li><input type="submit" value="Send" name="submit"></li>
					</ul>
				</form>
			</div><!-- #content -->
		</div><!-- #primary -->
		<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>