<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Viral
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="vl-page">
	<header id="vl-masthead" class="vl-site-header">
		<div class="vl-container">
			<div id="vl-site-branding">
				<?php if ( get_header_image() ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>">
					</a>
				<?php else: ?>
					<h1 class="vl-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="vl-site-description"><?php bloginfo( 'description' ); ?></p>
				<?php endif; // End header image check. ?>
			</div><!-- .site-branding -->

			<nav id="vl-site-navigation" class="vl-main-navigation">
			<div class="vl-toggle-menu"><span></span></div>
				<?php wp_nav_menu( 
						array( 
						'theme_location' => 'primary', 
						'container_class' => 'vl-menu vl-clearfix' ,
						'menu_class' => 'vl-clearfix',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
						) 
					); 
				?>
			</nav><!-- #vl-site-navigation -->
		</div>
	</header><!-- #vl-masthead -->

	<div id="vl-content" class="vl-site-content">
