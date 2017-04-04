<?php
/**
	
	Template Name: Gallery Main Page

 */

get_header(); ?>


<div id="main">
	
	<?php include('banner.php');?>
	
	<div class="content_wrapper">
		
		
		<div class="gallery_wrapper">
			
			<h1 style="padding-bottom:20px;"><?php the_title();?></h1>
			
			<a class="gallery_back" href="<?php bloginfo('url');?>/gallery">Back to The Main Gallery Page</a>
			
			<div class="inner_phone_number" style="padding-top:10px;"><a href="tel:5022674971">Ky&nbsp;502.267.4971</a> &nbsp;|&nbsp; <a href="tel:8129442267">In&nbsp;812.944.2267</a> | <a href="mailto:charlie@designers-touch.com">charlie@designers-touch.com</a></div>
			
			<?php get_template_part( 'loop', 'page' );?>
			
			
			
			
		</div><!-- gallery_wrapper -->
				
		
	</div><!-- content_wrapper -->




<?php get_footer(); ?>
