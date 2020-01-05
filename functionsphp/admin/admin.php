<?php
namespace FunctionsPHP\Admin;

use \FunctionsPhp\Includes\Theme as Theme;

/**
 * Admin
 *
 * This class handles all Admin related actions.
 *
 * @link       http://since1979.dev
 * @package    FunctionsPhp\Admin
 */
final class Admin extends Theme {

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
     * enqueue_styles.
     *
     * Enqueue stylesheets for the admin area.
     *
     * @uses wp_enqueue_style() https://developer.wordpress.org/reference/functions/wp_enqueue_style/
     *
     * @param string $page
     *
     * @return void
     */
    public function enqueue_styles(string $page): void
    {
        // if ($page == 'post.php') {
        //     wp_enqueue_style($this->text_domain . '-css', $this->theme_path . '/public/css/admin.css', array(), $this->version, 'all');
        // }
    }


    /**
     * enqueue_scripts.
     *
     * Enqueue javascripts for the admin area.
     *
     * @uses wp_enqueue_script() https://developer.wordpress.org/reference/functions/wp_enqueue_script/
     *
     * @param string $page
     *
     * @return void
     */
    public function enqueue_scripts(string $page): void
    {
        // if ($page == 'post.php') {
        //     wp_enqueue_script($this->text_domain . '-js', $this->theme_path . '/public/js/admin.js', array(), $this->version, true);
        // }
    }


    /**
     * register_nav_menus.
     *
     * Register navigational menus with WordPRess.
     *
     * @uses register_nav_menus() https://developer.wordpress.org/reference/functions/register_nav_menus/
     *
     * @return void
     */
    public function register_nav_menus(): void
    {
        \register_nav_menus(
            array(
                'header-menu' => __('Header Menu'),
                'footer-menu' => __('Footer Menu'),
                'mobile-menu' => __('Mobile Menu')
            )
        );
    }


    /**
     * register_widget_areas.
     *
     * Register widget areas with WordPRess.
     *
     * @uses register_sidebar() https://developer.wordpress.org/reference/functions/register_sidebar/
     *
     * @return void
     */
    function register_widget_areas(): void
    {
        register_sidebar(array(
            'name' => 'Latest Tweets',
            'id' => 'latest_tweets',
            'description' => 'latest tweets',
            'before_widget' => '<section class="widget-area latest-tweets">',
            'after_widget' => '</section>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));
    }

}
