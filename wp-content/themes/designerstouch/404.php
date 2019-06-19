<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div id="main">
	
	<?php include('banner.php');?>
	
	<div class="content_wrapper">
		
		<?php get_sidebar(); ?>
		
		<div class="content">
			
			
			<p>Apologies but this page you requested cannot be found.</p>
			
		</div><!-- content -->
		
		<div class="mobile_product_menu">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'sidebar' ) ); ?>
			
		</div><!-- mobile_product_menu -->
		
		
	</div><!-- content_wrapper -->




<?php get_footer(); ?>

<?php get_footer(); ?>
