<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package One_in_ten
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body id="oit-body" <?php body_class(); ?>>
  <?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'one-in-ten'); ?></a>
	<!-- Header Starts Here  -->
	<header id="oit-header" class="site-header">
		<div class="container-lg header-wrap">
			<div class="logo">
				<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
					<img src="<?php asset_path( '/images/header-logo.jpg', true ); ?>" class="logo-header img-fluid" alt="<?php bloginfo( 'name' ); ?>">
				</a>
			</div>
			<div class="navigation">
				<?php
					if ( has_nav_menu( 'header-menu' ) ) {
						wp_nav_menu(array(
							'theme_location'   => 'header-menu',
							'menu_class'		   => 'nav-menu',
							'container_class'  => 'nav-menu-wrap',
							'container_id'     => 'oit-menu-wrap',
						));
					}
				?>
				<a href="#oit-menu-toggler" id="oit-menu-toggler" class="menu-toggler">
					<?php get_template_part( 'template-parts/svg/svg', 'bars' ); ?>
				</a>
			</div>
		</div>
	</header>
	<main class="site-main" id="main">
	<!-- Header Ends Here  -->