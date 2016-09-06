<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="main">
	
	
	
	<div class="content_wrapper">
		
	<?php include('sidebar-blog.php');?>
		
		<div class="content">
			
			
			
			<?php get_template_part( 'loop', 'single' );?>

		</div><!-- content -->
		
		<div class="mobile_product_menu">
			
			<ul>
		
				<?php wp_list_categories(); ?>
		
		</ul>
			
		</div><!-- mobile_product_menu -->
		
		
	</div><!-- content_wrapper -->


<?php get_footer(); ?>

