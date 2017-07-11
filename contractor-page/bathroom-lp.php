<!doctype html>

<html class="no-js"  <?php language_attributes(); ?> style="margin-top:0!important;">
<?php
/**
 * Template Name: Bathroom LP
 */?>
<head>
	<meta charset="utf-8">

	<!-- Force IE to use the latest rendering engine available -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta class="foundation-mq">

	<!-- If Site Icon isn't set in customizer -->
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
		<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
	<?php } ?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation-flex.min.css">

	<meta name="msapplication-TileColor" content="#f01d4f">
	<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Muli:300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/haa-style.css">

	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
	<meta name="theme-color" content="#121212">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php /*wp_head(); */?>

	<!-- Drop Google Analytics here -->
	<!-- end analytics -->

<?php
	$actual_link = $_SERVER['QUERY_STRING'];

	/* Spits out the array so you can remember how the bloody thing is structured
	* echo '<pre>'; print_r($matches); echo '</pre>';
	* */

	$haa_query_1 = $_GET['c'];


	switch ($haa_query_1) {
	case "contractor":

	$hl = "Bathroom Contractor";

	break;

	case "refinishing":

	$hl = "We Specialize In Bathroom Refinishing";

	break;

		case "install":

			$hl = "We Specialize In Bathroom Installation";

			break;

	case "renovate":

	$hl = "We Specialize In Bathroom Renovation";

	break;

	case "remodel":

	$hl = "We Specialize In Bathroom Remodeling";

	break;

		case "shower":

			$hl = "We Specialize In Shower Remodeling";

			break;
		

	default:
	$hl = "We Specialize In Bathroom Renovation";

	}?>

</head>
<body <?php body_class(); ?>>

<!-- HAA Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KF784L"
				  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KF784L');</script>
<!-- End HAATag Manager -->


<div class="flow-wrap">
<div class="row r1 align-middle">


	<div class="small-6 columns r1-c1">

		<img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" class="r1-c1-logo"
			 alt="Wikstrom Construction">
		<h2 class="align-self-middle">Wikstrom<br>Construction
		</h2>

	</div>

	<div class="small-6 small-6 medium-6 columns r1-c2">

		<a href="#cf7" class="desk-show"><i class="fa fa-envelope" aria-hidden="true"></i></a>
		<div class="vc-mob-out">
<h3 class="vc-mob-in">
	<a href="#cf7" class="mobile-show"><i class="fa fa-envelope" aria-hidden="true"></i></a>
	Call Now!<br>
	<a href="tel:19524542901">952.454.2901</a>
	
</h3>

		</div>
	</div>


</div>

<div class="g2-wrap-custom">
<div class="g1-wrap">
<div class="row r2">

	<div class="small-12 medium-12 large-12 columns r2-c1">

<h3 id="haaHd"><?php echo $hl; ?></h3>

	</div>





</div>
</div>

<div class="row r3">


	<div class="small-6 small-6 medium-6 columns r3-c1">



	</div>

	<div class="small-6 small-6 medium-6 columns r3-c2">

<h2>Why Choose Wikstrom?</h2>

		<ul>
			<li>Free In Home Estimates<br class="desk-show">
			Within 24 Hours</li>
			<li>Timely Quotes</li>
			<li>No Cost Layout Design</li>
			<li>Over 30 Years Of Experience</li>
			<li>Locally Owned</li>
			<li>Expert Craftsmanship</li>
			<li>Licensed, Bonded, Insured</li>
			<li>Warrantied Work</li>
		</ul>

	</div>

</div>

</div>

<div class="row r4">


	<div class="small-12 medium-12 large-4 columns r4-c1">

		<h3>
			<div class="clr-white">
		Beautiful Showers
			</div>
		</h3>
		<img src="<?php bloginfo('template_url'); ?>/assets/images/bath2.png" class="r4-c1-img"
			 alt="Beautiful Showers">
	</div>

	<div class="small-12 medium-12 large-4 columns r4-c2">

		<h3>
			<div class="clr-white">
			Stunning Baths
			</div>
		</h3>
		<img src="<?php bloginfo('template_url'); ?>/assets/images/bath3.png" class="r4-c2-img"
			 alt="Stunning Baths">

	</div>

	<div class="small-12 medium-12 large-4 columns r4-c3">

		<h3>
			<div class="clr-white">
			Vanities & Counter Tops
			</div>
		</h3>
		<img src="<?php bloginfo('template_url'); ?>/assets/images/bath4.png" class="r4-c3-img"
			 alt="Vanities & Counter Tops">
		
	</div>


</div>


<div class="g1-wrap">

<div class="row r5">

	<div class="r5-before"></div>

	<div class="small-12 medium-12 large-4 columns r5-c1">



		<ul>
			<h3>

				Our Credentials

			</h3>
			<li>Helping Our<br>Neighbors Since 1985!</li>

			<li>Licensed, Bonded,<br>
			Insured</li>

			<li>Second Generation<br>Builders</li>

			<li>Craftsmanship<br>
			Warranties</li>

			<li>Mechanical<br>
			Warranties</li>
		</ul>

	</div>

	<div class="small-12 medium-12 large-4 columns r5-c2">


		

		<ul>
			<h3>

				The Wikstrom Promise

			</h3>
			<li>Friendly Courteous<br>Service</li>

			<li>Daily Clean Up</li>

			<li>Timely Updates</li>

			<li>Fair & Reasonable<br>
			Quotes</li>

			<li>In Home Visits<br>
			Within 24 Hours</li>
		</ul>


	</div>

	<div class="small-12 medium-12 large-4 columns r5-c3">


		

		<ul>
			<h3>

				How We Can Help

			</h3>
			<li>Bath Tubs & Faucets</li>
			<li>Showers & Glass</li>
			<li>Tile Arrangements</li>
			<li>Vanities & Shelving</li>
			<li>Countertops</li>
			<li>Accessible Baths</li>
			<li>New Fixtures</li>
			<li>Wall Surrounds</li>
			<li>Bathroom Sink</li>
			<li>Tub To Shower
			Conversions</li>
			<li>Grab Bars & Towel Bars</li>

		</ul>


	</div>

</div>

</div>


<div class="g2-wrap">
<div class="row r6">

	<div class="small-12 medium-12 large-4 columns r6-c1">

<h3>
	Call For A<br>
	<span class="bigger">Free</span><br>
	Quote
</h3>
<h4>
	<a href="tel:19524542901">(952)454 2901</a>
</h4>
		<div class="or">OR</div>
	</div>

	<div class="small-12 medium-12 large-8 columns r6-c2">

		<a name="cf7"><?php echo do_shortcode( '[contact-form-7 id="655" title="Bathroom Service"]' ); ?></a>

	</div>


</div>
</div>
	
<div class="g1-wrap">
<div class="row r7 footer">


	<div class="small-12 large-8 columns r7-c1">
		Wikstrom Construction is proud to serve the counties of Hennepin, Dakota, and Scott. Cities include:<br>
		Lakeville, Apple Valley, Eagan, New Market, Prior Lake, Savage, Burnsville, Rosemount, and Farmington <br>
		Website Copyright © <?php echo date('Y'); ?> By Wikstrom Construction; All Rights Reserved.

	</div>

	<div class="small-12 large-4 columns align-bottom r7-c2">

		Contractor<br>
		Lic# BCG47913

	</div>




</div>

</div>
</div>


<script type="text/javascript" src="//cdn.callrail.com/companies/560295051/6af6123b714b40061da5/12/swap.js"></script>
</body>
</html> <!-- end page -->