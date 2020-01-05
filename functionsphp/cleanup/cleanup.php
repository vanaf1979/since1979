<?php
namespace FunctionsPhp\CleanUp;

use \FunctionsPhp\Includes\Theme as Theme;

/**
 * CleanUp
 *
 * This class cleans up unneeded features.
 *
 * @link       http://since1979.dev
 * @package    FunctionsPhp\CleanUp
 */
final class CleanUp extends Theme {

    /**
     * __construct.
     *
     * The class constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * disable_emoji_dequeue_script.
     *
     * Remove support for emaji's.
     *
     * @uses remove_action() https://developer.wordpress.org/reference/functions/remove_action/
     */
    public function disable_emoji_dequeue_script()
    {
        \remove_action('wp_head', 'print_emoji_detection_script', 7);
        \remove_action('wp_print_styles', 'print_emoji_styles');
        \remove_action('admin_print_scripts', 'print_emoji_detection_script');
        \remove_action('admin_print_styles', 'print_emoji_styles');
    }


    /**
     * clean_up_header.
     *
     * Remove misc stuf from the head.
     *
     * @uses remove_action() https://developer.wordpress.org/reference/functions/remove_action/
     */
    public function clean_up_header()
    {
        \remove_action('wp_head', 'rsd_link');
        \remove_action('wp_head', 'wp_generator');
        \remove_action('wp_head', 'feed_links', 2);
        \remove_action('wp_head', 'feed_links_extra', 3);
        \remove_action('wp_head', 'index_rel_link');
        \remove_action('wp_head', 'wlwmanifest_link');
        \remove_action('wp_head', 'start_post_rel_link', 10);
        \remove_action('wp_head', 'parent_post_rel_link', 10);
        \remove_action('wp_head', 'adjacent_posts_rel_link', 10);
        \remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
        \remove_action('wp_head', 'wp_shortlink_wp_head', 10);
        \remove_action('wp_head', 'print_emoji_detection_script', 7);
        \remove_action('wp_head', 'wp_resource_hints', 2);
        \remove_action('wp_head', 'rel_canonical');
    }


    /**
     * remove_wpembed_scripts.
     *
     * Remove scripts for wpembed features.
     *
     * @uses remove_action() https://developer.wordpress.org/reference/functions/wp_deregister_script/
     */
    public function remove_wpembed_scripts()
    {
        \wp_deregister_script('wp-embed');
    }

}
