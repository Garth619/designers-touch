	
	
	<?php if(get_field('inner_banner')):?>
	
	
	<?php $banner = wp_get_attachment_image_src(get_field('inner_banner'), 'innerbanner'); ?>
  
	<div class="banner" style="background:rgba(0, 0, 0, 0) url(<?php echo $banner[0]; ?>) no-repeat scroll center top / cover ">
	
	<?php else:?>
	
	<div class="banner">
		
		
	<?php endif;?>
		
		<div class="inner_banner_content">
			
			<span class="large_header"><?php the_title();?></span>
			
			<div class="number_wrapper">
				
					<a class="numbers" href="tel:5022674971">Ky - 502 267 4971</a>
					<a class="numbers" href="tel:8129442267">In - 812 944 2267</a>
				
				</div><!-- number_wrapper -->
				
				<a href="<?php bloginfo('url');?>/contact" class="blue_button">Get Started</a>
			
		</div><!-- inner_banner_content -->
		
	</div><!-- banner -->