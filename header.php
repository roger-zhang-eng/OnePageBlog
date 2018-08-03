<?php
/**
 * Default theme header
 *
 * Displays the <head> section as well as the opening tag for the body
 * 
 * @package clutterless
 * @since clutterless 2.1.0
 *  @license CCA 3.0
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<!-- Responsive stylesheet -->
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	
	<!-- RSS Feed -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	
	<!-- Pingbacks -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php indented_wp_head(); ?>

</head>

<body <?php body_class(); ?> >

<?php get_sidebar(); ?>

<div id="ipad-click">

	<div id="content">
	