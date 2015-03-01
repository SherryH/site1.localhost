<?php
	function bootstrap_blog_styles_and_scripts(){
		/*'main' as the style name of the style.css
		get_stylesheet_uri() returns path of style.css */
		wp_enqueue_style('main',get_stylesheet_uri());
		wp_enqueue_style('bootstrap',get_template_directory_uri().'/bootstrap/css/bootstrap.min.css');

	}
	add_action('wp_enqueue_scripts','bootstrap_blog_styles_and_scripts');

	// create menu (location of menu, description on Admin Panel)
	register_nav_menu('main-menu', 'Main Menu');

?>