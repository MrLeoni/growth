<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Growth
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
} ?>

<div class="insta-box">
  <?php dynamic_sidebar( 'sidebar-3' ); ?>
  <a href="#" class="insta-btn" title="/growthsupplements"><img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/logo/instagram-logo.png" alt="Instagram">Siga @growthsupplements</a>
</div>