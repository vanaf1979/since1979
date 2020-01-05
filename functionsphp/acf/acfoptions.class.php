<?php
namespace FunctionsPhp\Acf;

use \FunctionsPhp\Includes\Theme as Theme;

/**
 * AcfOptions
 *
 * This class handles all Acf related actions.
 *
 * @link       http://since1979.dev
 * @package    FunctionsPhp\Acf
 */
final class AcfOptions extends Theme {

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
     * add_option_pages.
     *
     * Register option pages with Advanced Custom Fields.
     *
     * @uses acf_add_options_page() https://www.advancedcustomfields.com/resources/acf_add_options_page/
     * @uses acf_add_options_sub_page() https://www.advancedcustomfields.com/resources/acf_add_options_sub_page/
     *
     * @return void
     */
    public function add_option_pages(): void
    {
        \acf_add_options_page(array(
            'page_title' => 'Theme options',
            'menu_title' => 'Theme options',
            'menu_slug' => 'theme-options',
            'capability' => 'edit_posts',
            'position' => 61.1,
            'redirect' => true
        ));

        \acf_add_options_sub_page(array(
            'page_title' => 'General',
            'menu_title' => 'General',
            'parent_slug' => 'themes',
        ));

        \acf_add_options_sub_page(array(
            'page_title' => 'Social',
            'menu_title' => 'Social',
            'parent_slug' => 'theme-options',
        ));

        \acf_add_options_sub_page(array(
            'page_title' => 'Seo',
            'menu_title' => 'Seo',
            'parent_slug' => 'theme-options',
        ));
    }

}
