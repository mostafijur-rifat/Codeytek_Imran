<?php 
/** 
* Functions template file
* 
* @package Aquila
*/

// echo "<pre>";
// print_r(get_template_directory_uri().'/assets/main.js');
// wp_die();

function aquila_enqueue_scripts() {
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_style('bootstrap-css', get_template_directory_uri().'/assets/bootstrap.css', [], false, 'all');
    wp_register_script('bootstrap-js', get_template_directory_uri().'/assets/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js', ['jquery'], filemtime(get_template_directory() . '/assets/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js'), true );
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');



?>