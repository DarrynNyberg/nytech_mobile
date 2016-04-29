<!-- Phone -->
<div class="app-header visible-sm visible-xs">
    <div class="header-col header-col-left">
        <a href="#" class="toggle-menu toggle-link"><i class="fa fa-bars"></i></a>
    </div>
    <div class="header-col header-col-center">
        <div class="logo-sm">
            
        </div>
    </div>
    <div class="header-col header-col-right">
        <a href="#" class="toggle-settings toggle-link"><i class="fa fa-ellipsis-v"></i></a>
    </div>
</div>
<div class="menu-block out">
	<div class="region region-navigation">
		<section id="block-block-1" class="block block-block clearfix">
			<ul class="nav">
				<li><a href="#" class="toggle-menu toggle-link "><i class="fa fa-long-arrow-left"></i></a></li>	
			</ul>
			<?php
				$main_menu = variable_get('menu_main_links_source', 'main-menu');
				$main_menu_tree = menu_tree($main_menu);
				print drupal_render($main_menu_tree); 
            ?>
			
		</section>
	</div>
	<div class="menu-footer">
		
	</div>
</div>

<div class="settings-block out">
    
    <?php
        
		$secondary_menu = variable_get('menu_secondary_links_source', 'user-menu');
		$secondary_menu_tree = menu_tree($secondary_menu);
		print drupal_render($secondary_menu_tree); 
    ?>
    <?php print render($page['sidebar_second']); ?>
</div>
<div class="see-through out"></div>