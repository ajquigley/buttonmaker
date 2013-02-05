<?php
/*
Plugin Name: ButtonMaker
Plugin URI: http://none.yet
Description: Creates a Shortcode of 'button' which encloses some text to be displayed overlayed on a button graphic. Adapted from the Kubrick theme's header code
Version: 0.1
Author: Andy Quigley
*/
/* 
buttonmaker - a Wordpress plugin which adds a shortcode of [button] to enclose text and an optional link
Copyright (C) 2010-2013 Andy Quigley <ajquigley@yahoo.com>

This library is free software; you can redistribute it and/or
modify it under the terms of the GNU Library General Public
License as published by the Free Software Foundation; either
version 2 of the License, or (at your option) any later version.

This library is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
Library General Public License for more details.

You should have received a copy of the GNU Library General Public
License along with this library; if not, write to the
Free Software Foundation, Inc., 51 Franklin St, Fifth Floor,
Boston, MA  02110-1301, USA.  
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
