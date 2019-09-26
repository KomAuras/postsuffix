<?php
/*
Plugin Name: postsuffix
Description: Adding the date and site name to the beginning of the post.
Version: 1.0
Author: Evgeny Stefanenko
Author URI: https://forum.clarionlife.net
*/

add_filter('the_title', 'psu_filter_function_name', 10, 2);
function psu_filter_function_name($title, $id)
{
    $date = get_the_date("", $id);
    $name = get_bloginfo();
    $title = "{$date} &ndash; {$name} &ndash; {$title}";
    return $title;
}