<?php
/*
Plugin Name: postsuffix
Description: Adding the date and site name to the beginning of the post.
Version: 1.0
Author: Evgeny Stefanenko
Author URI: https://forum.clarionlife.net
*/

add_filter('the_content', 'psu_filter_function_name');
function psu_filter_function_name($content)
{
    $date = get_the_date();
    $name = get_bloginfo();
    $suffix = "{$date} &ndash; {$name} &ndash; ";
    if (substr($content,0,3) == "<p>") {
    	$content = "<p>{$suffix}" . mb_substr($content,3);
    } else {
    	$content = $suffix.$content;
    }
    return $content;
}
