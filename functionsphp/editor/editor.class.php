<?php
namespace FunctionsPhp\Editor;

use \FunctionsPhp\Includes\Theme as Theme;

/**
 * Editor
 *
 * This class handles actions related to the Gutenberg editor.
 *
 * @link       http://since1979.dev
 * @package    FunctionsPhp\Editor
 */
final class Editor extends Theme {

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * change_gutenberg_color_palette.
     *
     * Add theme support for editor-color-palette,
     * and set colours for the gutenberg colour palette.
     *
     * @uses add_theme_support() https://developer.wordpress.org/reference/functions/add_theme_support/
     * @uses __() https://developer.wordpress.org/reference/functions/__/
     * @uses array() https://www.php.net/manual/en/function.array.php
     *
     * @return void
     */
    public function change_gutenberg_color_palette(): void
    {
        \add_theme_support('editor-color-palette', array(
            array(
                'name' => __('Blackish', 'since1979'),
                'slug' => 'blackish',
                'color' => '#323232',
            ),
            array(
                'name' => __('Whiteish', 'since1979'),
                'slug' => 'white',
                'color' => '#eeeeee',
            ),
            array(
                'name' => __('White', 'since1979'),
                'slug' => 'white',
                'color' => '#ffffff',
            ),
            array(
                'name' => __('Dark blue', 'since1979'),
                'slug' => 'dark-blue',
                'color' => '#1d2735',
            ),
            array(
                'name' => __('Blue', 'since1979'),
                'slug' => 'blue',
                'color' => '#00659b',
            ),
            array(
                'name' => __('Light blue', 'since1979'),
                'slug' => 'light-blue',
                'color' => '#4999ca',
            ),
        ));
    }


    /**
     * disable_custom_color_picler.
     *
     * Disable the custom color selector of the gutenberg color palette,
     *
     * @uses add_theme_support https://developer.wordpress.org/reference/functions/add_theme_support/
     *
     * @return void
     */
    public function disable_custom_color_picler(): void
    {
        \add_theme_support('disable-custom-colors');
    }

}