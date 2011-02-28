<?php

/*
Plugin Name: WP-Syntax Colorizer
Plugin URI: http://articles.akgfx.com/2008/04/wp-syntax-colorizer/
Description: A plugin allowing you to easily set all the WP-Syntax color settings in one place. WP-Syntax was developed by Ryan McGeary.
Author: Arash Keshmirian
Version: 0.1
Author URI: http://www.akgfx.com/
*/

add_action('wp_syntax_init_geshi', 'my_custom_geshi_styles');
function my_custom_geshi_styles(&$geshi)
{

	/* 
	 * The following code has been tuned for PHP highlighting, and may require modifications
	 * to work with other languages. 
         */


	$geshi->set_overall_style('color: #FCFFBA;', true); // Strangely, this controls regexps.
	
	$geshi->set_keyword_group_style(1, 'color: #B83A24;', true);
	$geshi->set_keyword_group_style(2, 'color: #577A61;', true);
	$geshi->set_keyword_group_style(3, 'color: #8FB394;', true);
	$geshi->set_keyword_group_style(4, 'color: #343832;', true);
	$geshi->set_strings_style('color: #666666;', true);
	$geshi->set_symbols_style('color: #CCC;', true);
	$geshi->set_numbers_style('color: #DDD;', true);
	$geshi->set_regexps_style(1,'color: blue;', true); // This color is ignored, but required.
	$geshi->set_comments_style(1,'color: #CDC;', true);
	$geshi->set_comments_style('MULTI','color: #CDC;', true);    

}

?>