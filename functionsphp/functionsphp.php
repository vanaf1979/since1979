<?php
namespace FunctionsPhp;

use \FunctionsPhp\Includes\Theme as Theme;
use \FunctionsPhp\Includes\Loader as Loader;
use \FunctionsPhp\FrontEnd\FrontEnd as FrontEnd;
use \FunctionsPhp\Admin\Admin as Admin;
use \FunctionsPhp\Acf\AcfOptions as AcfOptions;
use \FunctionsPhp\Editor\Editor as Editor;
use \FunctionsPhp\CleanUp\CleanUp as CleanUp;

/**
 * FunctionsPhp
 *
 * This class defines all hooks.
 *
 * @link       http://since1979.dev
 * @package    FunctionsPhp
 */
final class FunctionsPhp extends Theme {

    /**
     * loader
     *
     * @var Loader #loader
     */
    protected $loader;


    /**
     * __construct.
     *
     * The class constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->loader = new Loader();

        $this->init();
    }


    /**
     * init.
     *
     * Initialize the class.
     */
    private function init()
    {
        $this->define_frontend_hooks();
        $this->define_admin_hooks();
        $this->define_acf_hooks();
        $this->define_editor_hooks();
        $this->define_cleanup_hooks();

        $this->loader->run();
    }


    /**
     * define_frontend_hooks.
     *
     * Register all hooks related to the frontend..
     *
     * @uses \FunctionsPhp\FrontEnd\FrontEnd
     */
    private function define_frontend_hooks()
    {
        $frontend = new FrontEnd();

        // Enqueue styles and scripts.
        $this->loader->add_action('wp_enqueue_scripts', $frontend, 'enqueue_styles', 10, 1);
        $this->loader->add_action('wp_enqueue_scripts', $frontend, 'enqueue_scripts', 10, 1);

        // Add theme support.
        $this->loader->add_action('init', $frontend, 'add_theme_support', 1, 1);

        // Register thumbnail sizes.
        $this->loader->add_action('init', $frontend, 'register_thumbnail_sizes', 1);

        // Load theme's translated strings.
        $this->loader->add_action('after_setup_theme', $frontend, 'load_theme_textdomain', 1);
    }


    /**
     * define_acf_hooks.
     *
     * Register all hooks related to Acf.
     *
     * @uses \FunctionsPhp\Acf\Acf
     */
    private function define_acf_hooks()
    {
        $acfOptions = new AcfOptions();

        // Remove emoji's header.
        $this->loader->add_action('init', $acfOptions, 'add_option_pages');
    }


    /**
     * define_admin_hooks.
     *
     * Register all hooks related to the admin area.
     *
     * @uses \FunctionsPhp\Admin\Admin
     */
    private function define_admin_hooks()
    {
        $admin = new Admin();

        // Enqueue styles and scripts.
        $this->loader->add_action('admin_enqueue_scripts', $admin, 'enqueue_styles');
        $this->loader->add_action('admin_enqueue_scripts', $admin, 'enqueue_scripts');

        // Register navigational menus.
        $this->loader->add_action('init', $admin, 'register_nav_menus');

        // Register widgert areas.
        $this->loader->add_action('widgets_init', $admin, 'register_widget_areas');
    }


    /**
     * define_editor_hooks.
     *
     * Register all hooks related to the Gutenberg editor.
     *
     * @uses \FunctionsPhp\Editor\Editor
     */
    private function define_editor_hooks()
    {
        $editor = new Editor();

        // Custom colors in editor color palette.
        $this->loader->add_action('after_setup_theme', $editor, 'change_gutenberg_color_palette');

        // Disable the selection of custom colors.
        $this->loader->add_action('after_setup_theme', $editor, 'disable_custom_color_picler');
    }


    /**
     * define_cleanup_hooks.
     *
     * Cleanup unneeded features from the head.
     *
     * @uses \FunctionsPhp\CleanUp\CleanUp
     */
    private function define_cleanup_hooks()
    {
        $cleanup = new CleanUp();

        // Remove emoji's header.
        $this->loader->add_action('init', $cleanup, 'disable_emoji_dequeue_script');

        // Remove junk from header.
        $this->loader->add_action('init', $cleanup, 'clean_up_header');

        // Remove wpembed scripts.
        $this->loader->add_action('wp_footer', $cleanup, 'remove_wpembed_scripts');
    }

}
