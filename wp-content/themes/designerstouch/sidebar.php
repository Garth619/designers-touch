<div class="sidebar">
	
	<div class="sidebar_pic_wrapper">
		
		<a href="<?php bloginfo('url');?>/gallery">
			<img class="pg" src="<?php bloginfo('template_directory');?>/images/pg.jpg"/>
			<span>View Photo Gallery</span>
		</a>
		
		</div><!-- sidebar_pic_wrapper -->
		
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'sidebar' ) ); ?>
		
</div><!-- sidebar -->
