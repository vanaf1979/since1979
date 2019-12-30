<?php
namespace FunctionsPhp\Acf;

use \FunctionsPhp\Includes\Theme as Theme;

class AcfOptions extends Theme {

    public function __construct()
    {
        parent::__construct();
    }


    public function add_option_pages()
    {
        acf_add_options_page(array(
            'page_title' => 'Theme options',
            'menu_title' => 'Theme options',
            'menu_slug' => 'theme-options',
            'capability' => 'edit_posts',
            'position' => 61.1,
            'redirect' => true
        ));

        acf_add_options_sub_page(array(
            'page_title' => 'General',
            'menu_title' => 'General',
            'parent_slug' => 'theme-options',
        ));

        acf_add_options_sub_page(array(
            'page_title' => 'Social',
            'menu_title' => 'Social',
            'parent_slug' => 'theme-options',
        ));

        acf_add_options_sub_page(array(
            'page_title' => 'Seo',
            'menu_title' => 'Seo',
            'parent_slug' => 'theme-options',
        ));
    }

}
