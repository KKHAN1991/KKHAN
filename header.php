<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package kkhan
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600italic,600,700,700italic,800,800italic'
		  rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600italic,600,700,700italic,800,800italic'
		  rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" href="/wp-content/themes/kkhan/img/favicon.ico" type="image/x-icon" />
</head>

<body class="menu">
	<header data-scroll-header class="site-header">
		<a class="menu-toggle" id="menuButton"><i class="fa fa-bars"></i></a>
		<nav data-scroll-header class="site-nav main-menu menu-side arrow-right">
			<ul>
				<li><a data-scroll href="#home"><i class="fa fa-home"></i></a></li>
				<li><a data-scroll href="#services">Services</a></li>
				<li><a data-scroll href="#skills">Skills</a></li>
				<li><a data-scroll href="#projects">Projects</a></li>
				<li><a data-scroll href="#testimonials">Testimonials</a></li>
				<li><a href="/blog">Blog</a></li>
				<li><a data-scroll href="#contact">Contact</a></li>
			</ul>
		</nav>
	</header>