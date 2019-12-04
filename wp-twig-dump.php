<?php
/**
 * Plugin Name: WP Twig dump()
 * Description: Var Dumper if WP_DEBUG_DISPLAY == true For Timber Library
 * Version: 1.0
*/

if (defined('WP_DEBUG_DISPLAY') && WP_DEBUG && function_exists('add_filter')) {
    add_filter('timber/loader/twig', function($twig) {
        $twig->addExtension(new HelloNico\Twig\DumpExtension());
        return $twig;
    });
}
