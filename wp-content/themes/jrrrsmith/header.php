<?php include 'page-templates/partials/head.php'  ?>
<header class="header wrap">
	<div class="header__nav">
		<?php wp_nav_menu( array( 
			'theme_location'    => '',
			'menu'            => 'MAIN_NAVIGATION',
			'container'         => 'false',
			'container_class'   => '',
			'container_id'      => '',
			'menu_class'        => 'header__nav__menu',
			'menu_id'           => '',
			'echo'              => true,
			'fallback_cb'       => 'wp_page_menu',
			'before'            => '',
			'after'             => '',
			'link_before'       => '',
			'link_after'        => '',
			'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'             => 0,
			'walker'            => ''
		));
		?>            
	</div>
</header>
<div id="page">