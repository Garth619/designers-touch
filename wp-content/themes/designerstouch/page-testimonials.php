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
