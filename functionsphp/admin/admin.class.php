<?php
namespace FunctionsPHP\Admin;

use \FunctionsPhp\Includes\Theme as Theme;

/**
 * Class Admin
 *
 * @package FunctionsPHP\Admin
 */
class Admin extends Theme {

    public function __construct()
    {
        parent::__construct();
    }


    public function enqueue_styles(string $page): void
    {
        // if ($page == 'post.php') {
        //     wp_enqueue_style($this->text_domain . '-css', $this->theme_path . '/public/css/admin.css', array(), $this->version, 'all');
        // }
    }


    public function enqueue_scripts($page)
    {
        // if ($page == 'post.php') {
        //     wp_enqueue_script($this->text_domain . '-js', $this->theme_path . '/public/js/admin.js', array(), $this->version, true);
        // }
    }


    public function register_nav_menus()
    {
        register_nav_menus(
            array(
                'header-menu' => __('Header Menu'),
                'footer-menu' => __('Footer Menu'),
                'mobile-menu' => __('Mobile Menu')
            )
        );
    }


    function register_widget_areas()
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
