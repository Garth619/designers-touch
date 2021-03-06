<section class="test_review_wrapper">


<div class="inner_wrapper" style="overflow:hidden;">


	
	
	<?php if(is_front_page()):?>
	
	
	
	<section class="testimonials frontpage" style="width:100%;border:none;">
		
		
		<span class="large_header">Client Testimonials</span><!-- large_header -->
		
		
		
		<?php if(get_field('testimonials', 75)): ?>
		
				
			<div class="test_buttons">
				<div class="test_back"></div><!-- test_back -->
				<div class="test_next"></div><!-- test_next -->
			</div><!-- test_buttons -->
			
			<div class="testimonials_gradient" style="width:100%";>
			
			<a href="<?php bloginfo('url');?>/testimonials">Read More</a>
			
		</div><!-- testimonials_gradient -->
				
			<div class="test_slideshow" style="max-width:880px;">
			
 
			<?php while(has_sub_field('testimonials', 75)): ?>
 
				
				<div class="test_content">
			
					<span class="name"><?php the_sub_field('name', 75);?></span><!-- name -->
					<span class="test"><?php the_sub_field('testimonial', 75);?></span>
			
				</div><!-- test_content -->
    		
			<?php endwhile; ?>
			
			</div><!-- test_slideshow -->
				
				
		<?php endif; ?>
		
		


	</section><!-- testimonials -->
	
	
	
	
	
	<?php else: ?>
	
	
	
	
	<section class="testimonials">
		
		
		<span class="large_header">Client Testimonials</span><!-- large_header -->
		
		
		
		<?php if(get_field('testimonials', 75)): ?>
		
				
			<div class="test_buttons">
				<div class="test_back"></div><!-- test_back -->
				<div class="test_next"></div><!-- test_next -->
			</div><!-- test_buttons -->
			
			<div class="testimonials_gradient">
			
			<a href="<?php bloginfo('url');?>/testimonials">Read More</a>
			
		</div><!-- testimonials_gradient -->
				
			<div class="test_slideshow">
			
 
			<?php while(has_sub_field('testimonials', 75)): ?>
 
				
				<div class="test_content">
			
					<span class="name"><?php the_sub_field('name', 75);?></span><!-- name -->
					<span class="test"><?php the_sub_field('testimonial', 75);?></span>
			
				</div><!-- test_content -->
    		
			<?php endwhile; ?>
			
			</div><!-- test_slideshow -->
				
				
		<?php endif; ?>
		
		


	</section><!-- testimonials -->
	
	
	
	<section class="leave_review">
		
		<span class="large_header">Leave a Review</span><!-- large_header -->
		
		<div class="review_icons">
			
<!--
			<a href="http://www.bbb.org/louisville/business-reviews/drapery-installation-service/designers-touch-in-floyds-knobs-in-2000333/#bbbonlineclick" target="_blank">
				<img src="<?php bloginfo('template_directory');?>/images/bbb.png"/>
			</a>
-->
			
			<a href="http://metro-links.com/LouisvilleKentucky" target="_blank">
				<img src="<?php bloginfo('template_directory');?>/images/louis.png"/>
			</a>
			
			<a href="https://www.thumbtack.com/ky/louisville/window-treatments/" target="_blank">
				<img src="<?php bloginfo('template_directory');?>/images/thumbtac.png"/>
			</a>
			
			<a href="http://www.angieslist.com/companylist/us/in/floyds-knobs/exciting-windows-by-designers-touch-reviews-2353519.aspx?cid=ssabadge" target="_blank">
				<img src="<?php bloginfo('template_directory');?>/images/al.png"/>
			</a>
			
			<a href="http://www.houzz.com/pro/designerstouchin/custom-draperies-by-designers-touch" target="_blank">
				<img src="<?php bloginfo('template_directory');?>/images/houzz.png"/>
			</a>
			
			<a href="https://www.facebook.com/designerstouchwindowtreatments" target="_blank">
				<img width="55" src="<?php bloginfo('template_directory');?>/images/square-facebook-512.png"/>
			</a>
			
			<a href="https://www.google.com/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=designers%20touch%20ky&lrd=0x8869a0f199bb98ff:0xea94fe71a7dd9152,3," target="_blank">
				<img width="60" src="<?php bloginfo('template_directory');?>/images/google-plus-flat.png"/>
			</a>
			
		</div><!-- review_icons -->
		
	</section><!-- leave_review -->
	
	
	
	
	<?php endif;?>
	
	
	
	
</div><!-- inner_wrapper -->
	
	
</section><!-- test_review_wrapper -->


	
	
</div><!-- main -->

<footer>
	
	<div class="inner_footer">
	
	<div class="social_icons" style="opacity: 0;visibility: hidden;">
		
		<a href="">
			<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
		</a>
		
		<a href="">
			<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
		</a>
		
		<a href="">
			<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
		</a>
		
		<a href="">
			<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
		</a>
		
		<a href="">
			<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
		</a>
		
		
	</div><!-- social_icons -->
	
	<span class="copy">&copy; Copyright by Designer's Touch All Rights&nbsp;Reserved.<br/>
	<a href="http://mylocalpage.com/privacy-policy.txt" target="_blank">Privacy and Cookie Policy</a></span>
	
	<span class="footer_numbers">Ky <a href="tel:5022674971">502 267 4971</a> | In <a href="tel:8129442267">812 944 2267</a> | <a href="mailto:charlie@designers-touch.com">charlie@designers-touch.com</a></span>
	
	</div><!-- inner_footer -->
	
	
</footer>





<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick-master/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/lity.js"></script>

<script type="text/javascript">
	
	jQuery(document).ready(function(){
		
		
		// Top Slide
		
		jQuery('.slideshow').slick({
			dots:true,
			infinite: true,
			autoplay: true,
			fade: true,
			arrows:true,
			prevArrow:".back",
			nextArrow:".next",
			appendDots:".mydots",
			pauseOnHover: false
		});
		
		
		// About Slide
		
		jQuery('.about_slideshow').slick({
			dots:true,
			infinite: true,
			fade: true,
			arrows:true,
			prevArrow:".about_back",
			nextArrow:".about_next",
			appendDots:".mydots_about",
			adaptiveHeight: true
		});
		
		// Testimonial Slide
		
		jQuery('.test_slideshow').slick({
			dots:false,
			infinite: true,
			fade: true,
			arrows:true,
			prevArrow:".test_back",
			nextArrow:".test_next",
			responsive: [
				{
      		breakpoint: 1150,
					settings: {
						dots:false,
						infinite: true,
						fade: true,
						arrows:true,
						prevArrow:".test_back",
						nextArrow:".test_next",
						adaptiveHeight: true
      		}
    		}
      ]
			}); 
		
		
		
		
		
		
		
		 		
		
		

	
	
	// Sidebar 
	
	jQuery('.sidebar ul li > a').click(function(){
		
		jQuery(this).next('ul.sub-menu').slideToggle(200);
		
	});
	
	// Mobile Product Page
	
	jQuery('.mobile_product_menu ul li > a').click(function(){
		
		jQuery(this).next('ul.sub-menu').slideToggle(200);
		
	});
	
	
	// Mobile Menu
	
	
	jQuery('.menu_wrapper').click(function(){
		
		jQuery('.mobile_menu_list').slideToggle();
		
	});
	
	// Video Overlay
	
/*
	jQuery('.new_video').click(function() {
		
		jQuery('.video_overlay_wrapper').addClass('open');
		
	});
	
	jQuery('.my_close').click(function() {
		
		jQuery('.video_overlay_wrapper').removeClass('open');
		
	});
*/
	
	
	// Same Heights
	
	
	var height = Math.max(jQuery(".new_top.desktop .left_col_main").height(), jQuery(".new_top.desktop .right_col_main").height());
    jQuery(".new_top.desktop .left_col_main").height(height);
    jQuery(".new_top.desktop .right_col_main").height(height);
	



}); // Document Ready
	

	
</script>


</body>
</html>
