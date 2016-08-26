<?php
/*
Plugin Name: Лёгкая цветовая тема
Plugin URI: http://bizikov.ru/
Description: Приятная цветовая тема для Вордпрес от Саши Бизикова
Version: 1.0.1
Author: Alexandr Bizikov
Author URI: http://bizikov.ru/
Text Domain: bizikov-color-schemes
Domain Path: /languages/
Compatible with WordPress 3.8+.
Read the accompanying readme.txt file for instructions and documentation.
Copyright (c) 2016 by Alexandr Bizikov
This software is released under the GPL v2.0, see license.txt for details
*/

function add_color_schemes() {
    $label_color = array( '#f9f5e4', '#FFF', '#333', '#000' );
    $url_style = plugins_url("assets/css/colors.css", __FILE__ );
    wp_admin_css_color(	'classicgrey', __('Лёгкая', 'bizikov-color-schemes'), $url_style , $label_color);
}

add_action('admin_init', 'add_color_schemes');
