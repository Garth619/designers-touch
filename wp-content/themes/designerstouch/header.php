<?php
/**

 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=79" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick-master/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick-master/slick/slick-theme.css"/>
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28969355-24', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>

				
		
		<header>
			
			<div class="inner_header">
			
			<a href="<?php bloginfo('url');?>">
				<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.png"/>
			</a>
			
			<div class="menu_wrapper">
				
				<div class="menu_bars"></div><!-- menu_bars -->
				<div class="menu_bars"></div><!-- menu_bars -->
				<div class="menu_bars"></div><!-- menu_bars -->
				
			</div><!-- menu_wrapper -->
			
			<div class="desktop_nav">
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				
			</div><!-- desktop_nav -->
			
			</div><!-- inner_header -->
			
		</header>
		
		
		<div class="mobile_menu_list">
			
			<div class="menu_list_inner">
			
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			
			</div><!-- menu_list_inner -->
			
		</div><!-- mobile_menu_list -->
		