<?php
/**
	
	Template Name: Testimonials

 */

get_header(); ?>


<div id="main">
	
	<?php include('banner.php');?>
	
	<div class="content_wrapper">
		
		<?php get_sidebar(); ?>
		
		<div class="content">
			
			<h2 class="inner_page_header"><?php the_title();?></h2>
			
			<div class="inner_phone_number"><a href="tel:5022674971">Ky&nbsp;502.267.4971</a> &nbsp;|&nbsp; <a href="tel:8129442267">In&nbsp;812.944.2267</a> | <a href="mailto:charlie@designers-touch.com">charlie@designers-touch.com</a></div>
			
			<?php if(get_field('testimonials')): ?>
		
				
				<div class="testmonials_inner_wrapper">
			
 
			<?php while(has_sub_field('testimonials')): ?>
 
				
    		<div class="inner_single_test">
				
					<span class="test_name"><?php the_sub_field('name');?></span>
					<span class="test_title">Approximate Cost:</span>
					<span class="test_answer"><?php the_sub_field('approximate_cost');?></span>
					<span class="test_title">Description Of Work:</span>
					<span class="test_answer"><?php the_sub_field('description_of_work');?></span>
					
					<?php the_sub_field('testimonial');?>


				</div><!-- inner_single_test -->
    		    
 
			<?php endwhile; ?>
			
				</div><!-- testmonials_wrapper -->
					
		<?php endif; ?>
			
			

			
						
		</div><!-- content -->
		
		
	</div><!-- content_wrapper -->




<?php get_footer(); ?>
