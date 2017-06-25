<?php
/**
 * Template part for off canvas menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<nav class="mobile-off-canvas-menu off-canvas position-left" id="<?php foundationpress_mobile_menu_id(); ?>" data-off-canvas data-auto-focus="false" role="navigation">
 <?php wp_nav_menu(array('sort_column' => 'menu_order', 'container_class' => 'menu-header')); ?>
</nav>

<div class="off-canvas-content" data-off-canvas-content>
