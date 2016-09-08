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
				
				<a href="<?php bloginfo('url');?>/gallery">
					<img src="<?php bloginfo('template_directory');?>/images/intro-test.jpg"/>
				</a>
				
				<a class="intro_button" href="<?php bloginfo('url');?>/gallery">Photo Gallery</a><!-- intro_button -->
				
			</div><!-- single_intro_options -->
			
			<div class="single_intro_options">
				
				<a href="<?php bloginfo('url');?>/products">
					<img src="<?php bloginfo('template_directory');?>/images/intro-test.jpg"/>
				</a>
				
				<a class="intro_button" href="<?php bloginfo('url');?>/products">Products</a><!-- intro_button -->
				
			</div><!-- single_intro_options -->
			
			<div class="single_intro_options">
				
				<a href="<?php bloginfo('url');?>/blog">
					<img src="<?php bloginfo('template_directory');?>/images/intro-test.jpg"/>
				</a>
				
				<a class="intro_button" href="<?php bloginfo('url');?>/blog">Visit Our Blog</a><!-- intro_button -->
				
			</div><!-- single_intro_options -->
			
			<div class="single_intro_options">
				
				<a href="">
					<img src="<?php bloginfo('template_directory');?>/images/intro-test.jpg"/>
				</a>
				
				<a class="intro_button" href="">Watch Video</a><!-- intro_button -->
				
			</div><!-- single_intro_options -->
			
			
		</div><!-- intro_options_wrapper -->
		
	</section><!-- intro -->
	
	
	<section class="about">
		
		
		<div class="about_slideshow">
			
			<div class="about_slide">
				
				<div class="about_slide_content">
				
					<span class="large_header">About Designer's Touch</span><!-- large_header -->
				
					<p>Exciting Windows! by Designer’s Touch expert designer, Charles Marshall, has over 40 years of experience designing custom window treatments in Floyds Knobs, IN and Louisville, KY.</p> 

					<p>Our head designer not only stays atop the window fashion trends, but he also creates them. His keen eye for detail and ability to capture your vision and make it into reality is what makes Exciting Windows! by Designer’s Touch a leader in the industry.</p>
				
				</div><!-- about_slide_content -->
				
				<div class="about_slide_image">
					
					<img src="<?php bloginfo('template_directory');?>/images/charlie.jpg"/>
					<span>Charlie Marshall</span>
					
				</div><!-- about_slide_image -->
				
				
			</div><!-- about_slide -->
			
			<div class="about_slide">
				
				<div class="about_slide_content">
				
					<span class="large_header">Another Title</span><!-- large_header -->
				
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				</div><!-- about_slide_content -->
				
				<div class="about_slide_image">
					
					<img src="<?php bloginfo('template_directory');?>/images/charlie.jpg"/>
					<span>Another Image</span>
					
				</div><!-- about_slide_image -->
				
				
			</div><!-- about_slide -->
			
			<div class="about_slide">
				
				<div class="about_slide_content">
				
					<span class="large_header">A Third Title</span><!-- large_header -->
				
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				</div><!-- about_slide_content -->
				
				<div class="about_slide_image">
					
					<img src="<?php bloginfo('template_directory');?>/images/charlie.jpg"/>
					<span>Another Image</span>
					
				</div><!-- about_slide_image -->
				
				
			</div><!-- about_slide -->
			
			

			
			
		</div><!-- about_slideshow -->
		
		
		<div class="about_buttons">
			<div class="about_back"></div><!-- about_back -->
			<div class="about_next"></div><!-- about_next -->
		</div><!-- about_buttons -->
	
	<div class="mydots_about"></div><!-- mydots -->
		
		
	</section><!-- about -->
	
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
