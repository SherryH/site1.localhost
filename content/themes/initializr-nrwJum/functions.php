<?php 	
	 function get_bootstrap_styles(){
 	//get style.css
	wp_enqueue_style('main',get_stylesheet_uri());
	wp_enqueue_style('boostrap',get_template_directory_uri().'/css/bootstrap.debug.css');
	wp_enqueue_style('jumbotron',get_template_directory_uri().'/css/jumbotron-narrow.css');

	 }
	 add_action('wp_enqueue_scripts','get_bootstrap_styles');

	 function get_scripts(){
		wp_enqueue_script('modernizer',get_template_directory_uri().'/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js');
		wp_enqueue_script('mainjs',get_template_directory_uri().'/js/main.js ');
	 }
	 add_action('wp_enqueue_scripts','get_scripts');

 ?>