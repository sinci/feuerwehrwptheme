<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package feuerwehrwp2
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="tm-page">
<header id="masthead" class="site-header">
<div class="uk-container uk-container-expand" uk-sticky>

	<nav class="uk-navbar uk-visible@m" uk-navbar>
		<div class="uk-navbar-left">
			<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$feuerwehrwp_description = get_bloginfo( 'description', 'display' );
			if ( $feuerwehrwp_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $feuerwehrwp_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
			</div><!-- .site-branding -->
		</div>
		<div class="uk-navbar-right">
		
			<?php wp_nav_menu( array(
				'menu'              => 'menu-1',
				'theme_location'    => 'menu-1',
				'depth'             => 3,
				'container'         => '',
				'menu_class'        => 'uk-navbar-nav',
				'fallback_cb'       => 'your_themename_top_menu::fallback',
				'walker'            => new your_themename_top_menu())
			); ?>  

		</div>
	</nav><!-- #site-navigation -->

<!-- Header Mobile -->
	<nav class="uk-navbar uk-padding-remove uk-hidden@m">
		<div class="uk-navbar-left">
			<a class="uk-navbar-toggle" uk-toggle="target:#offcanvas-slide">
				<span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
			</a>
		</div>
		<div class="uk-navbar-center uk-navbar-item uk-logo">

				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$feuerwehrwp_description = get_bloginfo( 'description', 'display' );
					if ( $feuerwehrwp_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $feuerwehrwp_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
		</div> 
	</nav>

</div><!-- .uk-container uk-container-expand -->
</header><!-- #masthead -->

<div id="content" class="site-content" role="main">
