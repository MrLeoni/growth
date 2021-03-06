<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Growth
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
<!-- Favicons -->
<link rel="icon" href="<?php bloginfo("stylesheet_directory"); ?>/assets/images/logo/favicon_16.png" size="16x16">
<link rel="icon" href="<?php bloginfo("stylesheet_directory"); ?>/assets/images/logo/favicon_32.png" size="32x32">
<!-- Local Files -->
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/ionicons.min.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/jquery.bxslider.css" rel="stylesheet">

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header id="header">
			<div class="container">
				<div class="top-header clearfix">
					<div class="logo-box">
						<a href="<?php echo esc_html(home_url("/")); ?>" title="Growth Blog"><img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/logo/growth-blog-logo.png" alt="Growth Blog"></a>
					</div>
					<div class="search-box">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
			<nav id="main-nav">
				<div class="container">
					<?php
            $header_menu_args = array(
              "theme_location"	=> "header",
              "container"				=> "ul",
              "menu_class"			=> "nav-links"
            );
            wp_nav_menu($header_menu_args);
          ?>
				</div>
			</nav>
			<div class="mobile-btn">
				<i class="ion-ios-arrow-down"></i>
				<div class="transition-mobile"></div>
			</div>
		</header>
	
