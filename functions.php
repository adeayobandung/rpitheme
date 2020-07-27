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