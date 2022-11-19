<?php
/**
 * FinancialTheme's functions and definitions
 *
 * @package FinancialTheme
 * @since FinancialTheme 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if (!isset($content_width)) {
    $content_width = 800;
} /* pixels */

if (!function_exists('financialtheme_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function financialtheme_setup()
    {
        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain(
            'financialtheme',
            get_template_directory() . '/languages'
        );

        /**
         * Add default posts and comments RSS feed links to &lt;head&gt;.
         */
        add_theme_support('automatic-feed-links');

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support('post-thumbnails');

        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus([
            'primary' => esc_html__('Primary Menu', 'financialtheme'),
            'secondary' => esc_html__('Secondary Menu', 'financialtheme'),
        ]);

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support('post-formats', [
            'aside',
            'gallery',
            'quote',
            'image',
            'video',
        ]);
    }
endif; // financialtheme_setup

add_action('after_setup_theme', 'financialtheme_setup');

function add_css()
{
    wp_register_style(
        'icomoon',
        get_template_directory_uri() . '/assets/libraries/menu/fonts/icomoon/style.css',
        false,
        '1.1',
        'all'
    );
    wp_register_style(
        'carousel',
        get_template_directory_uri() . '/assets/libraries/menu/css/owl.carousel.min.css',
        false,
        '1.1',
        'all'
    );
    wp_register_style(
        'bootstrap',
        get_template_directory_uri() .
            '/assets/libraries/menu/css/bootstrap.min.css',
        false,
        '1.1',
        'all'
    );
    wp_register_style(
        'lib-style',
        get_template_directory_uri() . '/assets/libraries/menu/css/style.css',
        false,
        '1.1',
        'all'
    );
    wp_register_style(
      'header',
      get_template_directory_uri() . '/assets/css/header.css',
      false,
      '1.1',
      'all'
    );
    wp_register_style(
      'footer',
      get_template_directory_uri() . '/assets/css/footer.css',
      false,
      '1.1',
      'all'
    );
    wp_register_style(
      'style',
      get_template_directory_uri() . '/assets/css/style.css',
      false,
      '1.1',
      'all'
    );
    wp_register_style(
      'index',
      get_template_directory_uri() . '/assets/css/index.css',
      false,
      '1.1',
      'all'
    );
    wp_enqueue_style('icomoon');
    wp_enqueue_style('carousel');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('lib-style');
    wp_enqueue_style('header');
    wp_enqueue_style('footer');
    wp_enqueue_style('style');
    wp_enqueue_style('index');
}

function add_js()
{
    wp_register_script(
      'jquery',
      get_template_directory_uri() .
          '/assets/libraries/menu/js/jquery-3.3.1.min.js',
      false,
      '1.1',
      'all'
    );
    wp_register_script(
      'popper',
      get_template_directory_uri() .
          '/assets/libraries/menu/js/popper.min.js',
      false,
      '1.1',
      'all'
    );
    wp_register_script(
      'bootstrap',
      get_template_directory_uri() .
          '/assets/libraries/menu/js/bootstrap.min.js',
      false,
      '1.1',
      'all'
    );
    wp_register_script(
      'jquery-sticky',
      get_template_directory_uri() .
          '/assets/libraries/menu/js/jquery.sticky.js',
      false,
      '1.1',
      'all'
    );
    wp_register_script(
      'main',
      get_template_directory_uri() .
          '/assets/libraries/menu/js/main.js',
      false,
      '1.1',
      'all'
    );
    wp_register_script(
      'app',
      get_template_directory_uri() .
          '/assets/js/app.js',
      false,
      '1.1',
      'all'
    );
    wp_enqueue_script('popper');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('jquery-sticky');
    wp_enqueue_script('main');
    wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts', 'add_css');
add_action('wp_enqueue_scripts', 'add_js');
