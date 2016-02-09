<header class="header hidden-md-down">
	<div class="container">
		<div class="header-left col-sm-4">
			<div><a href="<?php home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/app/assets/img/logo_Catalogics.white.png" alt="Catalogics México"></a></div>
		</div>
		<div class="header-center col-sm-4 hidden-md-down"></div>
		<div class="header-right col-sm-4">
			<?php 
				// Insert menus - check options at codex
			  $defaults = array(
			    'container' => false,
			    'theme_location' => 'main-menu',
			    'menu_class' => 'nav-main'
			    );
			  wp_nav_menu ($defaults);
			?>
		</div>
	</div>
</header>