<?php
/**
 * add_acf_menu_pages.
 *
 * Add custom option pages to the WordPRess admin with Acf
 *
 * @see  ___Link to snippet post___
 *
 * @uses acf https://www.advancedcustomfields.com/
 * @uses acf_add_options_page https://www.advancedcustomfields.com/resources/acf_add_options_page/
 * @uses acf_add_options_sub_page https://www.advancedcustomfields.com/resources/acf_add_options_sub_page/
 */
function add_acf_menu_pages()
{
    acf_add_options_page(array(
        'page_title' => 'Theme options',
        'menu_title' => 'Theme options',
        'menu_slug' => 'theme-options',
        'capability' => 'manage_options',
        'position' => 61.1,
        'redirect' => true
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme logos',
        'menu_title' => 'Theme logos',
        'parent_slug' => 'theme-options',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Seo options',
        'menu_title' => 'Seo options',
        'parent_slug' => 'theme-options',
    ));
}


/**
 * Hook: acf/init.
 *
 * @uses add_action() https://developer.wordpress.org/reference/functions/add_action/
 * @uses acf/init https://www.advancedcustomfields.com/resources/acf-init/
 */
add_action('acf/init', 'add_acf_menu_pages');