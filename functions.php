<?php

/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage rpitheme
 * @since RPI Theme 1.0
 */

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
require get_template_directory() . '/bootstrap-navwalker/bootstrap-navwalker.php';

register_nav_menus(array(
    'menu-1' => esc_html__('Primary', 'theme-textdomain' ),
));

add_theme_support( 'post-thumbnails' );

function rpitheme_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'rpitheme' ),
		'expanded' => __( 'Desktop Expanded Menu', 'rpitheme' ),
		'mobile'   => __( 'Mobile Menu', 'rpitheme' ),
		'footer'   => __( 'Footer Menu', 'rpitheme' ),
		'social'   => __( 'Social Menu', 'rpitheme' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'rpitheme_menus' );

function my_excerpt_length($length){
	return 10;
}
add_filter('excerpt_length', 'my_excerpt_length');


// for menu ----------
function add_link_atts($atts) {
	$atts['class'] = "nav-link";
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

function add_classes_on_li($classes, $item, $args) {
    if( $args->menu == 'header' ) {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

// new menu post
function slide_post_register(){
    $labels = array(
        'name'               => __( 'Slider' ),
        'singular_name'      => __( 'Slider' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New' ),
        'edit_item'          => __( 'Edit' ),
        'new_item'           => __( 'New Slider' ),
        'all_items'          => __( 'All Slider' ),
        'view_item'          => __( 'View Slider' ),
        'search_items'       => __( 'Search Slider' ),
        'not_found'          => __( 'No Slider found' ),
        'not_found_in_trash' => __( 'No Slider found in the Trash' ), 
        'parent_item_colon'  => '',
        'menu_name'          => 'Slider'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Slider',
        'public'        => false,
		'menu_icon'     => 'dashicons-welcome-view-site',
        'menu_position' => 20,
        'supports'      => array('title','editor', 'thumbnail'),
		'exclude_from_search' => true,
        'has_archive'   => false,
        'show_ui'       => true,
		'rewrite'       => array(
					'slug'		 	=> 'slider',
					'with_front'	=> true
				),
		
    );
    register_post_type( 'slider', $args );
	flush_rewrite_rules();
}
add_action( 'init', 'slide_post_register' );

// new menu post
function slide_post_video(){
    $labels = array(
        'name'               => __( 'Videos' ),
        'singular_name'      => __( 'Videos' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New' ),
        'edit_item'          => __( 'Edit' ),
        'new_item'           => __( 'New Video' ),
        'all_items'          => __( 'All Videos' ),
        'view_item'          => __( 'View Video' ),
        'search_items'       => __( 'Search Videos' ),
        'not_found'          => __( 'No Video found' ),
        'not_found_in_trash' => __( 'No Video found in the Trash' ), 
        'parent_item_colon'  => '',
        'menu_name'          => 'Videos'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Videos',
        'public'        => true,
		'menu_icon'     => 'dashicons-video-alt3',
        'menu_position' => 20,
        'supports'      => array('title','editor', 'thumbnail'),
		'exclude_from_search' => true,
        'has_archive'   => true,
        'show_ui'       => true,
		'rewrite'       => array(
					'slug'		 	=> 'video',
					'with_front'	=> true
				),
		
    );
    register_post_type( 'videos', $args );
	flush_rewrite_rules();
}
add_action( 'init', 'slide_post_video' );