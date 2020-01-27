<?php 
//shortcode
function shortcode($atts, $contant){

	extract(shortcode_atts(array(

		'color'=> 'black',
		'size'=>'18px',

	), $atts));

	$contant=do_shortcode($contant);
	return "<p style='color:".$color."; font-size:".$size."'>".$contant."</p>";

}
add_shortcode('hello','shortcode');





// Nested Shortcode
function nested_shortcode($atts, $contant){

	extract(shortcode_atts(array(

		'color'=> 'black',
		'size'=>'18px',

	), $atts));
	$contant=do_shortcode($contant);
	return "<p style='color:".$color."; font-size:".$size."'>".$contant."</p>";

}
add_shortcode('academy','nested_shortcode');
// widget Shortcode filter
add_filter('widget_text','do_shortcode');


 ?>