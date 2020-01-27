<?php 
// Inc File enqueue Load 
require_once(get_template_directory() .'/inc/enqueue.php');

// Inc File theme-setup Load 
require_once(get_template_directory() .'/inc/theme-setup.php');

// Inc File navwalker dropdown menu Load 
require_once(get_template_directory().'/inc/navwalker.php');

// Inc File custom-widgets menu Load 
require_once(get_template_directory().'/inc/custom-widgets.php');

// theme-options File codestar-framework Load 
require_once get_theme_file_path() .'/theme-options/cs-framework.php';

// inc File  theme-element or theme-options  Load 
require_once get_theme_file_path() .'/inc/theme-element.php';
require_once get_theme_file_path() .'/inc/theme-options.php';

// inc File activation Load 
require_once get_theme_file_path() .'/inc/activation.php';

// inc File mj-wp-breadcrumb Load 
require_once get_theme_file_path() .'/inc/mj-wp-breadcrumb.php';

// inc File custom-portfolio Load 
require_once get_theme_file_path() .'/inc/custom-portfolio.php';



// comments textaarea top to bottom code 
function hunters_wpb_move_comment_field_to_bottom($fields){
	$comment_field = $fields['comment'];
	unset( $fields['comment']);
	$fields['comment'] = $comment_field;
	return $fields;
}
add_filter('comment_form_fields','hunters_wpb_move_comment_field_to_bottom');