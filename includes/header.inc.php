<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/style.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
		<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
		<script src="js/init.js" type="text/javascript"></script>
	</head>
	<body>
		<!-- MOBILE MENU -->
		<section id="off_canvas_menu">
			<div class="close-button">
				<div>
					<img alt="close_button" src="images/close_off_canvas_light.png" >
					<span>Close Menu</span>
				</div>
			</div>		
			<nav id="mobile_menu">
				<ul>
					<li>
						<a href="index.php">About Us</a>
						<img src="images/sub_menu_button.png" class="sub-menu-mobile">
						<ul class="sub-menu">
							<li><a href="">Page 1</a></li>
							<li><a href="">Page 2</a></li>
						</ul>
					</li>
					<li>
						<a href="index.php">Our Services</a>
						<img src="images/sub_menu_button.png" class="sub-menu-mobile">
						<ul class="sub-menu">
							<li><a href="">Page 1</a></li>
							<li><a href="">Page 2</a></li>
							<li><a href="">Page 3</a></li>
							<li><a href="">Page 4</a></li>
						</ul>
					</li>
					<li>
						<a href="index.php">Testimonials</a>
						<img src="images/sub_menu_button.png" class="sub-menu-mobile">
						<ul class="sub-menu">
							<li><a href="">Page 1</a></li>
							<li><a href="">Page 2</a></li>
						</ul>
					</li>
					<li>Contact Us</li>
				</ul>
			</nav>	
		</section>

		<!-- MOBILE CONTACT FORM -->
		<section id="mobile_contact_form">
			<div class="close-button">
				<div>
					<img alt="close_button" src="images/close_off_canvas_light.png">
					<span>Close</span>
				</div>
			</div>
			<div id="include_mobile_contact_form" class="inner-padding-mobile">	
				<?php include "includes/contact_form.inc.php" ; ?>
			</div>
		</section>	
		
		<!-- DESKTOP -->
		<section id="main_wrapper">
			<header>
				<div id="top_container">
					<div class="container">
						<div class="inner-padding">
						<!-- Company Info -->
							<div id="company_info"><img alt="company logo" src="images/logo.png"></div>
							<div id="number">
								<div  rel="trigger_mobile_nav">
									<img src="images/mobile-nav.png" id="mobile_nav" rel="trigger_mobile_nav">
								</div>
								<p id="top_number"><span>CALL</span> 254-488-5501</p>
								<p id="sub_title">Local and Trusted Roofing Experts</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>		
				<!-- Slider -->
				<div class="slider">
					<div class="container">
						<div class="inner-padding">
							<div id="learn_more">
								<div class="learn-more-about-us">
									<h1>Learn More About Us</h1>
									<p>Lorem ipsum dolor sit smet, consectetur adispicing elit. Nullan eu frigina maximush, Duis egot sodalese eros. Suspendiet Dicturm, faucibnus mauris in, frightlas quan</p>
								</div>
							</div>
							<div id="coupon_container">
								<img src="images/coupon.png">
							</div>	
							<div class="clear"></div>	
						</div>	
					</div>	
				</div>
				<!-- SCHEDULE SERVICE -->
				<div id="schedule">
					<div class="container">
						<div class="inner-padding">
							<div id="contact_us_mobile" rel="trigger_mobile_contact">
								<img src="images/email.png" id="email_logo" rel="trigger_mobile_contact">
								<p>CONTACT US</p>
							</div>

							<h4 id="h4_service">SCHEDULE SERVICE</h4>
							<div id="include_desktop_contact_form" class="form">
								<!-- Form -->
								<?php include "includes/contact_form.inc.php" ; ?>	      	
							</div>	
						</div>	
					</div>
				</div>	
				<!-- THREE BOX -->
				<div id="three_box">
					<div class="container">
						<div class="three-box-article">
							<div class="three-box-one">
								<h4 class="three-box-h4">UPFRONT PRICING</h4>
								<p class="three-box-p">We’ll always provide you with the price of the work before we begin. No surprises or hidden fees!</p>
							</div>
						</div>
						<div class="three-box-article">
							<div class="three-box-two">
								<h4 class="three-box-h4">24-HOUR SERVICE</h4>
								<p class="three-box-p">We are available 24 hours a day, 7 days a week, to assist you with any problem that may arise.</p>
							</div>	
						</div>
						<div class="three-box-article">
							<div class="three-box-three">
								<h4 class="three-box-h4">SAME-DAY SERVICE</h4>
								<p class="three-box-p">Don't wait all day for service! Schedule an appointment with us and we'll provide service within 24hrs.</p>
							</div>	
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</header>
			<!-- SECTION ARTICLE -->
			<section id="section_content">
				<div class="container">
					<div class="inner-padding">
