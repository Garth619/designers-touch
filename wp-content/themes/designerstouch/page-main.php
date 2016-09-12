<?php
/**
 * Template Name: Main
*/

get_header(); ?>

<div id="main">
	
	
	<section class="slideshow_wrapper">
	
	
	<div class="slideshow">
		
		
		
		
		<?php if(get_field('slideshow')): ?>
 
		
			<?php while(has_sub_field('slideshow')): ?>
			
			
			<?php $slide = wp_get_attachment_image_src(get_sub_field('image'), 'slides'); ?>
      
		<div class="slide" style="background:rgba(0, 0, 0, 0) url(<?php echo $slide[0]; ?>) no-repeat scroll left top / cover ">
			
			<div class="slide_content">
				
				<span class="slide_header"><?php the_sub_field('slide_title');?></span><!-- slide_header -->
				
				<div class="number_wrapper">
				
					<a class="numbers" href="tel:5022674971">Ky - 502 267 4971</a>
					<a class="numbers" href="tel:8129442267">In - 812 944 2267</a>
				
				</div><!-- number_wrapper -->
				
				<a href="<?php bloginfo('url');?>/contact" class="blue_button">Get Started</a>
				
			</div><!-- slide_content -->
			
		</div><!-- slide -->
 
    	
 
			<?php endwhile; ?>
 

		<?php endif; ?>
		
		
		
		
		
		
		
				
		
	</div><!-- slideshow -->
	
	
	<div class="buttons">
		<div class="back"></div><!-- back -->
		<div class="next"></div><!-- next -->
	</div><!-- buttons -->
	
	<div class="mydots"></div><!-- mydots -->
	
	
	</section><!-- slideshow_wrapper -->
	
	
	
	<section class="intro">
		
		<span class="intro_header">Designing Custom Window Treatments Since 1972!</span>
		
		<img src="<?php bloginfo('template_directory');?>/images/ew.jpg"/>
		
		<div class="intro_options_wrapper">
			
			
			<div class="single_intro_options">
				
				<a href="<?php the_field('page_link');?>">
					
					<?php $box1 = wp_get_attachment_image_src(get_field('box_1'), 'mainpagebox'); ?>
					<img src="<?php echo $box1[0]; ?>"/>
				
				</a>
				
				<a class="intro_button" href="<?php the_field('page_link');?>"><?php the_field('box_1_title');?></a><!-- intro_button -->
				
			</div><!-- single_intro_options -->
			
			<div class="single_intro_options">
				
				<a href="<?php the_field('page_link_2');?>">
					
					<?php $box2 = wp_get_attachment_image_src(get_field('box_2'), 'mainpagebox'); ?>
					<img src="<?php echo $box2[0]; ?>"/>
				
				</a>
				
				<a class="intro_button" href="<?php the_field('page_link_2');?>"><?php the_field('box_2_title');?></a><!-- intro_button -->
				
			</div><!-- single_intro_options -->
			
			<div class="single_intro_options">
				
				<a href="<?php the_field('page_link_3');?>">
					
					<?php $box3 = wp_get_attachment_image_src(get_field('box_3'), 'mainpagebox'); ?>
					<img src="<?php echo $box3[0]; ?>"/>
				
				</a>
				
				<a class="intro_button" href="<?php the_field('page_link_3');?>"><?php the_field('box_3_title');?></a><!-- intro_button -->
				
			</div><!-- single_intro_options -->			
			
			
			<div class="single_intro_options">
				
				<?php $box4 = wp_get_attachment_image_src(get_field('box_4'), 'mainpagebox'); ?>
				<img src="<?php echo $box4[0]; ?>"/>
				
				
				<span class="intro_button" href="<?php the_field('page_link_4');?>"><?php the_field('box_4_title');?></span><!-- intro_button -->
				
			</div><!-- single_intro_options -->			
			
			
		</div><!-- intro_options_wrapper -->
		
	</section><!-- intro -->
	
	
	<?php if(get_field('about_slideshow')): ?>
		
			<section class="about">
 
			<div class="about_slideshow">
 
			<?php while(has_sub_field('about_slideshow')): ?>
 
    		
    		<div class="about_slide">
				
					<div class="about_slide_content">
				
						<span class="large_header"><?php the_sub_field('slide_title');?></span><!-- large_header -->
				
						<?php the_sub_field('slide_content');?>				
					
					</div><!-- about_slide_content -->
				
					<div class="about_slide_image">
					
						<?php $about1 = wp_get_attachment_image_src(get_sub_field('image'), 'aboutprofilepic'); ?>
						<img src="<?php echo $about1[0]; ?>"/>
						
						<span><?php the_sub_field('image_title');?></span>
					
					</div><!-- about_slide_image -->
				
				
				</div><!-- about_slide -->
    
 
			<?php endwhile; ?>
 
			</div><!-- about_slideshow -->
		
		
			<div class="about_buttons">
				<div class="about_back"></div><!-- about_back -->
				<div class="about_next"></div><!-- about_next -->
			</div><!-- about_buttons -->
	
			<div class="mydots_about"></div><!-- mydots -->

 
		</section><!-- about -->
		
		<?php endif; ?>
		

	<section class="warranties">
		
		<span class="large_header">Four Remarkable Warranties</span><!-- large_header -->
		
		<a class="blue_button" href="<?php bloginfo('url');?>/warranties">Learn More</a>
		
		<div class="four_warr_wrapper">
			
			<div class="single_warr">
				
				<span class="circle">1</span><!-- circle -->
				
				<span class="warr_description">The Best<br/>Price Anywhere</span><!-- warr_description -->
				
			</div><!-- single_warr -->
			
			<div class="single_warr">
				
				<span class="circle">2</span><!-- circle -->
				
				<span class="warr_description">The Best Quality<br/>and Workmanship</span><!-- warr_description -->
				
			</div><!-- single_warr -->
			
			<div class="single_warr">
				
				<span class="circle">3</span><!-- circle -->
				
				<span class="warr_description">A 10-Year<br/>Performance Assurance</span><!-- warr_description -->
				
			</div><!-- single_warr -->
			
			<div class="single_warr">
				
				<span class="circle">4</span><!-- circle -->
				
				<span class="warr_description">On-Time<br/>Appointments</span><!-- warr_description -->
				
			</div><!-- single_warr -->
			
		</div><!-- four_warr_wrapper -->
		
	</section><!-- warranties -->
	
	




<?php get_footer(); ?>
