<?php 
// Theme menu 
	register_nav_menus(array(
		'header_menu' => 'Header Menu', 
		'footer_menu' => 'Footer Menu', 
	));
// Theme features image thumbnails
	add_theme_support('post-thumbnails');