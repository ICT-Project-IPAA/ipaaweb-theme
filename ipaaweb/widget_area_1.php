<?php

/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ipaaweb
 */

if ( ! is_active_sidebar( 'widget_area_1' ) ) {
	return;
}
?>
<aside id="secondary1" class="widget-area" role="complementary">
THIS IS widget area 1
	<?php dynamic_sidebar( 'widget_area_1' ); ?>
</aside><!-- #secondary -->
