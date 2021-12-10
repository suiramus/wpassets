<?php

// Add active class to menu
// https://developer.wordpress.org/reference/hooks/nav_menu_css_class/
function required_active_nav_class( $classes, $item ) {
	if ( $item->current == 1 || $item->current_item_ancestor == true ) {
		$classes[] = 'menu-active';
	}

	if ( $item->current_item_ancestor == true ) {
		$classes[] = 'menu-active-ancestor';
	}

	return $classes;
}
add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );