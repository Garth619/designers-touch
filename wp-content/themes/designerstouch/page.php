<?php
/**

 */

get_header(); ?>


<div id="main">
	
	<?php include('banner.php');?>
	
	<div class="content_wrapper">
		
		<?php get_sidebar(); ?>
		
		<div class="content">
			
			
			<?php get_template_part( 'loop', 'page' );?>
			
		</div><!-- content -->
		
		
	</div><!-- content_wrapper -->




<?php get_footer(); ?>
