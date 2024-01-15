<?php
function wpdocs_theme_name_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Enqueue main JavaScript file
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.1', true);
}

add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

// Register navigation menus
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
        )
    );
}
add_action('init', 'register_my_menus');

// Register sidebars
function themename_widgets_init() {
    // Primary Sidebar
    register_sidebar(array(
        'name'          => __('Primary Sidebar', 'theme_name'),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // Secondary Sidebar
    register_sidebar(array(
        'name'          => __('Secondary Sidebar', 'theme_name'),
        'id'            => 'sidebar-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}

add_action('widgets_init', 'themename_widgets_init');


function themename_custom_header_setup() {
	$args = array(
		'width'              => 1000,
		'height'             => 250,
		'flex-width'         => true,
		'flex-height'        => true,
	);
	add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );


// Enqueue custom scripts
function enqueue_custom_scripts() {
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/index.js', array('jquery'), '1.1', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

?>


