<?php

/**
 * Theme filters.
 */

namespace App;

use function Roots\asset;
/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter(
	'excerpt_more',
	function () {
		return sprintf( ' &hellip; <a href="%s">%s</a>', get_permalink(), __( 'Continued', 'sage' ) );
	}
);

/**
 * Add custom classes to the top level menu items
 *
 * @param [type] $classes menu item classes
 * @param [type] $item menu item object
 * @param [type] $args menu arguments
 * @param [type] $depth menu depth
 * @return void
 */
function Sage_Nav_Add_Custom_classes( $classes, $item, $args, $depth ) {
	if ( 'primary_navigation' === $args->theme_location ) {
		if ( 0 === $depth ) {
			$classes[] = 'first-level-menu-item';
		}
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', __NAMESPACE__ . '\Sage_Nav_Add_Custom_classes', 10, 4 );

/**
 * Common style for all anchor tags in the menu
 *
 * @param [type] $atts
 * @param [type] $item
 * @param [type] $args
 * @param [type] $depth
 * @return void
 */
function add_class_for_all_menu_location_atts( $atts, $item, $args, $depth ) {
	// check if the item is in the primary menu
	if ( $args->theme_location == 'primary_navigation' ) {
		/**
		 * If the item is a top level menu item, add the class 'no-underline' and prevent the item from being clickable
		 */
		if ( 0 === $depth ) {
			// add the desired attributes:
			$atts['class'] = 'no-underline';
			// prevent parent menu items from being clickable
			$atts['onClick'] = 'return false';
		} else {
			/**
			 *
			 */
			$atts['class'] = 'py-1 inline-block no-underline hover:text-primary-500 hover:underline';
		}
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', __NAMESPACE__ . '\add_class_for_all_menu_location_atts', 10, 4 );


add_filter('wp_resource_hints', function ($hints, $relation_type) {
    if ('prefetch' === $relation_type) {
        $hints[] = asset('app-styles.css')->uri(); // Adjust path if necessary
    }
    return $hints;
}, 10, 2);