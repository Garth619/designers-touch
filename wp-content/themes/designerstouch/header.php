<?php
/**

 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick-master/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick-master/slick/slick-theme.css"/>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

				<?php // wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		
		<header>
			
			<div class="inner_header">
			
			<a href="">
				<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.png"/>
			</a>
			
			<div class="menu_wrapper">
				
				<div class="menu_bars"></div><!-- menu_bars -->
				<div class="menu_bars"></div><!-- menu_bars -->
				<div class="menu_bars"></div><!-- menu_bars -->
				
			</div><!-- menu_wrapper -->
			
			</div><!-- inner_header -->
			
		</header>