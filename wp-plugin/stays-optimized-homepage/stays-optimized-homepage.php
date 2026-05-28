<?php
/**
 * Plugin Name: Stays Optimized — Custom Homepage
 * Description: Replaces the WordPress homepage with the Stays Optimized branded design.
 * Version: 1.0.0
 * Author: Stays Optimized LLC
 */

add_action('template_redirect', 'so_replace_homepage');
function so_replace_homepage() {
    if (is_front_page() || is_home()) {
        include plugin_dir_path(__FILE__) . 'homepage.php';
        exit;
    }
}
