<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Growth
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}

dynamic_sidebar( 'sidebar-2' );

?>