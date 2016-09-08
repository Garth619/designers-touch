<?php
/**
	
	Template Name: Gallery Main Page

 */

get_header(); ?>


<div id="main">
	
	<?php include('banner.php');?>
	
	<div class="content_wrapper">
		
		
		<div class="gallery_wrapper">
			
			
			<?php get_template_part( 'loop', 'page' );?>
			
			
			
			
		</div><!-- gallery_wrapper -->
				
		
	</div><!-- content_wrapper -->




<?php get_footer(); ?>
