<div class="sidebar">
	
	<div class="sidebar_pic_wrapper">
		
		<a href="<?php bloginfo('url');?>/gallery">
			<img class="pg" src="<?php bloginfo('template_directory');?>/images/pg.jpg"/>
			<span>View Photo Gallery</span>
		</a>
		
		</div><!-- sidebar_pic_wrapper -->
		
		
		
		<ul>
		
		<?php wp_list_categories(); ?>
		
		</ul>
	
	
</div><!-- sidebar -->