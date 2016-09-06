<?php
/**

Template Name: Products

 */

get_header(); ?>


<div id="main">
	
	<?php include('banner.php');?>
	
	<div class="content_wrapper">
		
		<?php get_sidebar(); ?>
		
		<div class="content">
			
			
			<?php get_template_part( 'loop', 'page' );?>
			
		</div><!-- content -->
		
		<div class="mobile_product_menu">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'sidebar' ) ); ?>
			
		</div><!-- mobile_product_menu -->
		
	</div><!-- content_wrapper -->




<?php get_footer(); ?>
