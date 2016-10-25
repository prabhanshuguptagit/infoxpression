<?php

/***** Load Google Fonts *****/

function mh_travelmag_fonts() {
	wp_dequeue_style('mh-google-fonts');
	wp_enqueue_style('mh-travelmag-fonts', 'https://fonts.googleapis.com/css?family=Asap:400,400italic,700%7cDosis:300,400,600,700', array(), null);
}
add_action('wp_enqueue_scripts', 'mh_travelmag_fonts', 11);

/***** Load Stylesheets *****/

function mh_travelmag_styles() {
    wp_enqueue_style('mh-magazine-lite', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('mh-travelmag', get_stylesheet_uri(), array('mh-magazine-lite'), '1.1.0');
    if (is_rtl()) {
		wp_enqueue_style('mh-magazine-lite-rtl', get_template_directory_uri() . '/rtl.css');
	}
}
add_action('wp_enqueue_scripts', 'mh_travelmag_styles');

/***** Load Translations *****/

function mh_travelmag_theme_setup(){
	load_child_theme_textdomain('mh-travelmag', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'mh_travelmag_theme_setup');

/***** Change Defaults for Custom Colors *****/

function mh_travelmag_custom_colors() {
	remove_theme_support('custom-header');
	remove_theme_support('custom-background');
	add_theme_support('custom-header', array('default-image' => '', 'default-text-color' => 'fff', 'width' => 300, 'height' => 100, 'flex-width' => true, 'flex-height' => true));
	add_theme_support('custom-background', array('default-color' => 'f0f7fa'));
}
add_action('after_setup_theme', 'mh_travelmag_custom_colors');

/***** Remove Functions from Parent Theme *****/

function mh_travelmag_remove_parent_functions() {
    remove_action('admin_menu', 'mh_magazine_lite_theme_info_page');
    remove_action('customize_controls_enqueue_scripts', 'mh_magazine_lite_customizer_js');
}
add_action('wp_loaded', 'mh_travelmag_remove_parent_functions');

?>