<?php
/*
Plugin Name: ButtonMaker
Plugin URI: http://none.yet
Description: Creates a Shortcode of 'button' which encloses some text to be displayed overlayed on a button graphic. Adapted from the Kubrick theme's header code
Version: 0.1
Author: Andy Quigley
*/
function buttonmaker_button($attr, $content=''){
    if ($content == '') return standardspop_popup();
    $graphic = $attr[graphic];
    $url = $attr[url];
    return buttonmaker_graphic($graphic, $url, $content);
}

function buttonmaker_graphic($graphic='default.jpg', $url='', $content=''){
// enumerate the graphics available in the plugin directory
// match the graphic name to the appropriate file
// default to the default button, set in code here
// fold the button into html
// if the url isn't blank, the button is enclosed in a link
// 
    // $graphicsdir = ABSPATH . '/' . PLUGINDIR . '/buttons' ; 
    $graphicsdir = '/' . PLUGINDIR . '/buttons' ; 

    $graphicsfile = $graphicsdir . '/' . $graphic;
    if ($content == '') return $blankdiv;
    $title = "<strong>$title</strong>";
    $image = WP_PLUGIN_URL . '/' . $graphic ;
    $result = "<img src=\"$image\">";
    if ($url != '') $result = "<a href=\"$url\">$result</a>";
    return $result;    
}

remove_shortcode('button');

add_shortcode('button', 'buttonmaker_button');
?>
