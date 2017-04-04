<?php
/**

 */

get_header(); ?>


<div id="main">
	
	<?php include('banner.php');?>
	
	<div class="content_wrapper">
		
		<?php get_sidebar(); ?>
		
		<div class="content">
			
			<h2 class="inner_page_header"><?php the_title();?></h2>
			
			<div class="inner_phone_number"><a href="tel:5022674971">Ky&nbsp;502.267.4971</a> &nbsp;|&nbsp; <a href="tel:8129442267">In&nbsp;812.944.2267</a> | <a href="mailto:charlie@designers-touch.com">charlie@designers-touch.com</a></div>
			
			
			<?php get_template_part( 'loop', 'page' );?>
			
		</div><!-- content -->
		
		<div class="mobile_product_menu">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'sidebar' ) ); ?>
			
		</div><!-- mobile_product_menu -->
		
		
	</div><!-- content_wrapper -->




<?php get_footer(); ?>
