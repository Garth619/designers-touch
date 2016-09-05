<section class="test_review_wrapper">


<div class="inner_wrapper">

<section class="testimonials">
		
		
		<span class="large_header">Client Testimonials</span><!-- large_header -->
		
		
		<div class="test_slideshow">
		
		<div class="test_content">
			
			<span class="test">"This was the second time I have worked with Charlie.  He is great to work with.  He has a lot of experience.  He made suggestions and was very patient with me while deciding fabrics/ design.  He installed all of the products (blinds, shutters, and drapes) very well.  I had a small issue with the shutter; he resolved it quickly and without problem.  I would work with Charlie again and I would recommend him!"</span>
			
			<span class="name">Name of Person</span><!-- name -->
			
		</div><!-- test_content -->
			
			<div class="test_content">
			
			<span class="test">"This was the second time I have worked with Charlie.  He is great to work with.  He has a lot of experience.  He made suggestions and was very patient with me while deciding fabrics/ design.  He installed all of the products (blinds, shutters, and drapes) very well.  I had a small issue with the shutter; he resolved it quickly and without problem.  I would work with Charlie again and I would recommens and was very patient with me while deciding fabrics/ design.  He installed all of the products (blinds, shutters, and drapes) very well.  I had a small issue with the shutter; he resolved it quickly and without problem.  I would work with Charlie again and I would recommens and was very patient with me while deciding fabrics/ design.  He installed all of the products (blinds, shutters, and drapes) very well.  I had a small issue with the shutter; he resolved it quickly and without problem.  I would work with Charlie again and I would recommend him!"</span>
			
			<span class="name">Name of Person2</span><!-- name -->
			
			</div><!-- test_content -->
			
			<div class="test_content">
			
			<span class="test">"This was the second time I have worked with Charlie.  He is great to work with.  He has a lot of experience.  He made suggestions and was very patient with me while deciding fabrics/ design.  He installed all of the products (blinds, shutters, and drapes) very well.  ns and was very patient with me while deciding fabrics/ design.  He installed all of the products (blinds, shutters, and drapes) very well.  I had a small issue with the shutter; he resolved it quickly and without problem.  I would work with Charlie again and I would recommeI had a small issue with the shutter; he resolved it quickly and without problem.  I would work with Charlie again and I would recommend him!"</span>
			
			<span class="name">Name of Person3</span><!-- name -->
			
			
			
		</div><!-- test_content -->
		
		</div><!-- test_slideshow -->
		
		<div class="test_buttons">
			<div class="test_back"></div><!-- test_back -->
			<div class="test_next"></div><!-- test_next -->
		</div><!-- test_buttons -->
		
		
	</section><!-- testimonials -->
	
	<section class="leave_review">
		
		<span class="large_header">Leave a Review</span><!-- large_header -->
		
		<div class="review_icons">
			
			<a href="http://www.bbb.org/louisville/business-reviews/drapery-installation-service/designers-touch-in-floyds-knobs-in-2000333/#bbbonlineclick" target="_blank">
				<img src="<?php bloginfo('template_directory');?>/images/bbb.png"/>
			</a>
			
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
			
		</div><!-- review_icons -->
		
	</section><!-- leave_review -->
	
</div><!-- inner_wrapper -->
	
	
</section><!-- test_review_wrapper -->


	
	
</div><!-- main -->

<footer>
	
	<div class="inner_footer">
	
	<div class="social_icons">
		
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
	
	<span class="copy">&copy; Copyright by Designer's Touch All Rights&nbsp;Reserved.</span>
	
	<span class="footer_numbers">Ky <a href="tel:5022674971">502 267 4971</a> | In <a href="tel:8129442267">812 944 2267</a></span>
	
	</div><!-- inner_footer -->
	
	
</footer>

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick-master/slick/slick.min.js"></script>


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
			appendDots:".mydots"
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
			adaptiveHeight: true
		}); 
		
		
	});
	
	
	// Sidebar 
	
	jQuery('.sidebar ul li > a').click(function(){
		
		jQuery(this).next('ul.sub-menu').slideToggle(200);
		
	});
	

	
</script>


</body>
</html>
