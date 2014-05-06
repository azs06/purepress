<?php
function pure_css(){

    wp_enqueue_style('pure_css','http://yui.yahooapis.com/pure/0.4.2/pure.css');
    wp_enqueue_style( 'main_grid', get_template_directory_uri(). '/css/main-grid.css');
    wp_enqueue_style( 'blog_layout', get_template_directory_uri(). '/css/layouts/blog.css');
    wp_enqueue_style( 'theme_style', get_template_directory_uri(). '/style.css');

}
add_action('wp_enqueue_scripts','pure_css' );

function pure_scripts(){
	wp_enqueue_script( 'yui', 'http://yui.yahooapis.com/3.14.1/build/yui/yui.js', array(), false, true );
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('yui'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'pure_scripts' );

function pure_menus(){

	register_nav_menus(
		array(
			'main-menu' => 'Main Menu',
			'footer-menu' => 'Footer Menu'
			) 

		);
}

add_action('init','pure_menus' );
add_theme_support('menus');
?>