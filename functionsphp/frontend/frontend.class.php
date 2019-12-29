<?php
namespace FunctionsPhp\FrontEnd;

use \FunctionsPhp\Includes\Theme as Theme;

class FrontEnd extends Theme {

    public function __construct()
    {
        parent::__construct();
    }


    public function enqueue_styles()
    {
        // Fonts
        \wp_enqueue_style($this->text_domain . '-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap', array(), $this->version, 'all');
        \wp_enqueue_style($this->text_domain . '-fontawesome', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css?ver=1.0.0', array(), $this->version, 'all');

        // plugins
        \wp_enqueue_style($this->text_domain . '-mailchimp', '//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css', array(), $this->version, 'all');
        \wp_enqueue_style($this->text_domain . '-mmenu', $this->theme_path . '/public/css/plugins/mmenu.css', array(), $this->version, 'all');

        // App
        \wp_enqueue_style($this->text_domain . '-app', $this->theme_path . '/public/css/app.css', array(), $this->version, 'all');
    }


    public function enqueue_scripts()
    {
        \wp_enqueue_script($this->text_domain . '-mmenu', $this->theme_path . '/public/js/plugins/mmenu.js', array(), $this->version, true);
        \wp_enqueue_script($this->text_domain . '-app', $this->theme_path . '/public/js/app.js', array(), $this->version, true);
    }


    public function register_thumbnail_sizes()
    {
        \add_theme_support('post-thumbnails');

        \add_image_size( 'post-thumb-large' , 1000 , 9999 , false );
        \add_image_size( 'post-thumb-medium' , 700 , 9999 , false );
        \add_image_size( 'post-thumb-small' , 334 , 9999 , false );
    }


    public function add_theme_support()
    {
        \add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
        \add_theme_support('menus');
        \add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
    }


    public function load_theme_textdomain()
    {
        \load_theme_textdomain($this->text_domain, $this->theme_path . '/languages');
    }

}