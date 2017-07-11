<?php $phone = '<a href="tel:8888888888">888.888.8888</a>'  ; ?>

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
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/contractor-page/assets/images/win8-tile-icon.png">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/contractor-page/haa-style.css">

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

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-"
				  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-');</script>
<!-- End Google Manager -->

