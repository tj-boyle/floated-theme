<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		<header id="header" role="banner">
			<div id="branding-wrapper">
				<section id="branding">
					<div id="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
							<div id="logo"></div>
						</a>
					</div>
					<div id="site-cta">
						<p id="cta-text">Stay on Top</p>
						<div id="cta-input">
							<input type="email" placeholder="Your email here..."/>
							<input type="button" value="Go!"/>
						</div>
					</div>
				</section>
			</div>
			<nav id="menu" role="navigation">
				<div id="search">
					<?php get_search_form(); ?>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
		</header>
		<div id="container">