<?php
/**
 * change_gutenberg_font_sizes.
 *
 * Add theme support for editor-font-sizes,
 * and set font-sizes for the gutenberg editor.
 *
 * @see  ___
 *
 * @uses add_theme_support() https://developer.wordpress.org/reference/functions/add_theme_support/
 * @uses __() https://developer.wordpress.org/reference/functions/__/
 * @uses array() https://www.php.net/manual/en/function.array.php
 * @return void
 */
function change_gutenberg_font_sizes() {

    add_theme_support('editor-font-sizes', array(
        array(
            'name' => __('Small', 'themeLangDomain'),
            'size' => 12,
            'slug' => 'small'
        ),
        array(
            'name' => __('Regular', 'themeLangDomain'),
            'size' => 16,
            'slug' => 'regular'
        ),
        array(
            'name' => __('Large', 'themeLangDomain'),
            'size' => 36,
            'slug' => 'large'
        ),
        array(
            'name' => __('Huge', 'themeLangDomain'),
            'size' => 50,
            'slug' => 'huge'
        )
    ));
}

/**
 * Hook: after_setup_theme.
 *
 * @see  https://developer.wordpress.org/reference/hooks/after_setup_theme/
 * @uses add_action() https://developer.wordpress.org/reference/functions/add_action/
 */
add_action('after_setup_theme', 'change_gutenberg_font_sizes');