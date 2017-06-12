<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>
	<?php
 	
		if( get_field('banner-image') ):
			$navigation_classes = array('main-navigation');
			$logo_class = array('logo');
				else:
			$navigation_classes = array( 'secondary-navigation' );
			$logo_class = array('logo2');
		endif;

	?>


	<body <?php body_class(); ?>>


		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" <?php body_class($navigation_classes) ?> role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<div <?php body_class($logo_class) ?>>

						</div>
					<!--<img src="<?php header_image()?>" height="75px" width="75px" alt="">-->
					<div class="navigation-container">
						<?php	wp_nav_menu(array(
								'theme_location' => 'primary',
								'container' => false,
								'menu_class' => '',
								)
							); ?> <i class="fa fa-search" aria-hidden="true"></i>
						</div> <!--#navigation-container-->
				</nav><!-- #site-navigation -->
				<?php if( get_field('banner-image') ):
					$value = get_field('banner-image');
					echo '<img src="'.$value;
					echo '" alt= "" </img>';
				endif; ?>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
