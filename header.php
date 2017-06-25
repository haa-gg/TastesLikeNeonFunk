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
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
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
		<!-- <nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>
		
				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav> -->
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );?>

		<div class="desk-nav show-for-large">
	
<?php wp_nav_menu(array('sort_column' => 'menu_order', 'container_class' => 'menu-header')); ?>
	
</div>

<div class="row hero-head">

<div class="column small-12">

<img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/logo.png" class="logo" alt="Glendon Gengel's Design and Development Work">

</div>

</div>

