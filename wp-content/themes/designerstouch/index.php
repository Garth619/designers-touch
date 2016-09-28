<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div id="main">
	
	<div class="banner">
		
		<div class="inner_banner_content">
			
			<span class="large_header">Designer's Touch Blog</span>
			
				<div class="number_wrapper">
				
					<a class="numbers" href="tel:5022674971">Ky - 502 267 4971</a>
					<a class="numbers" href="tel:8129442267">In - 812 944 2267</a>
				
				</div><!-- number_wrapper -->
				
				<a href="<?php bloginfo('url');?>/contact" class="blue_button">Get Started</a>
			
		</div><!-- inner_banner_content -->
		
	</div><!-- banner -->
	
	<div class="content_wrapper">
		
	<?php include('sidebar-blog.php');?>
		
		<div class="content">
			
			
			<h2 class="inner_page_header">Blog</h2>
			
			<div class="inner_phone_number"><a href="tel:5022674971">Ky&nbsp;502.267.4971</a> &nbsp;|&nbsp; <a href="tel:8129442267">In&nbsp;812.944.2267</a></div>
			
			
			<?php get_template_part( 'loop', 'index' ); ?>

		</div><!-- content -->
		
		<div class="mobile_product_menu">
			
			<ul>
		
				<?php wp_list_categories(); ?>
		
		</ul>
			
		</div><!-- mobile_product_menu -->
		
		
	</div><!-- content_wrapper -->


<?php get_footer(); ?>
