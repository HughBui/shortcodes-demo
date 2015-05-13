<?php
/*
 * Template Name: Facilities-shortcodes
 * Description: Single Facilities Page Template.
 */

// Code to display Page goes here...?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>John de Laeter Centre</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_directory); ?>/style-shortcodes.css">
	<script type="text/javascript" src="<?php bloginfo(stylesheet_directory); ?>/script-shortcodes.js"></script>
	<script type="text/javascript">
		var templateDirectory = "<?php echo bloginfo(stylesheet_directory); ?>";
	</script
	</head>
	<body>
		<!-- header section  -->
		<section class="hero facilitiesTop">
			<header>
				<div class="wrapper">
					<img class="logo" src="<?php bloginfo(stylesheet_directory); ?>/img/logo.png"/>
					<nav>
						<ul>
							<script>generateMenu();</script>
						</ul>
						<a href="#" class="login_btn">Contact</a>
					</nav>
				</header>

				<section class="caption">
					<h3 class="caption">(TIMS)</h3>
					<h2 class="caption">THERMAL IONIZATION MASS SPECTROMETRY FACILITY</h2><br/>
					<p class="caption smallText">
						The Thermal Ionisation Mass Spectrometry (TIMS) facility provides highly accurate 
						and precise measurements of the isotopic composition of elements. Our TIMS facility 
						incorporates Thermo Finnegan Triton"' and a VG 354 multicollector mass spectrometers. 
					</p>
					<img src="<?php bloginfo(stylesheet_directory); ?>/img/video.png"/>
					<h3 class="caption intro">
						THIS INSTRUMENT PROVIDES HIGHLY ACCURATE AND PRECISE MEASUREMENTS<br/>
						OF AN ELEMENT'S ISOTOPIC COMPOSITION, REPRESENTING THE 'GOLD'<br/>
						STANDARD FOR ISOTOPIC ANALYSIS. THE ISOTOPIC DILUTION TECHNIQUE IS<br/>
						USED TO MEASURE THE CONCENTRATION OF ELEMENTS IN A MATRIX AND CAN<br/>
						YIELD THE HIGHEST ACCURACY ACHIEVABLE. 
					</h3>
				</section>
			</section>
			<!--  end header section  -->

			<!--  APPLICATIONS section  -->
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>		
			<!--  end APPLICATIONS section  -->

			<!--  footer section  -->
			<div class="footer">
				<div class="address">
					<img src="<?php bloginfo(stylesheet_directory); ?>/img/address.jpg"/>
					<h1>John de Laeter Centre</h1>
					<p>Building 301, Curtin University.<br/>Bentley, 6845. WESTERN AUSTRALIA</p>
				</div>

				<div class="link">
					<script>generateFooterLinks();</script>
				</div>

				<div class="social">
					<p style="color:white">Contact to us via social:</p>
					<script>generateSocialIcons();</script>
				</div>
			</div>
			<div class="copyright">
				<img src="<?php bloginfo(stylesheet_directory); ?>/img/gramercy.jpg"/ class="left">
				<img src="<?php bloginfo(stylesheet_directory); ?>/img/copywrite.jpg" class="right"/>
			</div>
			<!--  end footer section  -->
		</body>
		</html>