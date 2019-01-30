<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
	<!-- 
	Digging around in the HTML, huh? 
	That's awesome! 
	If you want the source files for this project to mess around with, head over to https://github.com/haa-gg/TastesLikeNeonThrashMetal
	and download my repo.
	-->
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TK2BPCQ');</script>
<!-- End Google Tag Manager -->
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TK2BPCQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php do_action( 'foundationpress_after_body' ); ?>

	
	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header class="site-header hide-for-large" role="banner">
		<div class="site-title-bar title-bar " <?php //foundationpress_title_bar_responsive_toggle() ?>>
			<div class="title-bar-left">
				<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				
			</div>
		</div>
		
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );?>

		<div class="desk-nav show-for-large">
	
<?php wp_nav_menu(array('sort_column' => 'menu_order', 'container_class' => 'menu-header')); ?>
	
</div>

<div class="row hero-head">

<div class="column small-12">

<img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/logo2.png" class="logo" alt="Glendon Gengel's Design and Development Work">

</div>

</div>

